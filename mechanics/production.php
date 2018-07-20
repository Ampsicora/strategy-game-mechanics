<?php

require 'stockroom.php';

  /**
   * Production defines the hourly production of each village
   */
  class Production
  {
    protected $resourcesPerHour = [];



    public function __construct ($wood_amount = 100, $stone_amount = 100, $iron_amount = 100)
    {
      $this->resourcesPerHour = ['wood' => $wood_amount, 'stone' => $stone_amount, 'iron' => $iron_amount];
    }

    public function incrementResourcesPerHour ($resource, $amount)
    {
      $this->resourcesPerHour[$resource] += $amount;
    }

    public function getResourcesPerHour ()
    {
      return $this->resourcesPerHour;
    }
  }

  $production = new Production();
?>
