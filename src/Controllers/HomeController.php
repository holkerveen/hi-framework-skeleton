<?php

namespace App\Controllers;

use Framework\Attributes\AllowAccess;
use Framework\Attributes\Route;
use Framework\Enums\Role;
use Twig\Environment;

class HomeController
{
    #[Route('/')]
    #[AllowAccess(Role::Unauthenticated)]
    public function index(Environment $twig): string
    {
        return $twig->render('home.html.twig', [
            'title' => 'Welcome to DIY PHP Framework',
        ]);
    }
}
