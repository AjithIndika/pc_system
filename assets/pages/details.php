<?php 
include_once('assets/class/class.link.php');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<?php if(isset($_GET['pc_details'])){
	
$pc_details=base64_decode($_GET['pc_details']);
$sql="SELECT * FROM  pc_it_deails_tb WHERE control_number='$pc_details'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>
<fieldset>
  <legend align="center">
  <h1>You Selected   <?php echo $rows['control_number'];?> </h1>
  </legend>
</fieldset>
<fieldset>
  <legend align="left">Details OF <?php echo $rows['equpment_name'];?></legend>
  <table align="left" width="60%">
    <tr>
      <td width="26%"><?php echo $all_name->rent_device?></td>
      <td width="65%"><?php  if(!empty($rows['rent_device'])){echo $all_name->check_icon;} else{echo $all_name->not_check_icon;}?></td>
    </tr>
    <tr>
      <td><?php echo $all_name->manufacturename?></td>
      <td><?php echo $rows['manufacture_name']?> / <?php echo $rows['model_name']?></td>
    </tr>
    <tr>
      <td><?php echo $all_name->sn_no?></td>
      <td><?php echo $rows['manufacture_name']?></td>
    </tr>
    <tr>
      <td><?php echo $all_name->invoice_no?> No</td>
      <td><?php echo $rows['invoice_no']?></td>
    </tr>
    <tr>
      <td><?php echo $all_name->invoice_no?> PDF</td>
      <td><?php  if(!empty($rows['invoice_pdf'])){echo '<a href="assets/invoice_pdf/'.$rows['invoice_pdf'].'" target="_blank">'.$all_name->pdf_file.'</a>';}
		else{ echo $all_name->no_pdf_file;}?> 
       
       </td>
    </tr>
    <tr>
      <td><?php echo $all_name->owner_name?></td>
      <td><?php echo $rows['owner_name']?></td>
    </tr>
    <tr>
      <td><?php echo $all_name->departmentname?></td>
      <td><?php echo $rows['department_name']?></td>
    </tr>
    <?php if($rows['equpment_name']=='COMPUTER'){ ?>
    <tr>
      <td><?php echo $all_name->pc_type;?></td>
      <td ><?php echo $rows['pc_type']?></td>
    </tr>
    <tr>
      <td><?php  echo $all_name->cpu_speed; ?></td>
      <td><?php echo $rows['cpu_speed']?></td>
    </tr>
    <tr>
      <td><?php echo $all_name->cpu_gen;?></td>
      <td ><?php echo $rows['cpu_gen']?></td>
    </tr>
    <tr>
      <td><?php echo $all_name->ram_type;?></td>
      <td ><?php echo $rows['ram_type']?>/<?php echo $rows['ram_capacity']?></td>
    </tr>
    <tr>
      <td><?php echo $all_name->hd_capacity;?></td>
      <td ><?php echo $rows['hd_type']?>/<?php echo $rows['hd_capacity']?></td>
    </tr>
    <tr>
      <td><?php echo $all_name->momanufacturename;?></td>
      <td ><?php echo $rows['monitor_manufacture_name']?> / <?php echo $rows['model_name_monitor']?> / <?php echo $rows['monitor_sn']?></td>
    </tr>
    <?php }?>
    
    <tr>
      <td><?php echo $all_name->price;?></td>
      <td ><?php echo $rows['currency_type']?>  <?php echo $rows['price']?> </td>
    </tr>
  </table>
</fieldset>
<?php if($rows['equpment_name']=='COMPUTER'){ ?>
<fieldset>
  <legend>Licen Details</legend>
  <table  align="left" width="40%">
    <tr>
      <td><?php echo $all_name->os_type; ?></td>
      <td><?php echo $rows['os_type']?></td>
    </tr>
    <tr>
      <td><?php  echo $all_name->os_name; ?></td>
      <td><?php echo $rows['os_name']?>/
        <?php  if(!empty($rows['os_acctivate'])){  echo $all_name->activate;} else{ echo $all_name->not_activate; }?></td>
    </tr>
    <tr>
      <td><?php  echo $all_name->office_name ;?></td>
      <td><?php echo $rows['office_name']?>/
        <?php  if(!empty($rows['office_active'])){  echo $all_name->check_icon;} else{ echo $all_name->not_check_icon; }?></td>
    </tr>
    <tr>
      <td><?php echo $all_name->virus_gurd; ?></td>
      <td><?php  if(!empty($rows['virus_gurd'])){  echo $all_name->check_icon;} else{ echo $all_name->not_check_icon; }?></td>
    </tr>
  </table>
</fieldset>
<?php }?>
<fieldset>
  <legend>Network Details</legend>
  <table align="left" width="40%">
    <tr>
      <td><?php echo $all_name->network_connct?></td>
      <td><?php  if(!empty($rows['network_connct'])){  echo $all_name->check_icon;} else{ echo $all_name->not_check_icon; }?></td>
    </tr>
    
    <?php if($rows['equpment_name']=='COMPUTER'){ ?>
    <tr>
      <td><?php echo $all_name->email?></td>
      <td><?php echo $rows['email'];?></td>
    </tr>    
     <?php } ?>
     
    <tr>
      <td><?php echo $all_name->ip?></td>
      <td><?php echo $rows['ip_addres']?></td>
    </tr>
    <tr>
      <td><?php echo $all_name->ip_internet?></td>
      <td><?php $ip_addres=$rows['ip_addres']; $seting->select_ip_for_internet($ip_addres);?></td>
    </tr>
    <tr>
      <td><?php echo $all_name->network_connct_type?></td>
      <td><?php echo $rows['network_connct_type']?></td>
    </tr>
  </table>
</fieldset>
<fieldset>
  <legend>Location and Responsible </legend>
  <table width="40%" align="left">
    <tr>
      <td><?php echo $all_name->cuntry_name?></td>
      <td><?php echo $rows['country_name']?></td>
    </tr>
    <tr>
      <td><?php echo $all_name->bildingname?></td>
      <td><?php echo $rows['building_name']?></td>
    </tr>
    <tr>
      <td><?php echo $all_name->sectionname?></td>
      <td><?php echo $rows['section_name']?></td>
    </tr>
    <tr>
      <td><?php echo $all_name->responsible_name?></td>
      <td><?php echo $rows['responsible_name']?></td>
    </tr>
  </table>
</fieldset>
<fieldset>
  <legend align="left">Asset Details</legend>
  <table  width="40%" align="left">
    <tr>
      <td><?php echo $all_name->asset?></td>
      <td><?php  if(!empty($rows['asset'])){  echo $all_name->check_icon;} else{ echo $all_name->not_check_icon; }?></td>
    </tr>
    <tr>
      <td></td>
      <td><?php  if(!empty($rows['asset_pending'])){  echo $all_name->asset_pending.'  <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>';} else{ echo $rows['asset_no']; }?></td>
    </tr>
  </table>
</fieldset>
<fieldset>
  <legend>Use And status </legend>
  <table  width="40%" align="left">
    <tr>
      <td><?php echo $all_name->usingname?></td>
      <td><?php echo $rows['pc_using']?></td>
    </tr>
    <tr>
      <td><?php echo $all_name->status_name?></td>
      <td><?php echo $rows['status_name']?></td>
    </tr>
  </table>
</fieldset>


<fieldset>
  <legend>Last Update </legend>
  <table  width="40%" align="left">
    <tr>
      <td>Update date</td>
      <td><?php echo $rows['update_date']?></td>
    </tr>
    <tr>
      <td>Update By</td>
      <td><?php echo $rows['update_by']?></td>
    </tr>
  </table>
</fieldset>

<fieldset>
  <legend>Barcode check </legend>
  <table  width="40%" align="left">
    <tr>
      <td>Check date</td>
      <td><?php echo $rows['check_date']?></td>
    </tr>
    <tr>
      <td>Check By</td>
      <td><?php echo $rows['check_by']?></td>
    </tr>
  </table>
</fieldset>

<fieldset>
  <legend>Register by </legend>
  <table  width="40%" align="left">
    <tr>
      <td>Register date</td>
      <td><?php echo $rows['register_date']?></td>
    </tr>
    <tr>
      <td>Register By</td>
      <td><?php echo $rows['register_person']?></td>
    </tr>
  </table>
</fieldset>

<fieldset>
<legend>Comments</legend>
<textarea name="comments" style="width:50%; height:auto"><?php echo $rows['comments']?></textarea>
</fieldset>




<?php /*if(!empty($_SESSION["edit"])){ 
echo '<div></div>';
}*/?>


<div align="left">
<?php if(!empty($_SESSION["edit"])){?>
<a href="?update=<?php echo base64_encode($rows['control_number'])?>" ><input type="button" value="Update  "></a>
<?php }?>
<?php  if(!empty($_SESSION["delet "])){?>
<a href="assets/class/delet.class.php?delet_pc=<?php echo base64_encode($rows['control_number']);?>"  onclick="return confirm('Are you sure Delet This ?');"><input type="button"  name="" value="Delet"/></a>
<?php }?>
</div>


<?php } ?>
<?php if(isset($_GET['update'])){
		$control_number=base64_decode($_GET['update']);
		
	
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
	
		
			
		$device->pc_detils_update( $manufacture_name,
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
									$control_number);
									
									
						
		
		}
	
	$connumber =base64_decode($_GET['update']);
	$sql="SELECT * FROM  pc_it_deails_tb WHERE control_number='$connumber'";
    $result=mysql_query($sql);
    $rows=mysql_fetch_array($result);
	
	$from_db->owner_name=$rows['owner_name'];
	$from_db->manufacture_name=$rows['manufacture_name'];
	$from_db->cpu_speed=$rows['cpu_speed'];	
	$from_db->cpu_gen=$rows['cpu_gen'];
	$from_db->ram_capacity=$rows['ram_capacity'];
	$from_db->ram_type=$rows['ram_type'];
	$from_db->hd_type=$rows['hd_type'];
	$from_db->hd_capacity=$rows['hd_capacity'];
	$from_db->licen_type=$rows['licen_type'];
	$from_db->os_name=$rows['os_name'];
	$from_db->office_name=$rows['office_name'];
	$from_db->network_connct_type=$rows['network_connct_type'];
	$from_db->country_name=$rows['country_name'];
	$from_db->building_name =$rows['building_name'];
	$from_db->section_name=$rows['section_name'];	
	$from_db->responsible_name=$rows['responsible_name'];
	$from_db->pc_using=$rows['pc_using'];
	$from_db->status_name=$rows['status_name'];
	$from_db->currency_type=$rows['currency_type'];
	$from_db->pc_type=$rows['pc_type'];
	$from_db->os_type=$rows['os_type'];
	$from_db->ip_addres=$rows['ip_addres'];
	$from_db->supplier_name=$rows['supplier_name'];
	$from_db->monitor_manufacture_name=$rows['monitor_manufacture_name'];
	$from_db->monitor_sn=$rows['monitor_sn'];
	$from_db->model_name_monitor=$rows['model_name_monitor'];

	
	?>
    
    <form action="" method="post">
