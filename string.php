<?php
$username="Sithum Gimhana";
$phone="123_123456";
$username=strtolower($username);
$username=strtoupper($username);
$username=trim($username);
$username=str_pad($username,20,"/");
$phone=str_replace("_","",$phone);
$username=strrev($username);
$username=str_shuffle($username);
$username=strcmp($username,"sithumgimhana");
$username=strlen($username);




?>