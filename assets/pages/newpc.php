<?php 
include_once('assets/class/class.link.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function manufac(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","assets/pages/getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

<script>
function manufac_monitor(str) {
    if (str == "") {
        document.getElementById("monitorview").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("monitorview").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","assets/pages/getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>
</head>

<body>
<center>
  <?php 
 if (isset($_GET[$all_name->main_menu_1])) { 
 
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {	 
	 $from_db->department_name=$department_name;
	 $from_db->owner_name=$owner_name;
	 $from_db->equpment_type=$equpment_type;
	 $from_db->equpment_name=$equpment_name;
	 $from_db->supplier_name=$supplier_name;
	 
	 
	 
	 	
	if(empty($department_name)){$departmentnameerror=$all_name->departmentname.' '.$error->cant_empty.'<br/>';}
	if(empty($owner_name)){$owner_nameerror=$all_name->owner_name.' '.$error->cant_empty.'<br/>';}
	if(empty($equpment_name)){$equpment_nameerror=$all_name->equpment_name.' '.$error->cant_empty.'<br/>';} 
	
	else{
	
	 $_SESSION["department_name"] = $department_name;
	 $_SESSION["owner_name"]      = $owner_name;
	// $_SESSION["equpment_type"]   = $equpment_type;
	 $_SESSION["rent_device"]     = $rent_device;
	 $_SESSION["equpment_name"]     = $equpment_name;
	 
	 
	 
	 if(!empty($department_name) AND !empty($owner_name) AND  !empty($equpment_name)){
		 
		   
	 
	$sucess= '<a href="?new" id="sys_links" title="'.$all_name->go_to_next.' For Regester New '.$equpment_name.'"><img src="assets/img/new_register.png" width="200px"></a>';
			
	 }
		}
	 

 }
        
          
?>
  <table width="30%"  align="left" >
    <form action=""   method="post">
      <tr>
        <td><?php echo $all_name->equipmentname?></td>
        <td><?php echo $from_db->equpment_name()?></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td><?php echo $all_name->departmentname?></td>
        <td><?php echo $from_db->department_name()?></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td><?php echo $all_name->owner_name?></td>
        <td><?php echo $from_db->owner_name()?></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td><?php echo $all_name->rent_device?></td>
        <td><input type="checkbox" name="rent_device" value="1" <?php if(!empty($rent_device)){echo 'checked="checked"';}?>/></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="Go Next" name="" /></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td colspan="4"><div id="error" >
            <?php 
	  if(!empty($departmentnameerror)){echo $departmentnameerror;} 
	  if(!empty($owner_nameerror)){echo $owner_nameerror;}
	  if(!empty($equpment_nameerror)){echo $equpment_nameerror;}
	  if(!empty($sucess)){ echo $sucess;}
	  
	  ?>
          </div></td>
      </tr>
    </form>
  </table>
  <?php } ?>
  <?php   if (isset($_GET['new'])) {  
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	  
	  $rent_device=$_SESSION["rent_device"];
	  $equpment_name=$_SESSION["equpment_name"];
	  $department_name=$_SESSION["department_name"];
	  $owner_name=$_SESSION["owner_name"];
	  $from_db->manufacture_name=$manufacture_name;
	  $from_db->cpu_speed=$cpu_speed;
	  $from_db->cpu_gen=$cpu_gen;
	  $from_db->supplier_name=$supplier_name;
	  $from_db->ram_capacity=$ram_capacity;
      $from_db->ram_type=$ram_type;
	  $from_db->hd_capacity=$hd_capacity;
	  $from_db->hd_type=$hd_type;
	  $from_db->monitor_manufacture_name=$monitor_manufacture_name;
	  $from_db->model_name_monitor=$model_name_monitor;
	  $from_db->pc_type=$pc_type;
	  $from_db->currency_type=$currency_type;
	  
	  
	  
	  
	 
	   
	   if($_SESSION["equpment_name"]=='COMPUTER'){	  
	  		  
	$sql="SELECT owner_name,control_number,rent_device,equpment_name,department_name from  pc_it_deails_tb WHERE 
    owner_name='".$owner_name."' AND
    rent_device='".$rent_device."' AND
    equpment_name='".$equpment_name."' AND 
	department_name='".$department_name."' AND
	control_number='".$control_number."'";
			if ($result=mysql_query($sql))
			  {
			  $rowcount=mysql_num_rows($result);
			if($rowcount==1)
			{
				$error =$error->dupplicate;
			}
			else{
				
			if(!empty($equpment_name) AND 
			!empty($control_number) AND 
			//!empty($rent_device) AND 
			!empty($owner_name) AND 
			!empty($department_name) AND 
			!empty($manufacture_name) AND 
			!empty($model_name)  AND 
			!empty($sn_no)  AND 
			!empty($invoice_no) AND
			!empty($supplier_name) AND 
			!empty($cpu_gen) AND 
			!empty($ram_type) AND 
			!empty($ram_capacity)AND 
			!empty($hd_capacity)AND 
			!empty($hd_type) AND 
			!empty($pc_type)  
			
			
			
			
			){
		
		     if(!empty($_FILES['userfile']['tmp_name'])){		
					$uploaddir = 'assets/invoice_pdf/';			
					$old_name=$_FILES['userfile']['name'];					
					$tempnames= substr(strrchr($old_name,'.'),1);			
					$new_name=date('Y-m-d-h-m-s').'.'.substr(strrchr($old_name,'.'),1);
                    $uplode = $uploaddir.$control_number.'-'.$new_name;
						if (move_uploaded_file($_FILES['userfile']['tmp_name'],$uplode)) {
							$invoice_pdf=$control_number.'-'.$new_name;
						} else {
							}					
						
			 }
		  $device->new_it_divice( $equpment_name,
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
								  $price);
		 $error=$error->sucess;
			}
			else{
				 $error='Reuid'.$error->cant_empty;
				}
					
						}
							}
							   }
					 else{
					  
					  
					  ///// else 
					  
			$sql="SELECT owner_name,control_number,rent_device,equpment_name,department_name from  pc_it_deails_tb WHERE 
			owner_name='".$owner_name."' AND
			rent_device='".$rent_device."' AND
			equpment_name='".$equpment_name."' AND 
			department_name='".$department_name."' AND
			control_number='".$control_number."'";
			if ($result=mysql_query($sql))
			  {
			  $rowcount=mysql_num_rows($result);
			if($rowcount==1)
			{
				$error =$error->dupplicate;
			}
			else{
				
			if(!empty($equpment_name) AND 
			!empty($control_number) AND 
			//!empty($rent_device) AND 
			!empty($owner_name) AND 
			!empty($department_name) AND 
			!empty($manufacture_name) AND 
			!empty($model_name)  AND 
			!empty($sn_no)  AND 
			!empty($invoice_no) AND
			!empty($supplier_name) 
			
			
			){
		
		     if(!empty($_FILES['userfile']['tmp_name'])){		
					$uploaddir = 'assets/invoice_pdf/';			
					$old_name=$_FILES['userfile']['name'];					
					$tempnames= substr(strrchr($old_name,'.'),1);			
					$new_name=date('Y-m-d-h-m-s').'.'.substr(strrchr($old_name,'.'),1);
                    $uplode = $uploaddir.$control_number.'-'.$new_name;
						if (move_uploaded_file($_FILES['userfile']['tmp_name'],$uplode)) {
							$invoice_pdf=$control_number.'-'.$new_name;
						} else {
							}					
						
			 }
		  $device->new_it_divice( $equpment_name,
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
								  $price);
		 $error=$error->sucess;
			}
			else{
				 $error='Reuid'.$error->cant_empty;
				}
					
						}
							}
							  
							   //
						 }
					  }

  ?>
  <table align="left" width="60%" >
    <form action="" method="post" enctype="multipart/form-data">
      <tr>
        <td><?php echo $all_name->rent_device ?></td>
        <td><?php if(!empty($_SESSION["rent_device"])){echo '<img src="assets/img/Yes_check.svg" width="15px">'; }else{
		  echo '<img src="assets/img/no.png" width="15px">';}?></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td><?php echo $all_name->control_no?></td>
        <td><input type="text" value="<?php $device->new_number($db)?>" name="control_number"  /></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td><?php echo $all_name->equpment_name?></td>
        <td><input type="text" value="<?php echo $_SESSION["equpment_name"] ?>" name="equpment_name" readonly="readonly" /></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td><?php echo $all_name->departmentname?></td>
        <td><input type="text" value="<?php echo $_SESSION["department_name"] ?>" name="department_name" readonly="readonly" /></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td><?php echo $all_name->owner_name?></td>
        <td><input type="text" value="<?php echo $_SESSION["owner_name"] ?>" name="owner_name" readonly="readonly"  /></td>
        <td></td>
        <td></td>
      </tr>
      
      <tr>
        <td><?php echo $all_name->manufacturename?></td>
        <td colspan="3"><?php $from_db->manufacture_name()?>
          <select name="model_name" id="txtHint">
            <?php if(!empty($model_name)){echo '<option selected="selected">'.$model_name.'</option>';}else{ echo '<option selected="selected">'.$all_name->plz_select_one.'</option>';}?>
          </select></td>
        <td  ></td>
      </tr>
      
      
      <?php if($_SESSION["equpment_name"]=='COMPUTER'){?>
      
      <tr>
        <td><?php echo $all_name->pc_type?></td>
        <td><?php $from_db->pc_type()?></td>
        <td colspan="2"></td>
      </tr>
      
      
      <tr>
        <td><?php echo $all_name->momanufacturename?></td>
        <td colspan="3"><?php $from_db->manufacture_monitor_name()?>
          <select name="model_name_monitor" id="monitorview">
            <?php if(!empty($model_name_monitor)){echo '<option selected="selected">'.$model_name_monitor.'</option>';}else{ echo '<option selected="selected">'.$all_name->plz_select_one.'</option>';}?>
          </select></td>
        <td  ></td>
      </tr>
      
      <tr>
        <td><?php echo $all_name->monitor_sn?></td>
        <td><input type="text" value="<?php if(!empty($monitor_sn)){echo $monitor_sn;}?>"   name="monitor_sn" placeholder="<?php echo $all_name->monitor_sn?>"  /></td>
        <td colspan="2"></td>
      </tr>
      
      <?php } ?>
      
      
      <tr>
        <td><?php echo $all_name->sn_no?></td>
        <td><input  type="text" name="sn_no" value="<?php if(!empty($sn_no)){echo $sn_no;}?>"  placeholder="<?php echo $all_name->sn_no?>"/></td>
        <td colspan="2"></td>
      </tr>
      <tr>
        <td><?php echo $all_name->invoice_no?> No</td>
        <td><input type="text"  name="invoice_no" value="<?php if(!empty($invoice_no)){echo $invoice_no;}?>"  placeholder="<?php echo $all_name->invoice_no?> No"/></td>
        <td colspan="2"></td>
      </tr>
      <tr>
        <td><?php echo $all_name->invoice_no?> PDF</td>
        <td><input  type="file" name="userfile"   id="userfile" /></td>
        <td colspan="2"></td>
      </tr>
      <?php if($_SESSION["equpment_name"]=='COMPUTER'){	?>
      <tr>
        <td><?php  echo $all_name->cpu_speed; ?></td>
        <td><?php $from_db->cpu_speed() ?></td>
        <td colspan="2"></td>
      </tr>
      <tr>
        <td><?php  echo $all_name->cpu_gen; ?></td>
        <td><?php $from_db->cpu_gen() ?></td>
        <td colspan="2"></td>
      </tr>
      
       <tr>
        <td><?php  echo $all_name->ram_type; ?></td>
        <td><?php $from_db->ram_type();$from_db->ram_capacity() ?></td>
        <td colspan="2"></td>
      </tr>
      
      <tr>
        <td><?php  echo $all_name->hd_capacity; ?></td>
        <td><?php $from_db->hd_type();$from_db->hd_capacity() ?></td>
        <td colspan="2"></td>
      </tr>
      
      
      <tr>
        <td><?php  echo $all_name->cpu_speed; ?></td>
        <td><?php $from_db->cpu_speed() ?></td>
        <td colspan="2"></td>
      </tr>
      
      <?php }?>
      
      <tr>
        <td><?php echo $all_name->supplier_name?></td>
        <td><?php $from_db->supplier_name()?></td>
        <td colspan="2"></td>
      </tr>
      <tr>
        <td><?php echo $all_name->asset?></td>
        <td><input type="checkbox" name="asset"   value="1" <?php if(!empty($asset)){echo 'checked="checked"';}?>/></td>
        <td colspan="2"></td>
      </tr>
      
      <tr>
        <td><?php echo $all_name->currency_type?></td>
        <td><?php $from_db->currency_type()?><input type="text" value="<?php if(!empty($price)){echo $price;}?>" name="price" /></td>
        <td colspan="2"></td>
      </tr>
      
      <tr>
        <td></td>
        <td><input type="submit" value="ADD " name="" /></td>
        <td></td>
        <td></td>
      </tr>
    </form>
    <tr>
      <td colspan="4" id="error"><?php if($_SERVER['REQUEST_METHOD'] == 'POST') {if(!empty($error)){echo $error;}}?></td>
    </tr>
  </table>
  <?php }?>
</center>
</body>
</html>