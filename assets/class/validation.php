


<?php 
include_once('class.link.php');

$building_nameError ="";
$pc_usingError ="";
$department_nameError ="";
$equpment_nameError ="";
$os_nameError ="";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {	
	
	if (!empty($_POST["building_name"])) {	
                   $building_name = test_input(strtoupper($_POST["building_name"]));			
	                                         }
												 else{
													  $building_name='';
													    }
		

   
   if (!empty($_POST["pc_using"])) {	
                   $pc_using = test_input(strtoupper($_POST["pc_using"]));			
	                                         }
												 else{
													  $pc_using='';
													    }	
	
	
   if (!empty($_POST["department_name"])) {	
                   $department_name = test_input(strtoupper($_POST["department_name"]));			
	                                         }
												 else{
													  $department_name='';
													    }		

   if (!empty($_POST["section_name"])) {	
                   $section_name = test_input(strtoupper($_POST["section_name"]));			
	                                         }
												 else{
													  $section_name='';
													    }

if (!empty($_POST["equpment_name"])) {	
                   $equpment_name = test_input(strtoupper($_POST["equpment_name"]));			
	                                         }
												 else{
													  $equpment_name='';
													    }


if (!empty($_POST["manufacture_name"])) {	
                   $manufacture_name = test_input(strtoupper($_POST["manufacture_name"]));			
	                                         }
												 else{
													  $manufacture_name='';
													    }

if (!empty($_POST["model_name"])) {	
                   $model_name = test_input(strtoupper($_POST["model_name"]));			
	                                         }
												 else{
													  $model_name='';
													    }



if (!empty($_POST["os_name"])) {	
                   $os_name = test_input(strtoupper($_POST["os_name"]));			
	                                         }
												 else{
													  $os_name='';
													    }

if (!empty($_POST["office_name"])) {	
                   $office_name = test_input(strtoupper($_POST["office_name"]));			
	                                         }
												 else{
													  $office_name='';
													    }														

if (!empty($_POST["country_name"])) {	
                   $country_name = test_input(strtoupper($_POST["country_name"]));			
	                                         }
												 else{
													  $country_name='';
													    }	


if (!empty($_POST["responsible_name"])) {	
                   $responsible_name = test_input(strtoupper($_POST["responsible_name"]));			
	                                         }
												 else{
													  $responsible_name='';
													    }																	

if (!empty($_POST["status_name"])) {	
                   $status_name = test_input(strtoupper($_POST["status_name"]));			
	                                         }
												 else{
													  $status_name='';
													    }


if (!empty($_POST["hd_capacity"])) {	
                   $hd_capacity = test_input(strtoupper($_POST["hd_capacity"]));			
	                                         }
												 else{
													  $hd_capacity='';
													    }

if (!empty($_POST["ram_capacity"])) {	
                   $ram_capacity = test_input(strtoupper($_POST["ram_capacity"]));			
	                                         }
												 else{
													  $ram_capacity='';
													    }

if (!empty($_POST["owner_name"])) {	
                   $owner_name= test_input(strtoupper($_POST["owner_name"]));			
	                                         }
												 else{
													  $owner_name='';
													    }

if (!empty($_POST["supplier_name"])) {	
                   $supplier_name= test_input(strtoupper($_POST["supplier_name"]));			
	                                         }
												 else{
													  $supplier_name='';
													    }

if (!empty($_POST["currency_type"])) {	
                   $currency_type= test_input(ucfirst($_POST["currency_type"]));			
	                                         }
												 else{
													  $currency_type='';
													    }


if (!empty($_POST["equpment_type"])) {	
                   $equpment_type= test_input(ucfirst($_POST["equpment_type"]));			
	                                         }
												 else{
													  $equpment_type='';
													    }

if (!empty($_POST["rent_device"])) {	
                   $rent_device= test_input(ucfirst($_POST["rent_device"]));			
	                                         }
												 else{
													  $rent_device='';
													    }


if (!empty($_POST["control_number"])) {	
                   $control_number= test_input($_POST["control_number"]);			
	                                         }
												 else{
													  $control_number='';
													    }
														
if (!empty($_POST["sn_no"])) {	
                   $sn_no= test_input(strtoupper($_POST["sn_no"]));			
	                                         }
												 else{
													  $sn_no='';
													    }														


if (!empty($_POST["invoice_no"])) {	
                   $invoice_no= test_input(strtoupper($_POST["invoice_no"]));			
	                                         }
												 else{
													  $invoice_no='';
													    }


if (!empty($_POST["invoice_pdf"])) {	
                   $invoice_no= test_input($_POST["invoice_pdf"]);			
	                                         }
												 else{
													  $invoice_pdf='';
													    }

if (!empty($_POST["userfile"])) {	
                   $userfile= test_input($_POST["userfile"]);			
	                                         }
												 else{
													  $userfile='';
													    }

if (!empty($_POST["cpu_speed"])) {	
                   $cpu_speed= test_input($_POST["cpu_speed"]);			
	                                         }
												 else{
													  $cpu_speed='';
													    }


if (!empty($_POST["cpu_gen"])) {	
                   $cpu_gen= test_input($_POST["cpu_gen"]);			
	                                         }
												 else{
													  $cpu_gen='';
													    }


if (!empty($_POST["ip_addres"])) {	
   $ip_addres= test_input($_POST["ip_addres"]);
	                                         }
												 else{
													  $ip_addres='';
													    }
if (!empty($_POST["ip_addres_internet"])) {	
   $ip_addres_internet= test_input($_POST["ip_addres_internet"]);
	                                         }
												 else{
													  $ip_addres_internet='';
													    }
if (!empty($_POST["ip_addres_status"])) {	
   $ip_addres_status= test_input($_POST["ip_addres_status"]);
	                                         }
												 else{
													  $ip_addres_status='';
													    }

if (!empty($_POST["ip_addres_note"])) {	
   $ip_addres_note= test_input($_POST["ip_addres_note"]);
	                                         }
												 else{
													  $ip_addres_note='';
													    }
if (!empty($_POST["asset"])) {	
   $asset= test_input($_POST["asset"]);
	                                         }
												 else{
													  $asset='';
													    }



if (!empty($_POST["username_name"])) {	
   $username_name= test_input(ucfirst($_POST["username_name"]));
	                                         }
												 else{
													  $username_name='';
													    }



if (!empty($_POST["user_password"])) {	
   $user_password= test_input($_POST["user_password"]);
	                                         }
												 else{
													  $user_password='';
													    }
														


if (!empty($_POST["admin"])) {	
   $admin= test_input($_POST["admin"]);
	                                         }
												 else{
													  $admin='';
													    }
														

if (!empty($_POST["delet"])) {	
   $delet= test_input($_POST["delet"]);
	                                         }
												 else{
													  $delet='';
													    }
														
if (!empty($_POST["edit"])) {	
   $edit= test_input($_POST["edit"]);
	                                         }
												 else{
													  $edit='';
													    }

if (!empty($_POST["ram_type"])) {	
   $ram_type= test_input($_POST["ram_type"]);
	                                         }
												 else{
													  $ram_type='';
													    }														
/*
if (!empty($_POST["ram_capacity"])) {	
   $ram_capacity= test_input($_POST["ram_capacity"]);
	                                         }
												 else{
													  $ram_capacity='';
												    }
*/	

if (!empty($_POST["hd_type"])) {	
   $hd_type= test_input($_POST["hd_type"]);
	                                         }
												 else{
													  $hd_type='';
													    }


if (!empty($_POST["monitor_manufacture_name"])) {	
   $monitor_manufacture_name= test_input($_POST["monitor_manufacture_name"]);
	                                         }
												 else{
													  $monitor_manufacture_name='';
													    }
														

if (!empty($_POST["model_name_monitor"])) {	
   $model_name_monitor= test_input($_POST["model_name_monitor"]);
	                                         }
												 else{
													  $model_name_monitor='';
													    }
														
														
														
if (!empty($_POST["pc_type"])) {	
   $pc_type= test_input($_POST["pc_type"]);
	                                         }
												 else{
													  $pc_type='';
													    }	
if (!empty($_POST["monitor_sn"])) {	
   $monitor_sn= test_input($_POST["monitor_sn"]);
	                                         }
												 else{
													  $monitor_sn='';
													    }	
														
if (!empty($_POST["pc_name"])) {	
   $pc_name= test_input($_POST["pc_name"]);
	                                         }
												 else{
													  $pc_name='';
													    }			
														
														
										
if (!empty($_POST["network_connct_type"])) {	
   $network_connct_type= test_input($_POST["network_connct_type"]);
	                                         }
												 else{
													  $network_connct_type='';
													    }
														
														
if (!empty($_POST["price"])) {	
   $price= test_input($_POST["price"]);
	                                         }
												 else{
													  $price='';
													    }

if (!empty($_POST["os_type"])) {	
   $os_type= test_input($_POST["os_type"]);
	                                         }
												 else{
													  $os_type='';
													    }

if (!empty($_POST["os_acctivate"])) {	
   $os_acctivate= test_input($_POST["os_acctivate"]);
	                                         }
												 else{
													  $os_acctivate='';
													    }

if (!empty($_POST["office_active"])) {	
   $office_active= test_input($_POST["office_active"]);
	                                         }
												 else{
													  $office_active='';
													    }
														

if (!empty($_POST["virus_gurd"])) {	
   $virus_gurd= test_input($_POST["virus_gurd"]);
	                                         }
												 else{
													  $virus_gurd='';
													    }
														
if (!empty($_POST["network_connct"])) {	
   $network_connct= test_input($_POST["network_connct"]);
	                                         }
												 else{
													  $network_connct='';
													    }														



if (!empty($_POST["network_connct_type"])) {	
   $network_connct_type= test_input($_POST["network_connct_type"]);
	                                         }
												 else{
													  $network_connct_type='';
													    }

if (!empty($_POST["asset_no"])) {	
   $asset_no= test_input($_POST["asset_no"]);
	                                         }
												 else{
													  $asset_no='';
													    }


if (!empty($_POST["email"])) {	
   $email= test_input($_POST["email"]);
	                                         }
												 else{
													  $email='';
													    }


////////// view //////////////////

if (!empty($_POST["view_equname"])) {	
   $view_equname= test_input($_POST["view_equname"]);
	                                         }
												 else{
													  $view_equname='';
													    }

if (!empty($_POST["view_depart"])) {	
   $view_depart= test_input($_POST["view_depart"]);
	                                         }
												 else{
													  $view_depart='';
													    }


if (!empty($_POST["view_owner"])) {	
   $view_owner= test_input($_POST["view_owner"]);
	                                         }
												 else{
													  $view_owner='';
													    }


if (!empty($_POST["view_manufacture"])) {	
   $view_manufacture= test_input($_POST["view_manufacture"]);
	                                         }
												 else{
													  $view_manufacture='';
													    }


if (!empty($_POST["view_model"])) {	
   $view_model= test_input($_POST["view_model"]);
	                                         }
												 else{
													  $view_model='';
													    }



if (!empty($_POST["view_cpu_gen"])) {	
   $view_cpu_gen= test_input($_POST["view_cpu_gen"]);
	                                         }
												 else{
													  $view_cpu_gen='';
													    }

if (!empty($_POST["view_ram_capacity"])) {	
   $view_ram_capacity= test_input($_POST["view_ram_capacity"]);
	                                         }
												 else{
													  $view_ram_capacity='';
													    }



if (!empty($_POST["view_os_type"])) {	
   $view_os_type= test_input($_POST["view_os_type"]);
	                                         }
												 else{
													  $view_os_type='';
													    }

if (!empty($_POST["view_os_name"])) {	
   $view_os_name= test_input($_POST["view_os_name"]);
	                                         }
												 else{
													  $view_os_name='';
													    }

if (!empty($_POST["view_office_name"])) {	
   $view_office_name= test_input($_POST["view_office_name"]);
	                                         }
												 else{
													  $view_office_name='';
													    }

if (!empty($_POST["ip_internet"])) {	
   $ip_internet= test_input($_POST["ip_internet"]);
	                                         }
												 else{
													  $ip_internet='';
													    }
														

if (!empty($_POST["view_country_name"])) {	
   $view_country_name= test_input($_POST["view_country_name"]);
	                                         }
												 else{
													  $view_country_name='';
													    }




if (!empty($_POST["view_section_name"])) {	
   $view_section_name= test_input($_POST["view_section_name"]);
	                                         }
												 else{
													  $view_section_name='';
													    }
														
if (!empty($_POST["view_building_name"])) {	
   $view_building_name= test_input($_POST["view_building_name"]);
	                                         }
												 else{
													  $view_building_name='';
													    }
												
if (!empty($_POST["view_responsible_name"])) {	
   $view_responsible_name= test_input($_POST["view_responsible_name"]);
	                                         }
												 else{
													  $view_responsible_name='';
													    }


												
if (!empty($_POST["comments"])) {	
   $comments= test_input($_POST["comments"]);
	                                         }
												 else{
													  $comments='';
													    }



if (!empty($_POST["check_date"])) {	
                   $check_date = test_input(strtoupper($_POST["check_date"]));			
	                                         }
												 else{
													  $check_date='';
													    }
														
if (!empty($_POST["save"])) {	
                   $save = test_input(strtoupper($_POST["save"]));			
	                                         }
												 else{
													  $save='';
													    }
}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
//php code ends here

?>

