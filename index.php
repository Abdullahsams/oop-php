<?php
  require_once("animal.php");
  require_once("Frog.php");
  require_once("Ape.php");

  // Release 0
  $sheep = new Animal("shaun");
  echo $sheep->name."\n"; // "shaun"
  echo $sheep->legs."\n"; // 2
  echo $sheep->cold_blooded."\n"; // false

  // Release 1
  $sungokong = new Ape("kera sakti");
  $sungokong->yell(); // "Auooo"

  $kodok = new Frog("buduk");
  $kodok->jump(); // "hop hop"
?>