<fieldset>
  <legend align="center">
  <h1><?php echo $rows['control_number'];?> Is a <?php echo $rows['equpment_name'];?></h1>
  <input type="hidden" value="<?php echo $rows['control_number'];?>" name="control_number" />
  </legend>
</fieldset>
<fieldset >
  <legend align="left">Details OF <?php echo $rows['equpment_name'];?></legend>
  <table align="left" width="60%">
    <tr>
      <td width="26%"><?php echo $all_name->rent_device?></td>
      <td width="65%">
      <input type="hidden" name="control_number" value="<?php echo $rows['control_number'];?>" /><input type="checkbox" name="rent_device" value="1" <?php if(!empty($rows['rent_device'])){echo 'checked="checked"';}?>/></td>
    </tr>
    <tr>
      <td><?php echo $all_name->manufacturename?></td>
      <td colspan="3"><?php $from_db->manufacture_name()?>
        <select name="model_name" id="txtHint">
          <?php if(!empty($rows['model_name'])){echo '<option selected="selected">'.$rows['model_name'].'</option>';}else{ echo '<option selected="selected">'.$all_name->plz_select_one.'</option>';}?>
        </select></td>
    </tr>
    <tr>
      <td><?php echo $all_name->sn_no?></td>
      <td><input  type="text" name="sn_no" value="<?php if(!empty($rows['sn_no'])){echo $rows['sn_no'];}?>"  placeholder="<?php echo $all_name->sn_no?>"/></td>
    </tr>
    <tr>
      <td><?php echo $all_name->invoice_no?> No</td>
      <td><input type="text"  name="invoice_no" value="<?php if(!empty($rows['invoice_no'])){echo $rows['invoice_no'];}?>"  placeholder="<?php echo $all_name->invoice_no?> No"/></td>
    </tr>
    <tr>
      <td><?php echo $all_name->invoice_no?> PDF</td>
      <td><?php  if(!empty($rows['invoice_pdf'])){echo '<a href="assets/invoice_pdf/'.$rows['invoice_pdf'].'" target="_blank">'.$all_name->pdf_file.'</a>';}
		else{ echo $all_name->no_pdf_file;}?></td>
    </tr>
    <tr>
      <td><?php echo $all_name->owner_name?></td>
      <td><?php $from_db->owner_name()?></td>
    </tr>
    <tr>
      <td><?php echo $all_name->departmentname?></td>
      <td><?php echo $rows['department_name']?></td>
    </tr>
    <?php if($rows['equpment_name']=='COMPUTER'){ ?>
    

    <tr style="background-color:#0CF">
      <td><?php  echo $all_name->pc_name; ?></td>
      <td><input type="text" value="<?php echo $rows['pc_name']?>" name="pc_name" placeholder="<?php echo $all_name->pc_name;?>" /></td>
      <td colspan="2"></td>
    </tr>
    
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
      <td><?php echo $all_name->pc_type?></td>
      <td><?php $from_db->pc_type()?></td>
      <td colspan="2"></td>
    </tr>
    
    <tr>
        <td><?php echo $all_name->momanufacturename?></td>
        <td colspan="3"><?php $from_db->manufacture_monitor_name()?>
          <select name="model_name_monitor" id="monitorview">
            <?php if(!empty($rows['model_name_monitor'])){echo '<option selected="selected">'.$rows['model_name_monitor'].'</option>';}else{ echo '<option selected="selected">'.$all_name->plz_select_one.'</option>';}?>
          </select></td>
        <td  ></td>
      </tr>
      
      <tr>
        <td><?php echo $all_name->monitor_sn?></td>
        <td><input type="text" value="<?php if(!empty($rows['monitor_sn'])){echo $rows['monitor_sn'];}?>"   name="monitor_sn" placeholder="<?php echo $all_name->monitor_sn?>"  /></td>
        <td colspan="2"></td>
      </tr>
      
    <?php }?>
    
    <tr>
      <td><?php echo $all_name->price;?></td>
      <td ><?php $from_db->currency_type()?> <input type="text" value="<?php echo $rows['price']?>" name="price" /> </td>
    </tr>
    
   <tr>
      <td><?php echo $all_name->supplier_name;?></td>
      <td ><?php $from_db->supplier_name()?>  </td>
    </tr>
  </table>
