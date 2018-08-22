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
require("lib/api.class.php");
$API = new routeros_api();
$API->debug = false;

$username_mikrotik  = "admin";
$password_mikrotik  = "password";
$iphost_mikrotik    = "192.168.0.1";

if($API->connect($iphost_mikrotik, $username_mikrotik, $password_mikrotik)){
  
  /** This Action To Creat VPN Account **/
  
  else {
  echo " Router Not Connected";
  }





?>
