<?php

  require 'production.php';

  /**
   * Foundations is an abstraction to code all kind of villages in a scalable way
   */
  abstract class Foundations
  {
    protected $id;

    protected $name;

    protected $infrastructures = [];

    protected $production;


    public function __construct (Production $production)
    {
      $this->production = $production;
    }

    public function setName ($name)
    {
      $this->name = $name;
    }

    public function getName ()
    {
      return $this->name;
    }

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



  $village = new Village($production);

?>
