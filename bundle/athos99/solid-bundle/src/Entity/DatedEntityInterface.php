<?php

namespace Athos99\SolidBundle\Entity;

use DateTimeInterface;

/**
* Entity with a createdAt and an updatedAt datetime fields.
*/
interface DatedEntityInterface
{
   /**
    * Get the entity creation date.
    *
    * @return DateTimeInterface|null
    */
   public function getCreatedAt(): ?DateTimeInterface;

   /**
    * Set the entity creation date.
    *
    * @param DateTimeInterface|null $createdAt The entity creation date.
    *
    * @return self
    */
   public function setCreatedAt(?DateTimeInterface $createdAt): self;

   /**
    * Get the entity last update datetime.
    *
    * @return DateTimeInterface|null
    */
   public function getUpdatedAt(): ?DateTimeInterface;

   /**
    * Set the entity last update datetime.
    *
    * @param DateTimeInterface|null $updatedAt The entity last update datetime.
    *
    * @return self
    */
   public function setUpdatedAt(?DateTimeInterface $updatedAt): self;
}