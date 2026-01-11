<?php

namespace App\Controllers;

use Hi\Attributes\Route;
use Hi\Auth\User;
use Hi\Storage\EntitySearchInterface;
use Hi\ViewInterface;

class UserController
{
    #[Route('/admin/users')]
    public function index(EntitySearchInterface $entitySearch, ViewInterface $view): string
    {
        $users = $entitySearch->find(User::class, []);
        return $view->render('user/index', compact('users'));
    }
}
