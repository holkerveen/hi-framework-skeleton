<?php

namespace App\Controllers;

use App\Entity\BlogPost;
use Hi\Attributes\AllowAccess;
use Hi\Attributes\Route;
use Hi\Enums\Role;
use Hi\Storage\EntitySearchInterface;
use Hi\ViewInterface;

class BlogPostController
{
    #[AllowAccess(Role::Unauthenticated), Route('/blog')]
    public function index(EntitySearchInterface $entitySearch, ViewInterface $view): string
    {
        $posts = $entitySearch->find(BlogPost::class, []);
        return $view->render('blog-post/index.html.twig', compact('posts'));
    }
}