<?php
// src/VL/PlatformBundle/Entity/AdvertRepository.php

namespace VL\PlatformBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

class AdvertRepository extends EntityRepository
{
  public function getAdverts($page, $nbPerPage)
  {
    $query = $this->createQueryBuilder('a')
      // Jointure sur l'attribut image
      ->leftJoin('a.image', 'i')
      ->addSelect('i')
      // Jointure sur l'attribut categories
      ->leftJoin('a.categories', 'c')
      ->addSelect('c')
      ->orderBy('a.date', 'DESC')
      ->getQuery()
    ;
    
    // Enfin, on retourne l'objet Paginator correspondant à la requête construite
    return new Paginator($query, true);
  }
}