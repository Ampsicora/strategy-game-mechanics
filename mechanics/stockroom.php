<?php

  require 'resources.php';

  /**
   *  StockRoom defines the max amount of resources that can be stocked
   */
  class StockRoom
  {
    public $resources = [];

    protected $stock_limit = 800;


    public function __construct (Wood $wood, Stone $stone, Iron $iron)
    {
      $this->resources = ['wood' => $wood, 'stone' => $stone, 'iron' => $iron];
    }

    public function incrementStockLimit ($amount)
    {
      $this->stock_limit += $amount;
    }

    public function decrementStockLimit ($amount)
    {
      $this->stock_limit -= $amount;
    }

    public function getResources ()
    {
      return $this->resources;
    }

    public function getStockLimit ()
    {
      return $this->stock_limit;
    }
  }


  $stockRoom = new StockRoom($wood, $stone, $iron);


?>
