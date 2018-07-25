<?php

  /**
   *
   */
  class Player
  {
    protected $id;

    protected $nickname;

    protected $population;


    function __construct($nickname, $population)
    {
      $this->nickname = $nickname;

      $this->population = $population;
    }

    public function getId ();
    {
      return $this->id;
    }

    public function getUsername ()
    {
      return $this->nickname;
    }

    public function getPopulation ()
    {
      return $this->population;
    }
  }


$player = new Player('Mirko', 'Romans');

?>
