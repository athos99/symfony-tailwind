<?php
namespace Athos99\SolidBundle\Entity;

use Stringable;

/**
* Entity with name.
*/
interface NamedEntityInterface extends Stringable
{
   /**
    * Get entity name.
    *
    * @return string
    */
   public function getName(): ?string;

   /**
    * Set the entity name.
    *
    * @param string|null $name The name.
    *
    * @return self
    */
   public function setName(?string $name): self;
}