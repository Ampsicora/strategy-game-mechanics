<?php

  require 'production.php';

  /**
   * Village is an abstraction to code all villages in a scalable way
   */
  abstract class Foundations
  {
    protected $id;

    protected $name;

    protected $infrastructures = [];

    protected $production;


    public function __construct(Production $production)
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
    //new Village
  }



  $village = new Village('Rome', $production);

?>
