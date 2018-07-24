<?php

  require 'infrastructure.php';

  /**
   * Architect: This class provides an entity that checks if selected building can be upgraded.
   */
  class Architect
  {
    // Array in which all buildings are stored.
    protected $infrastructures = [];

    // Function used to save all buildings in the array.
    public function __construct (TownHall $townHall, Barrack $barrack, Fortification $fortification, SawMill $sawMill, StoneQuarry $stoneQuarry, IronMine $ironMine, WareHouse $wareHouse, Market $market, Academy $academy, Embassy $embassy, Armory $armory)
    {
      $this->infrastructures = [$townHall, $barrack, $fortification, $sawMill, $stoneQuarry, $ironMine, $wareHouse, $market, $academy, $embassy, $armory];
    }

    // Function used to give the array.
    public function getInfrastructures ()
    {
      return $this->infrastructures;
    }
  }

  //Class's object declaration.
  $architect = new Architect($townHall, $barrack, $fortification, $sawMill, $stoneQuarry, $ironMine, $wareHouse, $market, $academy, $embassy, $armory);

?>
