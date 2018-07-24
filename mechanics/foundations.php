<?php

  require 'production.php';

  /**
   * Foundations: Abstract class that represent all the features of an entity in which will be loaded player's village.
   */
  abstract class Foundations
  {
    // Attribute used to identify foundations individually
    protected $id;

    // Attribute that stand for the foundations's name
    protected $name;

    // Array where all the infrastructures are saved
    protected $infrastructures = [];

    // This attribute represent the resource's production
    protected $production;

    // Function used to set the production.
    public function __construct (Production $production)
    {
      $this->production = $production;
    }

    // Function used to set Foundation's name
    public function setName ($name)
    {
      $this->name = $name;
    }

    //Function used to get Foundation's name
    public function getName ()
    {
      return $this->name;
    }

    // Function used to get Foundation's production
    public function getProduction ()
    {
      return $this->production;
    }
  }



  /**
   * Village is the basic type of town in the game
   */
  class Village extends Foundations
  {
    protected $name = "User's Village";
  }

  // Class's object declaretion
  $village = new Village($production);

?>
