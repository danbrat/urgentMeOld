<?php


  include_once('settings.php');
  
  include_once('dbLib.php');

  // include_once('dbShortcuts.php');

  extract($_REQUEST);

  dbQuery("INSERT INTO betaUsers (email) VALUES ('$email')");

  echo('thanks for joining');

?>