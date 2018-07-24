<?php

  /**
  *
  */

  abstract class Troop
  {

    // Troop's features
    protected $name;
    protected $description;
    protected $level = [];
    protected $powerPoint = [];

    public function incrementLevel ()
    {
      $this->level += 1;
    }

    public function decrementLevel ()
    {
      $this->level -= 1;
    }

    public function incrementPowerPoint ()
    {
      $this->powerPoint += 1;
    }

    public function decrementPowerPoint ()
    {
      $this->powerPoint -= 1;
    }

    public function getName ($name)
    {
      return $name;
    }

    public function getDescrition ($description)
    {
      return $description;
    }

    public function getLevel ($level)
    {
      return $level;
    }

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
