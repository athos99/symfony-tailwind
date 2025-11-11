<?php
// src/Entity/Book.php

namespace App\Entity;

use Athos99\SolidBundle\Entity\Field\Primary\IdEntityInterface;
use Athos99\SolidBundle\Entity\Field\Primary\IdTrait;
use Athos99\SolidBundle\Entity\NamedEntityInterface;
use Athos99\SolidBundle\Entity\NamedEntityTrait;

// class Book implements IdEntityInterface, NamedEntityInterface
// {
//    use IdTrait;
//    use NamedEntityTrait;
// }



class Book implements  NamedEntityInterface
{
      use NamedEntityTrait;
}