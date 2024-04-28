<?php 
include_once('assets/class/class.link.php');



    $from_details->equpment_name=$equpment_name;
	$from_details->department_name=$department_name;
	$from_details->owner_name=$owner_name;
	$from_details->manufacture_name=$manufacture_name;
	$from_details->model_name=$model_name;
	$from_details->cpu_gen=$cpu_gen;
	$from_details->ram_type=$ram_type;
	$from_details->ram_capacity=$ram_capacity;
	$from_details->os_type=$os_type;
	$from_details->os_name=$os_name;
	$from_details->office_name=$office_name;
	$from_details->network_connct_type=$network_connct_type;
	$from_details->country_name=$country_name;
	$from_details->section_name=$section_name;
	$from_details->building_name=$building_name;
	$from_details->responsible_name=$responsible_name;
	
	
	
	
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript">
var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns=""><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()
</script>
</head>
<body>
<form action="" method="post">
<table width="90%" border="0" cellpadding="0" cellspacing="0"> 
  
    <th><?php echo $all_name->equpment_shot_name?></th>
  <tr>
    <td align="left"><?php echo $all_name->equipmentname?></td>
    <td align="left"><?php echo $from_details->equpment_name()?> &nbsp;
      <input type="checkbox" value="1" name="view_equname" <?php if(!empty($view_equname)){echo 'checked="checked"';}?> /></td>
    <td align="left"><?php echo $all_name->departmentname?></td>
    <td align="left"><?php echo $from_details->department_name()?> &nbsp;
      <input type="checkbox" value="1" name="view_depart" <?php if(!empty($view_depart)){echo 'checked="checked"';}?> /></td>
  </tr>
  <tr>
    <td align="left"><?php echo $all_name->owner_name?></td>
    <td align="left"><?php echo $from_details->owner_name()?> &nbsp;
      <input type="checkbox" value="1" name="view_owner" <?php if(!empty($view_owner)){echo 'checked="checked"';}?> /></td>
    <td><?php echo $all_name->rent_device?></td>
    <td><input type="checkbox" name="rent_device" value="1" <?php if(!empty($rent_device)){echo 'checked="checked"';}?>/></td>
  </tr>
</table>
<hr />
<table width="90%" border="0" cellpadding="0" cellspacing="0">
  
    <th colspan="4" align="center"><?php echo $all_name->responsible_name_short?></th>
  <tr>
    <td align="left"><?php echo $all_name->cuntry_name?></td>
    <td align="left"><?php $from_details->pc_country_name_tb()?>
      <input type="checkbox" name="view_country_name" value="1" <?php if(!empty($view_country_name)){echo 'checked="checked"';}?>/></td>
    <td align="left"><?php echo $all_name->sectionname?></td>
    <td align="left"><?php $from_details->section_name()?>
      <input type="checkbox" name="view_section_name" value="1" <?php if(!empty($view_section_name)){echo 'checked="checked"';}?>/></td>
  </tr>
  <tr>
    <td align="left"><?php echo $all_name->bildingname?></td>
    <td align="left"><?php  $from_details->building_name()?>
      <input type="checkbox" name="view_building_name" value="1" <?php if(!empty($view_building_name)){echo 'checked="checked"';}?>/></td>
    <td align="left"><?php echo $all_name->responsible_name?></td>
    <td align="left"><?php $from_details->responsible_name();?>
      <input type="checkbox" name="view_responsible_name" value="1" <?php if(!empty($view_responsible_name)){echo 'checked="checked"';}?>/></td>
  </tr>
