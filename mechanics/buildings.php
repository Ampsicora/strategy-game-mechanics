<?php

/*--------------------------------------------|
|                   Civic                     |
\--------------------------------------------*|

/**
 * TownHall: Class that represent the main infrastructure.
 */
class TownHall extends Infrastructure
{
  protected $name = 'TownHall';

  protected $description = "Celebrations are held in the town hall. At level 1 you can hold a small celebration and at level 10 you can hold a great one. Celebrations gain you culture points and a great celebration can help with conquering villages.";

  protected $resources_needed = [];

  protected $requirements = [];
}


/**
 * Academy: In the academy new unit types can be developed.
 */
class Academy extends Infrastructure
{
  protected $name = 'Academy';

  protected $description = "In the academy new unit types can be developed. By increasing its level you can order the research of better units";

  protected $resources_needed = [];

  protected $requirements = [];
}


/**
 * Embassy: The embassy is the place for diplomatic relations.
 */
class Embassy extends Infrastructure
{
  protected $name = 'Embassy';

  protected $description = "The embassy is the place for diplomatic relations. At level 1 you can join an alliance, while with a level 3 embassy you may even found one yourself.";

  protected $resources_needed = [];

  protected $requirements = [];
}



/*--------------------------------------------|
|                 Economic                    |
\--------------------------------------------*|

/**
 * Sawmill: Here wood delivered by your lumberjacks is processed.
 */
class SawMill extends Infrastructure
{
  protected $name = 'SawMill';

  protected $description = "Here wood delivered by your lumberjacks is processed. Based on its level your sawmill can increase your wood production by up to 25 percent.";

  protected $resources_needed = [];

  protected $requirements = [];
}


/**
 * StoneQuarry: Stone is produced here.
 */
class StoneQuarry extends Infrastructure
{
  protected $name = 'StoneQuarry';

  protected $description = "Stone is produced here. By increasing its level you increase the production of stone.";

  protected $resources_needed = [];

  protected $requirements = [];
}


/**
 * IronMine: Iron is produced here.
 */
class IronMine extends Infrastructure
{
  protected $name = 'IronMine';

  protected $description = "Iron is produced here. By increasing its level you increase the production of iron.";

  protected $resources_needed = [];

  protected $requirements = [];
}


/*
 * Warehouse: The resources wood, stone and iron are stored in your warehouse.
 */
class WareHouse extends Infrastructure
{
  protected $name = 'Stockroom';

  protected $description = "The resources wood, stone and iron are stored in your warehouse. By increasing its level you increase your warehouse's capacity. ";

  protected $resources_needed = [];

  protected $requirements = [];
}


/**
 * Market: At the marketplace you can trade resources with other players.
 */
class Market extends Infrastructure
{
  protected $name = 'Market';

  protected $description = "At the marketplace you can trade resources with other players. The higher its level, the more resources can be transported at the same time. ";

  protected $resources_needed = [];

  protected $requirements = [];
}



/*--------------------------------------------|
|                  Military                   |
\--------------------------------------------*|

/**
 * Barrack: Infantry can be trained in the barracks.
 */
class Barrack extends Infrastructure
{
  protected $name = 'Barrack';

  protected $description = "Infantry can be trained in the barracks. The higher its level the faster the troops are trained. If you want to build more advanced troops than the first troops, you'll need to research them using the academy.";

  protected $resources_needed = [];

  protected $requirements = [];
}


/**
 * Fortification: By building a city wall you can protect your village against the barbarian hordes of your enemies.
 */
class Fortification extends Infrastructure
{
  protected $name = 'Fortification';

  protected $description = "By building a city wall you can protect your village against the barbarian hordes of your enemies. A higher level city wall will give your troops a higher defence bonus. The city wall can only be built by Romans and gives the highest defence bonus but is extremely easy to destroy. The bonus given to your troops by this wall as a percentage is (1.03^level)*100, and a list of how many rams are needed to completely destroy a wall of a certain level is below.";

  protected $resources_needed = [];

  protected $requirements = [];
}


/**
 * Armory: The weapons and armour of your warriors are enhanced in the smithy's melting furnaces.
 */
class Armory extends Infrastructure
{
  protected $name = 'Armory';

  protected $description = "The weapons and armour of your warriors are enhanced in the smithy's melting furnaces. By increasing its level, you can order the fabrication of even better weapons and armour.";

  protected $resources_needed = [];

  protected $requirements = [];
}



// Economic
$sawMill = new SawMill();
$stoneQuarry = new StoneQuarry();
$ironMine = new IronMine();
$wareHouse = new WareHouse();
$market = new Market();


// Civic
$townHall = new TownHall();
$academy = new Academy();
$embassy = new Embassy();


// Military
$barrack = new Barrack();
$fortification = new Fortification();
$armory = new Armory();

?>
