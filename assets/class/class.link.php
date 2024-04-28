<?php 
error_reporting(E_PARSE|E_WARNING|E_ERROR);
session_start();
date_default_timezone_set("Asia/Colombo");


include_once('titel.class.php');
include_once('validation.php');
include_once('setting.class.php');
include_once('conf.php');
include_once('error.class.php');
include_once('delet.class.php');
include_once('select_from_db.php');
include_once('rejester.php');
include_once('user.class.php');
include_once('summary.class.php');
include_once('from_details.php');
include_once('it_details.class.php');
include_once('it_equ_check.php');
include_once('asset.class.php');


$all_name=new titels();
$seting=new setting();
$error=new errors();
$from_db=new  select_from_db();
$from_details=new  select_from_details();
$device=new device();
$users_seting=new users();
$summary=new summary();
$it_details=new it_details();
$it_check=new it_check();
$asset= new asset_list();
//$validation=new validation();
?>