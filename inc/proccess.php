
<?php
/**
* Copyright (c) 2018 , FreeDDNS
*
* File : index.php
*
*
*
*
*
*/
require("../lib/api.class.php");
$API = new routeros_api();
$API->debug = false;
$username_mikrotik  = "admin";
$password_mikrotik  = "password";
$iphost_mikrotik    = "192.168.0.1";
if($API->connect($iphost_mikrotik, $username_mikrotik, $password_mikrotik)){
  
  
  function generatePORT($digits = 4){
    $i = 0; //counter
    $port = ""; //our default pin is blank.
    while($i < $digits){
        //generate a random number between 0 and 9.
        $port .= mt_rand(0, 9);
        $i++;
    }
    return $port;
}
  $port = generatePORT();
  $randIP = "192.168.45.".mt_rand(0,255);
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $API->comm("/ppp/secret/add", array(
          "name"     		=> $username,
          "password"	 	=> $password,
          "local-address" 	=> "192.168.45.1",
          "remote-address" 	=> "$randIP",
          "service"  		=> "any",
      ));
  
} else {
  echo " Router Not Connected";
  }
?>