</table>
<hr />
<table width="90%" border="0" cellpadding="0" cellspacing="0">
  
    <th colspan="4" align="center"><?php echo $all_name->manufacture_name_short?></th>
  <tr>
    <td align="left"><?php echo $all_name->asset?></td>
    <td align="left"><input type="checkbox" name="asset" value="1" <?php if(!empty($asset)){echo 'checked="checked"';}?>/></td>
    <td align="left"><?php echo $all_name->manufacturename?></td>
    <td align="left"><?php $from_details->manufacture_name()?>
      &nbsp;
      <input type="checkbox" name="view_manufacture" value="1" <?php if(!empty($view_manufacture)){echo 'checked="checked"';}?>/></td>
  </tr>
  <tr>
    <td align="left"><?php echo $all_name->modelname?></td>
    <td align="left"><?php echo $from_details->model() ?> &nbsp;
      <input type="checkbox" name="view_model" value="1" <?php if(!empty($view_model)){echo 'checked="checked"';}?>/></td>
    <td align="left"><?php  echo $all_name->cpu_gen; ?></td>
    <td align="left"><?php $from_details->cpu_gen() ?>
      &nbsp;
      <input type="checkbox" name="view_cpu_gen" value="1" <?php if(!empty($view_cpu_gen)){echo 'checked="checked"';}?>/></td>
  </tr>
  <tr>
    <td align="left"><?php  echo $all_name->ram_type; ?></td>
    <td align="left"><?php $from_details->ram_type(); ?>
      &nbsp;
      <input type="checkbox" name="view_ram_type" value="1" <?php if(!empty($view_ram_type)){echo 'checked="checked"';}?>/></td>
    <td align="left"><?php  echo $all_name->ram_capacity; ?></td>
    <td align="left"><?php $from_details->ram_capacity()?>
      &nbsp;
      <input type="checkbox" name="view_ram_capacity" value="1" <?php if(!empty($view_ram_capacity)){echo 'checked="checked"';}?>/></td>
  </tr>
  <tr>
    <td align="left"><?php echo $all_name->currency_type?></td>
    <td align="left"><input type="checkbox" name="price" value="1" <?php if(!empty($price)){echo 'checked="checked"';}?>/></td>
    <td align="left"></td>
    <td align="left"></td>
  </tr>
</table>

<hr />

<table width="90%" border="0" cellpadding="0" cellspacing="0">
  
    <th colspan="2"> <?php echo $all_name->os_type_short; ?></th>
    
    <tr>
      <td align="left"><?php echo $all_name->os_type; ?></td>
      <td align="left"><?php $from_details->licen_type()?>
        <input type="checkbox" name="view_os_type" value="1" <?php if(!empty($view_os_type)){echo 'checked="checked"';}?>/></td>
      <td align="left"><?php  echo $all_name->os_name; ?></td>
      <td align="left"><?php $from_details->os_name()?>
        <input type="checkbox" name="view_os_name" value="1" <?php if(!empty($view_os_name)){echo 'checked="checked"';}?>/></td>
        </tr>
        <tr>
      <td align="left"><?php echo $all_name->activate?></td>
      <td align="left"><input type="checkbox" name="os_acctivate" value="1" <?php if(!empty($os_acctivate)){echo 'checked="checked"';}?>/></td>
    
   
      <td align="left"><?php  echo $all_name->office_name ;?></td>
      <td align="left"><?php $from_details->office_name()?>
        <input type="checkbox" name="view_office_name" value="1" <?php if(!empty($view_office_name)){echo 'checked="checked"';}?>/></td>
        </tr>
  
</table>


<hr />

<table width="90%" border="0" cellpadding="0" cellspacing="0">
  
    <th> <?php echo $all_name->network_and_els_short; ?></th>
    
    <tr>
    <td align="left"><?php echo $all_name->virus_gurd; ?></td>
      <td align="left"><input type="checkbox" name="virus_gurd" value="1" <?php if(!empty($virus_gurd)){echo 'checked="checked"';}?>/></td>
      <td align="left"><?php echo $all_name->network_connct?></td>
      <td align="left"><input type="checkbox" name="network_connct" value="1" <?php if(!empty($network_connct)){echo 'checked="checked"';}?>/></td>
    </tr>
    <tr>
      <td align="left"><?php echo $all_name->network_connct_type?></td>
      <td align="left"><?php $from_details->network_connct_type() ?></td>
      <td align="left"><?php echo $all_name->ip?></td>
      <td align="left"><input type="checkbox" name="ip_addres" value="1" <?php if(!empty($ip_addres)){echo 'checked="checked"';}?>/></td>      
    </tr>
    <tr>
    <td align="left"><?php echo $all_name->ip_internet?></td>
      <td align="left"><input type="checkbox" name="ip_internet" value="1" <?php if(!empty($ip_internet)){echo 'checked="checked"';}?>/></td>
      <td></td>
      <td></td>
    </tr>
  
</table>

<table width="95%" border="0" cellpadding="0" cellspacing="0">
  
    
     
    <tr>
      <td align="left"><input type="submit" value="Submit" /></td>
      <td align="left"><img  src="assets/img/xls_icon.png" onclick="tableToExcel('testTable', 'Result of Summary')" value="Export to Excel" height="40" width="40" title="Export to excel"/></td>
      <td align="left"></td>
      <td align="left"></td>
    </tr>
  </form>
</table>

