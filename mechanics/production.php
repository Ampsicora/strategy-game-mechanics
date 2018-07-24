<?php

require 'stockroom.php'; //to remove

  /**
   * Production: Class that defines foundation's production per hour
   */
  class Production
  {
    // Array in which are saved production's per hour amount of resources.
    protected $resourcesPerHour = [];

    // Function used to save all the production's per hour amount of resources
    public function __construct ($wood_amount = 100, $stone_amount = 100, $iron_amount = 100)
    {
      $this->resourcesPerHour = ['wood' => $wood_amount, 'stone' => $stone_amount, 'iron' => $iron_amount];
    }

    // Function used to increment the production
    public function incrementResourcesPerHour ($resource, $amount)
    {
      $this->resourcesPerHour[$resource] += $amount;
    }

    // Function used to decrement the production
    public function decrementResourcesPerHour ($resource, $amount)
    {
      $this->resourcesPerHour[$resource] -= $amount;
    }

    // Function used to get the production
    public function getResourcesPerHour ()
    {
      return $this->resourcesPerHour;
    }
  }

  // Class's object declarretion 
  $production = new Production();
?>
