
<?php

  /**
   *  Resource is an abstraction to code all resources in a scalable way
   **/
  abstract class Resource
  {
    protected $name;

    protected $quantity = 600;


    public function __construct ($name)
    {
      $this->name = $name;
    }

    public function getName ()
    {
      return $this->name;
    }

    public function getQuantity ()
    {
      return $this->quantity;
    }
  }

  /**
   * Wood is an elementary resource used in the game
   */
  class Wood extends Resource
  {
    // wood resource
  }

  /**
   * Stone is an elementary resource used in the game
   */
  class Stone extends Resource
  {
    // stone resource
  }

  /**
   * Iron is an elementary resource used in the game
   */
  class Iron extends Resource
  {
    // iron resource
  }

  $wood = new Wood("wood");
  $stone = new Stone("stone");
  $iron = new Iron("iron");

?>
