<?php

include_once('class.link.php');
class titels{
	
	
	var $site_name='PC Controll';
	var $now_stay;
	var $titel_icon='';
	public function titel_icons(){		
		echo '<title>'.$this->site_name.'-'.$this->now_stay.'</title>';
		echo '<link rel="shortcut icon" type="image/x-icon" href="'.$this->titel_icon.'" />';
		}
		
	var $home='DashBord';	
	var $nepc_add='IT Equpment add';
	var $main_parameters='Main Parameters';
	var $main_parameters_sub_01='Building';
	var $main_parameters_sub_02='Using';
	var $main_parameters_sub_03='Department';
	var $main_parameters_sub_04='Section';
	var $main_parameters_sub_05='Equipment';
	var $main_parameters_sub_06='Manufacturer';
	var $main_parameters_sub_07='Model';
	var $main_parameters_sub_08='OS';
	var $main_parameters_sub_09='Office';
	var $main_parameters_sub_10='Country';
	var $main_parameters_sub_11='Responsible';	
	var $main_parameters_sub_12='Status';
	var $main_parameters_sub_13='HD-Capacity';
	var $main_parameters_sub_14='Ram-Capacity';
	var $main_parameters_sub_15='Owner';
	var $main_parameters_sub_16='Supplier';
	var $main_parameters_sub_17='Currency_Type';
	var $main_parameters_sub_18='CPU_Speed';
	var $main_parameters_sub_19='Genaration';
	var $main_menu_1='New_Computer';
	var $main_menu_2='IPs';
	var $main_menu_2_sub='New_IP';
	var $user_menu='User_Manage';
	var $filter='Data_Filter';
	var $barcord_check='Pc Check';
	
	
	var $no_results='No Results';
	var $plz_select_one='Plese select one';
	var $number='No';
	var $delet='Delet';
	var $edit='Edit';
	var $bildingname='Building Name';
	var $usingname='Using Name';
	var $departmentname='Department Name';
	var $sectionname='Section Name';
	var $equipmentname='Equpment Name';
	var $manufacturename='Manufacture Name';
	var $modelname='Model Name';
	var $os_name='OS Name';
	var $office_name='Office Name';	
	var $cuntry_name='Country Name';
	var $responsible_name='Responsible Name';
	var $status_name='Status Name';
	var $hd_capacity='HD-Capacity';
	var $ram_capacity='Ram-Capacity ';
	var $owner_name='Owner Name';
	var $supplier_name='Supplier Name';
	var $currency_type='Currency Type';
	var $equpment_type='Device';
	var $go_to_next='Plese Go ';
	var $control_no='Control Number';
	var $rent_device='This One Rent';
	var $equpment_name='Equpment name';
	var $sn_no='Serial no';
	var $invoice_no='Invoice';
	var $cpu_speed='CPU Speed';
	var $cpu_gen='Genaration';
	var $ip='IP Addres';
	var $ip_internet='Internet';
	var $ip_status='Use';
	var $not='Note';
	var $resets='Reset';
	var $asset='Asset';
	var $asset_pending='Asset Pending....';
	var $username_name='User Name';
	var $user_password='Password';
	var $plese_enter='Enter Your ';
	var $admin='Admin';
	var $inequp='Assing Control Number';
	var $ip_not_issu='';//This IP no in use DB
	var $cant_find='Cant fine like you search ';
	var $os_type='OS Type';
	var $virus_gurd='Virus Gurde';
	var $network_connct='Network Connct';
	var $ram_type='Ram Type';
	var $network_connct_type='Network Connect By';
	var $momanufacturename='Monitor Manuf';
	var $pc_type='Pc Type';
	var $monitor_sn='Monitor Sn';
	var $activate='Activate';
	var $not_activate='Not Activate';
	var $pc_name='PC Name';
	var $price='Price';
	var $email='Email';
	var $controll_no='Control Nu';
	var $os_acctivate='OS Active';
	
	
	
	///////////  summary heding 
	
	var $ip_tabal='IP Details';
	var $devices_tabal='Devices Table';
	var $licen_count='LIcen Count';
	var $active_licen_count='Active Licen Count';
	var $office_licen_count='office licen count';
	var $licen_type='Licen Type';
	var $building_wise='Building Wise';
	var $network='Network';
	var $department_wice='Department';
	var $department_network='Department Network Connect and Virus Gurd';
	
	
	var $check_icon='<i class="fa fa-check" style="font-size:20px"></i>';
	var $not_check_icon='<i class="fa fa-times" style="font-size:20px"></i>';
	var $pdf_file='<i class="material-icons">attachment</i>';
	var $no_pdf_file='<i class="fa fa-file-o"></i>';
	
	
	//// data short list 
	
	var $equpment_shot_name='Devise  Details';
	var $responsible_name_short='Responsible Details ';
	var $manufacture_name_short='Manufacture Details ';
	var $os_type_short='OS Details ';
	var $network_and_els_short='Network and Els';
	
	
	}


 ?>