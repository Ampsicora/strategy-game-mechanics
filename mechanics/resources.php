
<?php

  /**
   *  Resource: Abstract class that define Resource's feature.
   **/
  abstract class Resource
  {
    // Resource's name
    protected $name;

    // Resource's quantity
    protected $quantity = 600;


    public function incrementQuantity ()
    {

    }

    public function decrementQuantity ()
    {

    }

    // Function used to get resource's name
    public function getName ()
    {
      return $this->name;
    }

    // Function used to get resource's quantity
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
    protected $name = 'wood';
  }

  /**
   * Stone is an elementary resource used in the game
   */
  class Stone extends Resource
  {
    protected $name = 'stone';
  }

  /**
   * Iron is an elementary resource used in the game
   */
  class Iron extends Resource
  {
    protected $name = 'iron';
  }
  

  // Class's object declaretion
  $wood = new Wood("wood");
  $stone = new Stone("stone");
  $iron = new Iron("iron");

?>
