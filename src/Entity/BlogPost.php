<?php

namespace App\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table(name: 'blogposts')]
class BlogPost
{
    #[Id, Column(type: 'string')]
    private string $id;

    #[Column(type: 'string')]
    private string $title;
    
    #[Column(type: 'text')]
    private string $text;
}