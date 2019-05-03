<?php

include("functions/functions.php");

$sql = "INSERT INTO `contacts` (`id`, `strFirstName`, `strLasttName`, `strTel`, `strEmail`, `strMessage`) VALUES (NULL, '$_POST[strFirstName]', '$_POST[strLasttName]', '$_POST[strTel]', '$_POST[strEmail]', '$_POST[strMessage]');";

//$sql =  "INSERT INTO `contacts`(`id`, `strFirstName`, `strLasttName`, `strTel`, `strEmail`, `strMessage`)
//  VALUES ('".$_POST['strFirstName']."',
//  '".$_POST['strFirstName']."',
//  '".$_POST['strTel']."',
//  '".$_POST['strEmail']."',
//  '".$_POST['strMessage']."')";
  saveData($sql);
var_dump($_POST);
header("location: contact.php");

?>
