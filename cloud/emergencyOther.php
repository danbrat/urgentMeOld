<?php

  //runs script helping user assist someone in an emergency

  include_once('settings.php');
  
  include_once('dbLib.php');

  include_once('dbShortcuts.php');



  extract($_REQUEST);

  $tableName = 'regUsers';

  $fieldsArr = array(
          //runs emergency situation script, questions
          "script"=>"FUCNTION",
          //contacts EMT
          "contactEMT"=>"FUNCTION",


  // $fieldsArr = $_REQUEST

  $checkExists = FALSE;

  $print = TRUE;

  $checkAdded = FALSE;

  $updateBool = FALSE;

  $addNewFields = TRUE;

 //  $sameEmails= dbMassData(“SELECT * FROM betaUsers WHERE email = ‘$email’”);

	// if($sameEmails !=null){

	// echo “That email address is already signed up. Good lookin’ out!\n”;
	// return;
	// }


  function rollAdd($tableName, $fieldsArr, $checkExists, $print ,$checkAdded, $updateBool, $addNewFields, $sameEmails);


  echo('thanks for joining');

?>