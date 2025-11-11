<?php
namespace Athos99\SolidBundle\EventListener\Entity;

use DateTime;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsDoctrineListener;
use Doctrine\Persistence\Event\LifecycleEventArgs;
use Athos99\SolidBundle\Entity\DatedEntityInterface;
use Doctrine\ORM\Event\PrePersistEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;

/**
* Auto set entity dates.
*/
#[AsDoctrineListener(event: 'prePersist')]
#[AsDoctrineListener(event: 'preUpdate')]
class EntityDateAutoSetter
{
   /**
    * Handle entities pre-persist & pre-update events to set createdAt & updatedAt dates.
    *
    * @param PrePersistEventArgs $args The event arguments.
    *
    * @return void
    */
   public function __invoke(LifecycleEventArgs $args): void
   {
       $entity = $args->getObject();

    //    if ($args instanceof PrePersistEventArgs && $entity instanceof CreatedAtEntityInterface && null === $entity->getCreatedAt()) {
    //        $entity->setCreatedAt(new DateTime());
    //    } elseif ($args instanceof PreUpdateEventArgs && $entity instanceof UpdatedAtEntityInterface) {
    //        $entity->setUpdatedAt(new DateTime());
    //    }
     
   }
}