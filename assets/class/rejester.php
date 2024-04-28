<?php 
include_once('class.link.php');

class device{
	
	
	public function new_number(){
	  $rent_device=$_SESSION["rent_device"];
	  $equpment_name=$_SESSION["equpment_name"];
	  $department_name=$_SESSION["department_name"];
	  $owner_name=$_SESSION["owner_name"];
	  
  $sql = 'SELECT owner_name,
			     control_number,
			     rent_device,
			     equpment_name,
			     department_name from pc_it_deails_tb WHERE 
							owner_name="'.$owner_name.'" AND
							rent_device="'.$rent_device.'" AND
							equpment_name="'.$equpment_name.'" AND 
							department_name="'.$department_name.'"   
							ORDER BY control_number 
							DESC LIMIT 1';
	
   $result = mysql_query($sql);
   if (mysql_num_rows($result) > 0) {
   while($row = mysql_fetch_array($result)) {	
   $pieces = explode(" ",$row['control_number']);		  
		     $pieces2=$pieces[1]+1;
		     echo $pieces[0].' '.$pr_id = sprintf("%04d", $pieces2);
              }
           }
     else {
		    if($equpment_name=='COMPUTER'){
		       $no=1;
			   echo $department_name.' '.sprintf("%04d",$no);
		        }		 
	else{
			if(!empty($rent_device)){
			 $no=1;
			 echo $department_name.'_RENT_'.substr($equpment_name, 0, 3).' '.sprintf("%04d",$no);
			 }
	else{
				$no=1; 
				  echo $department_name.'_'.substr($equpment_name, 0, 3).' '.sprintf("%04d",$no);
				 }
			       }
		             }
	 
                       } 
		

		
	public function new_it_divice( $equpment_name,
								  $control_number,
								  $rent_device,
								  $owner_name,
								  $department_name,
								  $manufacture_name,
								  $model_name,
								  $cpu_speed,
								  $ram_type,
								  $ram_capacity,
								  $hd_capacity,
								  $hd_type,
								  $cpu_gen,
								  $sn_no,
								  $supplier_name,
								  $invoice_no,
								  $invoice_pdf,
								  $monitor_manufacture_name,
								  $model_name_monitor,
								  $monitor_sn,
								  $pc_type,
								  $asset,
								  $currency_type,
								  $price){
		
		
		                 if(!empty($asset)){$asset_pending='1';}else{ $asset_pending='';}
								$register_person=$_SESSION["pc_user"];
								$register_date=date('Y-m-d');;
									
		$sql = "INSERT INTO pc_it_deails_tb(equpment_name,
											control_number,
											rent_device,
											owner_name,
											department_name,
											manufacture_name,
											model_name,
											cpu_gen,
											cpu_speed,
											ram_type,
											ram_capacity,
											hd_capacity,
								            hd_type,
											sn_no,
											supplier_name ,
											invoice_no,
											invoice_pdf,
											monitor_manufacture_name,
											model_name_monitor,
											monitor_sn,
											pc_type,
											asset,
											asset_pending,
											register_person,
											register_date,
											currency_type,
											price
											)VALUES 
															('$equpment_name',
															'$control_number',
															'$rent_device',
															'$owner_name',
															'$department_name',
															'$manufacture_name',
															'$model_name',
															'$cpu_gen',
															'$cpu_speed',
															'$ram_type',
															'$ram_capacity',
															'$hd_capacity',
								                            '$hd_type',
															'$sn_no',
															'$supplier_name',
															'$invoice_no',
															'$invoice_pdf',
															'$monitor_manufacture_name',
											                '$model_name_monitor',
															'$monitor_sn',
															'$pc_type',
															'$asset',
															'$asset_pending',
															'$register_person',
															'$register_date',
															'$currency_type',
											                '$price')";
			                                                 mysql_query($sql);
		                                                   }

