<?php 

include_once('class.link.php');
/*
$servername = "localhost";
$username = "lankahal_pc_system";
$password = "K2=p)1*[Th*2";
$dbname = "lankahal_pc_system";
$db = new mysqli($servername, $username, $password, $dbname);

if ($db->connect_error) {
    die("Connection failed:Not Like DB ".$dbname."");
	
}
*/

$host="localhost"; 
$username="lankahal_pc_system";
$password="K2=p)1*[Th*2";
$db_name="lankahal_pc_system";

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
?>