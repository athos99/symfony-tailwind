<?php

namespace Athos99\SolidBundle\Entity;

use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

/**
* Trait for entities creation & update datetime.
*
*   To enable the auto-setting, your entity has to implement:
*   Athos99\SolidBundle\Entity\DatedEntityInterface
*/
trait DatedEntityTrait
{
   /**
    * The entity creation date.
    *
    * @var DateTimeInterface|null
    */
   #[ORM\Column(type: 'datetime', nullable: false, options: ['default' => 'CURRENT_TIMESTAMP'])]
   private ?DateTimeInterface $createdAt = null;

   /**
    * The entity last update datetime.
    *
    * @var DateTimeInterface|null
    */
    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?DateTimeInterface $updatedAt = null;

   /**
    * Get the entity creation date.
    *
    * @return DateTimeInterface|null
    */
   public function getCreatedAt(): ?DateTimeInterface
   {
       return $this->createdAt;
   }

   /**
    * Set the entity creation date.
    *
    * @param DateTimeInterface|null $creationDate The entity creation date.
    *
    * @return $this
    */
   public function setCreatedAt(?DateTimeInterface $creationDate): self
   {
       $this->createdAt = $creationDate;

       return $this;
   }

   /**
    * Get the entity last update datetime.
    *
    * @return DateTimeInterface|null
    */
   public function getUpdatedAt(): ?DateTimeInterface
   {
      return $this->updatedAt;
   }

   /**
    * Set the entity last update datetime.
    *
    * @param DateTimeInterface|null $updatedAt The entity last update datetime.
    *
    * @return UpdatedAtTrait
    */
   public function setUpdatedAt(?DateTimeInterface $updatedAt): self
   {
       $this->updatedAt = $updatedAt;

       return $this;
   }
}