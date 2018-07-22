<?php

  require 'infrastructure.php';

  /**
   * Architect
   */
  class Architect
  {
    protected $infrastructures = [];


    public function __construct (TownHall $townHall, Barrack $barrack, Fortification $fortification, SawMill $sawMill, StoneQuarry $stoneQuarry, IronMine $ironMine, WareHouse $wareHouse, Market $market, Academy $academy, Embassy $embassy, Armory $armory)
    {
      $this->infrastructures = [$townHall, $barrack, $fortification, $sawMill, $stoneQuarry, $ironMine, $wareHouse, $market, $academy, $embassy, $armory];
    }

    public function getInfrastructures ()
    {
      return $this->infrastructures;
    }
  }


  $architect = new Architect($townHall, $barrack, $fortification, $sawMill, $stoneQuarry, $ironMine, $wareHouse, $market, $academy, $embassy, $armory);

?>
