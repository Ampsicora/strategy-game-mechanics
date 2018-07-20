<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php include 'mechanics/foundations.php' ?>

    <?php
      echo $wood->getName();
      echo $wood->getQuantity();
    ?>

    <hr>

    <?php
      print_r($production->getResourcesPerHour());
      $production->incrementResourcesPerHour("wood", 30);
      echo "<br>";
      print_r($production->getResourcesPerHour());
    ?>

    <hr>

    <?php

      print_r($village->getProduction());
      echo "Produzione oraria del villaggio: " . $village->getName();

    ?>

    <hr>


    <?php

      print_r($stockRoom->getResources());
      echo "<br>" . $stockRoom->getStockLimit();
      $stockRoom->incrementStockLimit(70);
      echo "<br>" . $stockRoom->getStockLimit();

    ?>

  </body>
</html>