public function pc_detils_update($manufacture_name,
									$model_name,
									$os_name,
									$os_type,
									$os_acctivate,
									$office_name,
									$office_active,
									$virus_gurd,
									$cpu_gen,
									$cpu_speed,
									$hd_type,
									$hd_capacity,
									$ram_type,
									$ram_capacity,
									$sn_no,
									$supplier_name,
									$invoice_no,
									$invoice_pdf,
									$ip_addres,
									$network_connct,
									$network_connct_type,
									$asset,
									$asset_pending,
									$asset_no,
									$register_person,
									$register_date,
									$building_name,
									$country_name,
									$section_name,
									$responsible_name,
									$pc_using,
									$status_name,
									$monitor_manufacture_name,
									$model_name_monitor,
									$monitor_sn,
									$pc_type,
									$pc_name,
									$update_by,
									$update_date,
									$control_number,
									$currency_type,
								    $price,
									$email,
									$comments,
									$control_number){
	
	$update_date=date('Y-m-d');
	$update_by=$_SESSION["pc_user"];
	
//if(!empty($asset) AND !empty($asset_no)){ $asset_pending_set='';}
//if(!empty($asset) AND  empty($asset_no)){ $asset_pending_set='1';}
//if(empty($asset)  AND  empty($asset_no)){ $asset_pending_set='';}
//$asset,
//$asset_pending,
//if($asset==1){}

if(!empty($asset_no)){
	$asset_pending_set='';
	$assets='1';
	}
	else{
		if(!empty($asset_pending)){
			$asset_pending_set=$asset_pending;
	        $assets=$asset;
			}
			
			if(!empty($asset) AND !empty($asset_no)){
				 $asset_pending_set='';
	             $assets='';
				 $asset_no='';
				}
		
		}
		
	
	$sql="UPDATE pc_it_deails_tb SET 
				manufacture_name='$manufacture_name',
				model_name='$model_name',
				sn_no='$sn_no',
				cpu_gen='$cpu_gen',
				cpu_speed='$cpu_speed',
				hd_type='$hd_type',
				hd_capacity='$hd_capacity',
				ram_type='$ram_type',
				ram_capacity='$ram_capacity',
				monitor_manufacture_name='$monitor_manufacture_name',
				model_name_monitor='$model_name_monitor',
				monitor_sn='$monitor_sn',
				pc_type='$pc_type',
				pc_name='$pc_name',
				email='$email',
				supplier_name='$supplier_name',
				invoice_no='$invoice_no',
				currency_type='$currency_type',
				price='$price',
				os_name='$os_name',
				os_type='$os_type',
				os_acctivate='$os_acctivate',
				office_name='$office_name',
				office_active='$office_active',
				virus_gurd='$virus_gurd',
				network_connct='$network_connct',
				ip_addres='$ip_addres',
				network_connct_type='$network_connct_type',
				country_name='$country_name',
				building_name='$building_name',
				section_name='$section_name',
				responsible_name='$responsible_name',
				pc_using='$pc_using',
				status_name='$status_name',
				update_by='$update_by',
				update_date='$update_date',
				comments='$comments',
				asset='$assets',
				asset_pending='$asset_pending_set',
				asset_no='$asset_no'
									
				WHERE  	control_number='$control_number'";
								$result=mysql_query($sql);

	
				$sql="UPDATE pc_ip_addres_tb SET 
				 ip_addres_status='1' WHERE  	ip_addres='$ip_addres'";
				$result=mysql_query($sql);	
					
					
	}
		

public function ip_reset_details($ip_addres,$control_number){	
	$sql="UPDATE pc_it_deails_tb SET 				
				ip_addres=''								
				WHERE control_number='$control_number'";
								$result=mysql_query($sql);
				
				$sql="UPDATE pc_ip_addres_tb SET 
				 ip_addres_status='' WHERE  	ip_addres='$ip_addres'";
				$result=mysql_query($sql);	
	
	
	}

public function delet_pc($id){
	$sql = "DELETE FROM pc_it_deails_tb WHERE control_number='$id'";
					if (mysql_query($sql) === TRUE) {
					  
					} 
	
	}
	}

?>