</fieldset>
<?php if($rows['equpment_name']=='COMPUTER'){ ?>
<fieldset>
  <legend>Licen Details</legend>
  <table  align="left" width="40%">
    <tr>
      <td><?php echo $all_name->os_type; ?></td>
      <td><?php $from_db->licen_type()?></td>
    </tr>
    <tr>
      <td><?php  echo $all_name->os_name; ?></td>
      <td><?php $from_db->os_name()?>/ <?php echo $all_name->activate?>
        <input type="checkbox" name="os_acctivate" value="1" <?php if(!empty($rows['os_acctivate'])){echo 'checked="checked"';}?>/></td>
    </tr>
    <tr>
      <td><?php  echo $all_name->office_name ;?></td>
      <td><?php $from_db->office_name()?>/ <?php echo $all_name->activate?>
        <input type="checkbox" name="office_active" value="1" <?php if(!empty($rows['office_active'])){echo 'checked="checked"';}?>/></td>
    </tr>
    <tr>
      <td><?php echo $all_name->virus_gurd; ?></td>
      <td><input type="checkbox" name="virus_gurd" value="1" <?php if(!empty($rows['virus_gurd'])){echo 'checked="checked"';}?>/></td>
    </tr>
  </table>
</fieldset>
<?php }?>
<fieldset>
  <legend>Network Details</legend>
  <table align="left" width="40%">
    <tr>
      <td><?php echo $all_name->network_connct?></td>
      <td><input type="checkbox" name="network_connct" value="1" <?php if(!empty($rows['network_connct'])){echo 'checked="checked"';}?>/>
     
      </td>
    </tr>
    
    <?php if($rows['equpment_name']=='COMPUTER'){ ?>
    
    <tr>
      <td><?php echo $all_name->email?></td>
      <td><input type="text" value="<?php echo $rows['email'];?>" name="email" /></td>
    </tr>
    
     <?php } ?>
    <tr>
      <td><?php echo $all_name->ip?></td>
      <td><?php if(!empty($rows['ip_addres'])){ echo $rows['ip_addres'].'<input type="hidden" value="'.$rows['ip_addres'].'" name="ip_addres" />';} else {$from_db->ip_addres();}?>
      <?php $ip_addres=$rows['ip_addres']; 
	  $control_number=$rows['control_number'];
	  if(!empty($rows['ip_addres'])){ ?> 
      <a href="assets/class/delet.class.php?ip_reset_details=<?php echo $ip_addres.'_'.$control_number; ?>" onclick="return confirm('Are you sure Reset ?');" title="Reset the Ip addres"><span class="glyphicon glyphicon-refresh"></span></a>
	  <?php }?>
      </td>
    </tr>
    <tr>
      <td><?php echo $all_name->ip_internet?></td>
      <td><?php if(!empty($rows['ip_addres'])){ $ip_addres=$rows['ip_addres']; $seting->select_ip_for_internet($ip_addres);}?>
      </td>
    </tr>
    
    <tr>
      <td><?php echo $all_name->network_connct_type?></td>
      <td> <?php $from_db->network_connct_type() ?></td>
    </tr>
  </table>
