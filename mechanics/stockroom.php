<?php

  require 'resources.php';

  /**
   *  StockRoom: Class that defines the max amount of resources that can be stored
   */
  class StockRoom
  {
    // Array in which resources are saved
    public $resources = [];

    // Resource's max amount that can be stored.
    protected $stock_limit = 800;


    // Function used to save all the resources
    public function __construct (Wood $wood, Stone $stone, Iron $iron)
    {
      $this->resources = ['wood' => $wood, 'stone' => $stone, 'iron' => $iron];
    }

    // Function used to increment the max amount
    public function incrementStockLimit ($amount)
    {
      $this->stock_limit += $amount;
    }

    //Function used to decrement the max amount
    public function decrementStockLimit ($amount)
    {
      $this->stock_limit -= $amount;
    }

    // Function used to get Resources
    public function getResources ()
    {
      return $this->resources;
    }

    // Function used to get the max amount
    public function getStockLimit ()
    {
      return $this->stock_limit;
    }
  }

  // Class's object declaretion
  $stockRoom = new StockRoom($wood, $stone, $iron);


?>
