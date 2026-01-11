<?php

namespace App\Controllers;

use Hi\Attributes\AllowAccess;
use Hi\Attributes\Route;
use Hi\Auth\User;
use Hi\Enums\Role;
use Hi\Http\RedirectResponse;
use Hi\SessionInterface;
use Hi\SessionUser;
use Hi\Storage\EntitySearchInterface;
use Hi\ViewInterface;

class AuthController
{
    #[AllowAccess(Role::Unauthenticated), Route('/login')]
    public function login(
        ViewInterface $view,
        EntitySearchInterface $entitySearch,
        SessionInterface $session
    ): RedirectResponse|string {
        // TODO move this to UserProviderInterface or some such
        if ($_POST['email'] ?? null && $_POST['password'] && null) {
            $user = $entitySearch->find(User::class, ['email' => $_POST['email']])[0] ?? null;
            if (!$user) {
                // Bogus password hash to prevent user enumeration by timing responses
                password_hash('1234', PASSWORD_DEFAULT);
                return $view->render("auth/login.html.twig", ['error' => 'Username or password is incorrect.']);
            }
            if (!$user->verifyClientSecret($_POST['password'])) {
                return $view->render("auth/login.html.twig", ['error' => 'Username or password is incorrect.']);
            }
            $session->set('user', SessionUser::fromUser($user));
            return new RedirectResponse('/');
        }
        return $view->render("auth/login.html.twig");
    }

    #[AllowAccess(Role::Unauthenticated), Route('/logout')]
    public function logout(ViewInterface $view, SessionInterface $session): string
    {
        $session->remove('user');
        return $view->render("auth/logout.html.twig");
    }
}