<?php

include_once('class.link.php');

	 
	 
/// delet bilding
 if(isset($_GET['delet1'])){
	 $id=base64_decode($_GET['delet1']);	
	$seting->delet_bilding($id);	
	header("location:../../?".$all_name->main_parameters_sub_01);
	 
	 }
	 
//// delet using	 
if(isset($_GET['delet2'])){
	 $id=base64_decode($_GET['delet2']);	 
	 $seting->delet_using($id);	
	 header("location:../../?".$all_name->main_parameters_sub_02);
	 
	 }
	 
//// delet department	 
if(isset($_GET['delet3'])){
	 $id=base64_decode($_GET['delet3']);	 
	 $seting->delet_department($id);	
	 header("location:../../?".$all_name->main_parameters_sub_03);
	 
	 }
	 

//// delet section 
if(isset($_GET['delet4'])){
	 $id=base64_decode($_GET['delet4']);	 
	 $seting->delet_section($id);	
	 header("location:../../?".$all_name->main_parameters_sub_04);
	 
	 }
	 

//// delet equpment name
if(isset($_GET['delet5'])){
	 $id=base64_decode($_GET['delet5']);	 
	 $seting->delet_equpment($id);	
	 header("location:../../?".$all_name->main_parameters_sub_05);
	 
	 }
	 
/// delet equpment name
if(isset($_GET['delet6'])){
	 $id=base64_decode($_GET['delet6']);	 
	$seting->delet_manufacturename($id);	
	 header("location:../../?".$all_name->main_parameters_sub_06);
	 }
	 
/// delet models
if(isset($_GET['delet7'])){
	 $id=base64_decode($_GET['delet7']);	 
	$seting-> delet_model_name($id);	
	 header("location:../../?".$all_name->main_parameters_sub_07);
	 }
	 
/// delet os
if(isset($_GET['delet8'])){
	 $id=base64_decode($_GET['delet8']);	 
	$seting-> delet_os($id);	
	 header("location:../../?".$all_name->main_parameters_sub_08);
	 }
	 
/// delet os
if(isset($_GET['delet9'])){
	 $id=base64_decode($_GET['delet9']);	 
	$seting->delet_office($id);	
	 header("location:../../?".$all_name->main_parameters_sub_09);
	 }
	
/// delet country 
if(isset($_GET['delet10'])){
	 $id=base64_decode($_GET['delet10']);	 
	$seting->delet_country($id);	
	 header("location:../../?".$all_name->main_parameters_sub_10);
	 }	


/// delet respons
if(isset($_GET['delet11'])){
	 $id=base64_decode($_GET['delet11']);	 
	$seting->delet_responsible($id);	
	 header("location:../../?".$all_name->main_parameters_sub_11);
	 }	
	 
/// delet respons
if(isset($_GET['delet12'])){
	 $id=base64_decode($_GET['delet12']);	 
	$seting->delet_status($id);	
	 header("location:../../?".$all_name->main_parameters_sub_12);
	 }	


/// hd_capacity
if(isset($_GET['delet13'])){
	 $id=base64_decode($_GET['delet13']);	 
	$seting->delet_hd_capacity($id);	
	 header("location:../../?".$all_name->main_parameters_sub_13);
	 }	
	 

// Ram Capacity
if(isset($_GET['delet14'])){
	 $id=base64_decode($_GET['delet14']);	 
	$seting->delet_ram_capacity($id);	
	 header("location:../../?".$all_name->main_parameters_sub_14);
	 }
	 
// owner_name
if(isset($_GET['delet15'])){
	 $id=base64_decode($_GET['delet15']);	 
	$seting->delet_owner_name($id);	
	 header("location:../../?".$all_name->main_parameters_sub_15);
	 }		
	 
// supplier_name
if(isset($_GET['delet16'])){
	 $id=base64_decode($_GET['delet16']);	 
	$seting->delet_supplier_name($id);	
	 header("location:../../?".$all_name->main_parameters_sub_16);
	 }	

// supplier_name
if(isset($_GET['delet17'])){
	 $id=base64_decode($_GET['delet17']);	 
	$seting->delet_currency_type($id);	
	 header("location:../../?".$all_name->main_parameters_sub_17);
	 }


// supplier_name
if(isset($_GET['delet18'])){
	 $id=base64_decode($_GET['delet18']);	 
	$seting->delet_cpu_speed($id);	
	 header("location:../../?".$all_name->main_parameters_sub_18);
	 }	
	 
// cpu gen
if(isset($_GET['delet19'])){
	 $id=base64_decode($_GET['delet19']);	 
	$seting->delet_cpu_gen($id);	
	 header("location:../../?".$all_name->main_parameters_sub_19);
	 }	


// p add
if(isset($_GET[$all_name->main_menu_2_sub])){
	 $id=base64_decode($_GET[$all_name->main_menu_2_sub]);	 
	$seting->delet_ip_addres($id);	
	 header("location:../../?".$all_name->main_menu_2_sub);
	 }	
	 

///// ip reset 
if(isset($_GET['ipreset'])){
	 $id=base64_decode($_GET['ipreset']);
	 $seting->ip_reset($id);	
	 header("location:../../?".$all_name->main_menu_2_sub);
	 }


///// logout
if(isset($_GET['logout'])){
	
	 $users_seting->log_out();
	 header("location:../../index.php");
	 }
	 
// admin reset /////
if(isset($_GET['adminreset_up'])){
	$id=base64_decode($_GET['adminreset_up']);
	$users_seting->adminreset_up($id);	
	 header("location:../../?".$all_name->user_menu);
	 }

// admin add /////
if(isset($_GET['admin_add'])){
	$id=base64_decode($_GET['admin_add']);
	$users_seting->adminadd_up($id);	
	 header("location:../../?".$all_name->user_menu);
	 }



// user delet  /////
if(isset($_GET['user_delet_re'])){
	$id=base64_decode($_GET['user_delet_re']);
	$users_seting->delet_re($id);	
	 header("location:../../?".$all_name->user_menu);
	 }


if(isset($_GET['user_delet_add'])){
	$id=base64_decode($_GET['user_delet_add']);
	$users_seting->delet_add($id);	
	 header("location:../../?".$all_name->user_menu);
	 }
	 
// user edit_reset /////
if(isset($_GET['user_edit_re'])){
	$id=base64_decode($_GET['user_edit_re']);
	$users_seting->edit_re($id);	
	 header("location:../../?".$all_name->user_menu);
	 }
	
if(isset($_GET['user_edit_ad'])){
	$id=base64_decode($_GET['user_edit_ad']);
	$users_seting->edit_add($id);	
	 header("location:../../?".$all_name->user_menu);
	 }
	 


//delet user //


if(isset($_GET[$all_name->user_menu])){
	$id=base64_decode($_GET[$all_name->user_menu]);
	$users_seting->delet_user($id);	
	 header("location:../../?".$all_name->user_menu);
	 }
	 


if(isset($_GET['ip_reset_details'])){	
		$reset=explode("_",$_GET['ip_reset_details']);	
		$ip_addres =$reset[0];
		$control_number =$reset[1];
		$device->ip_reset_details($ip_addres,$control_number);	
	    header("location:../../?update=".base64_encode($control_number)."");
	   }
	   

if(isset($_GET['delet_pc'])){
	$id=base64_decode($_GET['delet_pc']);
	echo  $id;
	$device->delet_pc($id);	
	header("location:../../index.php");
	 }	   
	   

 ?>