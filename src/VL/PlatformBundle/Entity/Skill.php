<?php
// src/VL/PlatformBundle/Entity/Skill.php

namespace VL\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="VL\PlatformBundle\Entity\SkillRepository")
 */
class Skill
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="name", type="string", length=255)
   */
  private $name;
  
  // Getters et setters
}