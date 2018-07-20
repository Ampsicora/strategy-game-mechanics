<?php

  /**
   *
   */

  abstract class Infrastructure
  {
    protected $name;

    protected $description;

    protected $level = 0;

    protected $resources_needed = [];

    protected $requirements = [];

    public function getName ()
    {
      return $this->name;
    }

    public function getDescription ()
    {
      return $this->description;
    }

    public function getLevel ()
    {
      return $this->level;
    }

    public function getResources_needed ()
    {
      return $this->resources_needed;
    }

    public function getRequirements ()
    {
      return $this->requirements;
    }
  }

  /**
   *
   */
  class TownHall extends Infrastructure
  {

    function __construct(argument)
    {

    }
  }

  /**
   *
   */
  class Barrack extends Infrastructure
  {

    function __construct(argument)
    {

    }
  }

  /**
   *
   */
  class Fortification extends Infrastructure
  {

    function __construct(argument)
    {

    }
  }

  /**
   *
   */
  class SawMill extends Infrastructure
  {

    function __construct(argument)
    {

    }
  }

  /**
   *
   */
  class StoneQuarry extends Infrastructure
  {

    function __construct(argument)
    {

    }
  }

  /**
   *
   */
  class IronMine extends Infrastructure
  {

    function __construct(argument)
    {
      // code...
    }
  }

  /**
   *
   */
  class Stockroom extends Infrast
  {

    function __construct(argument)
    {
      // code...
    }
  }

  /**
   *
   */
  class Market extends Infrastructure
  {

    function __construct(argument)
    {
      // code...
    }
  }

  /**
   *
   */
  class Academy extends Infrastructure
  {

    function __construct(argument)
    {
      // code...
    }
  }

  /**
   * Embassy
   */
  class Embassy extends Infrastructure
  {

    function __construct(argument)
    {
      // code...
    }
  }

  /**
   *
   */
  class Armory extends Infrastructure
  {

    function __construct(argument)
    {
      // code...
    }
  }










?>