</fieldset>
<fieldset>
  <legend>Location and Responsible </legend>
  <table width="40%" align="left">
    <tr>
      <td><?php echo $all_name->cuntry_name?></td>
      <td><?php $from_db->pc_country_name_tb()?></td>
    </tr>
    <tr>
      <td><?php echo $all_name->bildingname?></td>
      <td><?php  $from_db->building_name()?></td>
    </tr>
    <tr>
      <td><?php echo $all_name->sectionname?></td>
      <td><?php $from_db->section_name()?></td>
    </tr>
    <tr>
      <td><?php echo $all_name->responsible_name?></td>
      <td><?php $from_db->responsible_name()?></td>
    </tr>
  </table>
</fieldset>
<fieldset>
  <legend align="left">Asset Details</legend>
  <table  width="40%" align="left">
    <tr>
      <td><?php echo $all_name->asset?></td>
      <td><input type="checkbox" name="asset" value="1" <?php if(!empty($rows['asset'])){echo 'checked="checked"';}?>/>
      <?php echo $rows['asset_pending'] ?>
      <input type="text" value="<?php echo $rows['asset_no'] ?>" name="asset_no" /></td>
    </tr>
    <tr>
      <td></td>
      <td></td>
    </tr>
  </table>
</fieldset>
<fieldset>
  <legend>Use And status </legend>
  <table  width="50%" align="left">
    <tr>
      <td><?php echo $all_name->usingname?></td>
      <td><?php $from_db->pc_using()?></td>
    </tr>
    <tr>
      <td><?php echo $all_name->status_name?></td>
      <td><?php $from_db->status_name()?></td>
    </tr>
  </table>
