<?php


  include_once('settings.php');
  
  include_once('dbLib.php');

  include_once('dbShortcuts.php');



  extract($_REQUEST);

  $tableName = "regUsers";

  $fieldsArr = array(
      "email"=>$email,
      "password"=>$password
      // "ip"=>$ip,
      // "lat"=>$lat,
      // "lon"=>$lon,
      // "fullName"=>$fullName,
      );

  // $fieldsArr = $_REQUEST

  $checkExists = FALSE;

  $print = TRUE;

  $checkAdded = FALSE;

  $updateBool = FALSE;

  $addNewFields = TRUE;

  // $sameEmails= dbMassData(“SELECT * FROM betaUsers WHERE email = ‘$email’”);

	// if($sameEmails !=null){

	// echo “That email address is already signed up. Good lookin’ out!\n”;
	// return;
	// }


  rollAdd($tableName, $fieldsArr, $checkExists, $print ,$checkAdded, $updateBool, $addNewFields);


  echo('thanks for joining');

?>