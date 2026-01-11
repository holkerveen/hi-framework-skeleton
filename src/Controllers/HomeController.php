<?php

namespace App\Controllers;

use Hi\Attributes\AllowAccess;
use Hi\Attributes\Route;
use Hi\Enums\Role;
use Hi\ViewInterface;

class HomeController
{
    #[Route('/')]
    #[AllowAccess(Role::Unauthenticated)]
    public function index(ViewInterface $twig): string
    {
        return $twig->render('home.html.twig', [
            'title' => 'Hi',
        ]);
    }
}