</fieldset>


<fieldset>
  <legend>Barcode check </legend>
  <table  width="40%" align="left">
    <tr>
      <td>Check date</td>
      <td><?php echo $rows['check_date']?></td>
    </tr>
    <tr>
      <td>Check By</td>
      <td><?php echo $rows['check_by']?></td>
    </tr>
  </table>
</fieldset>


<fieldset>
<legend>Comments</legend>
<textarea name="comments" style="width:50%; height:auto" spellcheck="true"><?php echo $rows['comments']?></textarea>
</fieldset>
<fieldset>
  <legend>Last Update </legend>
  <table  width="40%" align="left">
    <tr>
      <td colspan="2"><?php echo 'Update'; echo '&nbsp;&nbsp;'.$rows['update_by'].'&nbsp;/&nbsp;'.$rows['update_date']?></td>     
    </tr>
   
  </table>
</fieldset>

<div align="left">
<?php if(!empty($_SESSION["edit"])){?>
<input type="submit" value="Update" name="" /> 
<?php }?>
<?php  if(!empty($_SESSION["delet "])){?>
<a href="assets/class/delet.class.php?delet_pc=<?php echo base64_encode($rows['control_number']);?>"  onclick="return confirm('Are you sure Delet This ?');"><input type="button"  name="" value="Delet"/></a>
<?php }?>
</div>
</form>
<?php } 

?>
</body>
</html>