<br />
<div id="testTable" summary="Code page support in different versions of MS Windows." rules="groups" frame="hsides" >
  <table width="100%" border="1" cellpadding="0" cellspacing="0">
    <?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {  	 
$count_no=1;
$sql="SELECT * FROM pc_it_deails_tb WHERE equpment_name LIKE '%$equpment_name%' AND 
										  department_name LIKE '%$department_name%' AND
										  owner_name LIKE '%$owner_name%'  AND
										  manufacture_name LIKE '%$manufacture_name%' AND
										  model_name LIKE '%$model_name%' AND
										  cpu_gen LIKE '%$cpu_gen%' AND
										  ram_type LIKE '%$ram_type%' AND
										  ram_capacity LIKE '%$ram_capacity%' AND
										  asset LIKE '%$asset%' AND
										  os_type LIKE '%$os_type%' AND
										  os_name LIKE '%$os_name%' AND 
										  office_name LIKE '%$office_name%' AND 
										  virus_gurd LIKE '%$virus_gurd%' AND
										  network_connct LIKE '%$network_connct%' AND 
										  network_connct_type LIKE '%$network_connct_type%' AND
										  country_name LIKE '%$country_name%' AND 
										  section_name LIKE '%$section_name%' AND
										  building_name LIKE '%$building_name%' AND
										  responsible_name LIKE '%$responsible_name%'
										  
										  ";
$result=mysql_query($sql);
$num_rows = mysql_num_rows($result);
if ($num_rows > 0) { ?>
    <tr>
      <td align="center">No</td>
      <td align="center"><?php echo $all_name->controll_no;?></td>
      <?php if(!empty($rent_device)){echo '<td align="center">'.$all_name->rent_device.'</td>';} ?>
      <?php if(!empty($equpment_name) OR !empty ($view_equname)){echo '<td align="center">'.$all_name->equpment_name.'</td>';} ?>
      <?php if(!empty($department_name) OR !empty ($view_depart) ){echo '<td align="center">'.$all_name->departmentname.'</td>';} ?>
      <?php if(!empty($owner_name) OR !empty ($view_owner)){echo '<td align="center">'.$all_name->owner_name.'</td>';} ?>
      <?php if(!empty($manufacture_name) OR !empty ($view_manufacture)){echo '<td align="center">'.$all_name->manufacturename.'</td>';} ?>
      <?php if(!empty($model_name) OR !empty ($view_model)){echo '<td align="center">'.$all_name->modelname.'</td>';} ?>
      <?php if(!empty($cpu_gen) OR !empty ($view_cpu_gen)){echo '<td align="center">'.$all_name->cpu_gen.'</td>';} ?>
      <?php if(!empty($ram_type) OR !empty ($view_ram_type)){echo '<td align="center">'.$all_name->ram_type.'</td>';} ?>
      <?php if(!empty($ram_capacity) OR !empty ($view_ram_capacity)){echo '<td align="center">'.$all_name->ram_capacity.'</td>';} ?>
      <?php if(!empty($asset) ){echo '<td align="center">'.$all_name->asset.'</td>';} ?>
      <?php if(!empty($price) ){echo '<td align="center">'.$all_name->currency_type.'</td>';} ?>
      <?php if(!empty($os_type) OR !empty ($view_os_type)){echo '<td align="center">'.$all_name->os_type.'</td>';} ?>
      <?php if(!empty($os_name) OR !empty ($view_os_name)){echo '<td align="center">'.$all_name->os_name.'</td>';} ?>
      <?php if(!empty($os_acctivate) ){echo '<td align="center">'.$all_name->os_acctivate.'</td>';} ?>
      <?php if(!empty($office_name) OR !empty ($view_office_name)){echo '<td align="center">'.$all_name->office_name.'</td>';} ?>
      <?php if(!empty($virus_gurd) ){echo '<td align="center">'.$all_name->virus_gurd.'</td>';} ?>
      <?php if(!empty($network_connct) ){echo '<td align="center">'.$all_name->network_connct.'</td>';} ?>
      <?php if(!empty($network_connct_type) ){echo '<td align="center">'.$all_name->network_connct_type.'</td>';} ?>
      <?php if(!empty($ip_addres) ){echo '<td align="center">'.$all_name->ip.'</td>';} ?>
      <?php if(!empty($country_name) OR !empty ($view_country_name)){echo '<td align="center">'.$all_name->cuntry_name.'</td>';} ?>
      <?php if(!empty($section_name) OR !empty ($view_section_name)){echo '<td align="center">'.$all_name->sectionname.'</td>';} ?>
      <?php if(!empty($building_name) OR !empty ($view_building_name)){echo '<td align="center">'.$all_name->bildingname.'</td>';} ?>
      <?php if(!empty($responsible_name) OR !empty ($view_responsible_name)){echo '<td align="center">'.$all_name->responsible_name.'</td>';} ?>
    </tr>
    <?php while($rows=mysql_fetch_array($result)){
	?>
    <tr>
      <td align="center"><?php echo $count_no++;?></td>
      <td><a href="?pc_details=<?php echo base64_encode($rows['control_number']) ?>" target="_blank"><?php echo $rows['control_number'];?></a></td>
      <?php if(!empty($rent_device)){ if(!empty($rows['rent_device'])){
	   echo '<td>'.$all_name->check_icon.'</td>';}
	   else{echo '<td>'.$all_name->not_check_icon.'</td>';}} 
	   ?>
      <?php if(!empty($equpment_name) OR !empty ($view_equname)){echo '<td>'.$rows['equpment_name'].'</td>';} ?>
      <?php if(!empty($department_name) OR !empty($view_depart)){echo '<td>'.$rows['department_name'].'</td>';} ?>
      <?php if(!empty($owner_name) OR !empty($view_owner)){echo '<td>'.$rows['owner_name'].'</td>';} ?>
      <?php if(!empty($manufacture_name) OR !empty ($view_manufacture)){echo '<td align="left">'.$rows['manufacture_name'].'</td>';} ?>
      <?php if(!empty($model_name) OR !empty ($view_model)){echo '<td align="left">'.$rows['model_name'].'</td>';} ?>
      <?php if(!empty($cpu_gen) OR !empty ($view_cpu_gen)){echo '<td align="left">'.$rows['cpu_gen'].'</td>';} ?>
      <?php if(!empty($ram_type) OR !empty ($view_ram_type)){echo '<td align="left">'.$rows['ram_type'].'</td>';} ?>
      <?php if(!empty($ram_capacity) OR !empty ($view_ram_capacity)){echo '<td align="left">'.$rows['ram_capacity'].'</td>';} ?>
      <?php if(!empty($asset) ){
		 if(!empty($rows['asset_no'])){echo '<td align="left">'.$rows['asset_no'].'</td>';} 
		 else{echo '<td align="left">'.$all_name->asset_pending.'</td>';}}?>
      <?php if(!empty($price)){echo '<td align="left">'.$rows['currency_type'].' '.$rows['price'].'</td>';} ?>
      <?php if(!empty($os_type) OR !empty ($view_os_type)){echo '<td align="left">'.$rows['os_type'].'</td>';} ?>
      <?php if(!empty($os_name) OR !empty ($view_os_name)){echo '<td align="left">'.$rows['os_name'].'</td>';} ?>
      <?php if(!empty($os_acctivate)){
		   if(!empty($rows['os_acctivate'])){echo '<td align="center">Yes</td>';}
		   else{echo '<td align="center">No</td>';}} ?>
      <?php if(!empty($office_name) OR !empty($view_office_name)){echo '<td align="left">'.$rows['office_name'].'</td>';} ?>
      <?php if(!empty($virus_gurd) ){if(!empty($rows['virus_gurd'])){echo '<td align="center">Yes</td>';}
		 else {
			 echo '<td align="center">No</td>';}} ?>
      <?php if(!empty($network_connct) ){echo '<td align="center">Yes</td>';} ?>
      <?php if(!empty($network_connct_type) ){echo '<td align="left">'.$rows['network_connct_type'].'</td>';} ?>
      <?php if(!empty($ip_addres) ){ ?>
      <td align="left"><?php $ip_addres=$rows['ip_addres'];
		echo $rows['ip_addres'].'&nbsp;';
		if(!empty($ip_internet)){$seting->select_ip_for_internet($ip_addres);} ?></td>
      <?php }?>
      <?php if(!empty($country_name) OR !empty ($view_country_name)){echo '<td align="left">'.$rows['country_name'].'</td>';} ?>
      <?php if(!empty($section_name) OR !empty ($view_section_name)){echo '<td align="left">'.$rows['section_name'].'</td>';} ?>
      <?php if(!empty($building_name) OR !empty ($view_building_name)){echo '<td align="left">'.$rows['building_name'].'</td>';} ?>
      <?php if(!empty($responsible_name) OR !empty ($view_responsible_name)){echo '<td align="left">'.$rows['responsible_name'].'</td>';} ?>
    </tr>
    <?php }
}
else {echo 'No result found ... ';}
   }

?>
  </table>
</div>
</body>
</html>