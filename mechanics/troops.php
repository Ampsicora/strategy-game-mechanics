<?php

  /**
  * Troop: Abstract class that define all Troop's features.
  */

  abstract class Troop
  {

    // Troop's name
    protected $name;

    // Troop's description
    protected $description;

    // Troop's level
    protected $level = [];

    // Troop's powerPoint
    protected $powerPoint = [];


    // Function used to increment troop's level
    public function incrementLevel ()
    {
      $this->level += 1;
    }

    // Function used to decrement troop's level
    public function decrementLevel ()
    {
      $this->level -= 1;
    }

    // Function used to increment troop's power point
    public function incrementPowerPoint ()
    {
      $this->powerPoint += 1;
    }

    // Function used to decrement troop's power point
    public function decrementPowerPoint ()
    {
      $this->powerPoint -= 1;
    }

    // Function used to get troop's name
    public function getName ($name)
    {
      return $name;
    }

    // Function used to get troop's description
    public function getDescrition ($description)
    {
      return $description;
    }

    // Function used to get troop's level
    public function getLevel ($level)
    {
      return $level;
    }

    // Function used to get troop's power point 
    public function getPowerPoint ($powerPoint)
    {
      return $powerPoint;
    }
}

  /**
   * On foot troop's type
   */
  class Infantry extends Troop
  {

    function __construct(argument)
    {
      // code...
    }
  }

  /**
   * On Horse troop's type
   */
  class Knight extends Troop
  {

    function __construct(argument)
    {
      // code...
    }
  }

  /**
   * Special troop's type
   */
  class Special extends Troop
  {

    function __construct(argument)
    {
      // code...
    }
  }

  /**
   * Siege troop's type
   */
  class SiegeWeapon extends Troop
  {

    function __construct(argument)
    {
      // code...
    }
  }

?>
