<?php

  /**
   *  Infrastructure is an abstraction to code all kind of buildings in a scalable way
   */
  abstract class Infrastructure
  {
    protected $name;

    protected $description;

    protected $level = 0;

    protected $resources_needed = [];

    protected $requirements = [];


    public function incrementLevel ()
    {
      $this->level += 1;
    }

    public function decrementLevel ()
    {
      $this->level -= 1;
    }

    public function checkLevel ()
    {
      return ($this->level >= 0 && $this->level <= 19) ? true : false;
    }

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


  include 'buildings.php';


?>
