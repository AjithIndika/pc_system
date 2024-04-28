<?php 
include_once('class.link.php');
class it_check{
	
	
	var $bilding_name='Building Name';
	var $section='Section Name';
	var $responsible='Responsible';
	var $control_no='Barcord';
	
	
	//// errors  
	
	var $errors='Cannot Be empty ';
	var $not_mach='Not like number in data base ';
	var $update_ok='Barcode update  success full …';
	
	public function update_it_details($building_name,$section_name,$responsible_name,$control_number){
		
		$sql="UPDATE pc_it_deails_tb SET 
				building_name='$building_name', 
				section_name='$section_name', 
				responsible_name='$responsible_name',
				check_date='".date('Y-m-d')."',
				check_by='".$_SESSION["pc_user"]."'
				WHERE control_number='$control_number'";
				$result=mysql_query($sql);
				
				
				$sql="INSERT INTO pc_it_check_tb
											(control_number, 
											 building_name, 
											 section_name,
											 responsible_name,
											 check_date,
											 check_by)
														VALUES('$control_number', 
															   '$building_name', 
															   '$section_name',
															   '$responsible_name',
															   '".date('Y-m-d')."',
															   '".$_SESSION["pc_user"]."')";
															     $result=mysql_query($sql);
		}
		

public function check_barcord($check_bardate,$check_date){
	
	if(!empty($check_date) AND !empty($check_bardate)){
	$db_dat=explode("-",$check_bardate);
	$select_dat=explode("-",$check_date);
	$db_date_ok= $db_dat[0].'-'.$db_dat[1];
	$select_date_ok=$select_dat[0].'-'.$select_dat[1];
	
	if($db_date_ok==$select_date_ok)
	    { 
	         echo '<i class="fa fa-check"></i>';
	            }
	              else {
		               //echo '<i class="material-icons">radio_button_unchecked</i>';
	                      }
                             }
                                 }
	
	
	}
?>