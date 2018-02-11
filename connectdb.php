<?php 
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","nopass");
define("DATABASE","smmydb");

$dbhandle=new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die("Unable to Connect DB");

?>
