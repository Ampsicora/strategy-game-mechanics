<?php

  /**
   *  Infrastructure: Abstract class in which are defined infrastructure's features.
   */
  abstract class Infrastructure
  {
    // Infrastructure's name
    protected $name;

    // Infrastructure's description
    protected $description;

    // Infrastructure's level
    protected $level = 0;

    // Infrastructure's resources needed to be upgraded
    protected $resources_needed = [];

    // Infrastructure's research needed to be upgraded
    protected $requirements = [];


    // Function used to increment infrastructure's level
    public function incrementLevel ()
    {
      $this->level += 1;
    }

    // Function used to decrement infrastructure's level
    public function decrementLevel ()
    {
      $this->level -= 1;
    }

    // Function used to check if infrastructure's level is acceptable
    public function checkLevel ()
    {
      return ($this->level >= 0 && $this->level <= 19) ? true : false;
    }

    // Function used to get infrastructure's name
    public function getName ()
    {
      return $this->name;
    }

    // Function used to get infrastructure's description
    public function getDescription ()
    {
      return $this->description;
    }

    // Function used to get infrastructure's level
    public function getLevel ()
    {
      return $this->level;
    }

    // Function used to get infrastructure's resources needed
    public function getResources_needed ()
    {
      return $this->resources_needed;
    }

    // Function used to get infrastructure's requirements
    public function getRequirements ()
    {
      return $this->requirements;
    }
  }


  include 'buildings.php';


?>
