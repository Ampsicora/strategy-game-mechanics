<?php

  require 'production.php';
  require 'architect.php';
  require 'player.php';

  /**
   * Foundations: Abstract class that represent all the features of an entity in which will be loaded player's village.
   */
  abstract class Foundations
  {
    // Attribute used to identify foundations individually
    protected $id;

    // Attribute that stand for the foundations's name
    protected $name;

    protected $owner;

    // This attribute represent the resource's production
    protected $production;

    protected $architect;


    public function __construct (Player $owner, Production $production, Architect $architect)
    {
      $this->owner = $owner;

      $this->production = $production;

      $this->architect = $architect;
    }

    // Function used to set Foundation's name
    public function setName ($name)
    {
      $this->name = $name;
    }

    public function getId ()
    {
      return $this->id;
    }

    public function getName ()
    {
      return $this->name;
    }

    public function getOwner ()
    {
      return $this->owner;
    }

    public function getProduction ()
    {
      return $this->production;
    }

    public function getInfrastructures ()
    {
      return $this->architect->infrastructures;
    }
  }



  /**
   * Village is the basic type of town in the game
   */
  class Village extends Foundations
  {
    protected $name = "User's Village";
  }



  $village = new Village($player, $production, $architect);

?>
