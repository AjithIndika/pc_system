<?php 
include_once('assets/class/class.link.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php 

/////////  bulding Name
 if (isset($_GET[$all_name->main_parameters_sub_01])) {	



 if ($_SERVER['REQUEST_METHOD'] == 'POST') {	 
	 if(empty($building_name)){
		 $building_nameError=$all_name->bildingname.'&nbsp;'.$error->cant_empty;
		 }
		 else{
		 
		      $sql="SELECT * FROM   pc_building_name_tb  WHERE 	building_name='$building_name'";
			if ($result=mysql_query($sql))
			  {
			  $rowcount=mysql_num_rows($result);
			if($rowcount==1)
			{
				$building_nameError=$all_name->bildingname.'&nbsp;'.$building_name.'&nbsp;'.$error->dupplicate;
			}
			else{
				$seting->add_bulding($building_name);			
			    $building_nameError=$all_name->bildingname.'&nbsp;'.$building_name.'&nbsp;'.$error->sucess;
				}
			  mysql_free_result($result);
			  }
			 }
	 } 
	  
  ?>
<div align="center" id="titels"><?php echo $all_name->bildingname ?></div>
<form action="" method="post">
  <table align="center" width="50%" style="margin-top:5px">
    <tr style="margin-top:5px">
      <td width="21%"><?php echo $all_name->bildingname ?></td>
      <td width="62%"><input type="text" value="" name="building_name"  width="400px"/></td>
      <td width="17%"><input type="submit" value="Submit" id="submit_buttoun"/></td>
    </tr>
  </table>
</form>
<div id="error">
  <?php if(!empty($building_nameError)){echo $building_nameError;}?>
</div>
<hr />
<?php 

$seting->celect_all_bulding() ;              
   }
?>
<?php
/////////  using Name
 if (isset($_GET[$all_name->main_parameters_sub_02])) {	
  

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {	 
	 if(empty($pc_using)){
		 $pc_usingError=$all_name->usingname.'&nbsp;'.$error->cant_empty;
		 }
		 else{
		 
		      $sql="SELECT * FROM   pc_using_tb  WHERE 	pc_using='$pc_using'";
			if ($result=mysql_query($sql))
			  {
			  $rowcount=mysql_num_rows($result);
			if($rowcount==1)
			{
				$pc_usingError=$all_name->usingname.'&nbsp;'.$pc_using.'&nbsp;'.$error->dupplicate;
			}
			else{
				$seting->add_using($pc_using);			
			    $pc_usingError=$all_name->usingname.'&nbsp;'.$pc_using.'&nbsp;'.$error->sucess;
				}
			  mysql_free_result($result);
			  }
			 }
	 } 
	  
  ?>
<div align="center" id="titels"><?php echo $all_name->usingname ?></div>
<form action="" method="post">
  <table align="center" width="50%" style="margin-top:5px">
    <tr style="margin-top:5px">
      <td width="21%"><?php echo $all_name->usingname ?></td>
      <td width="62%"><input type="text" value="" name="pc_using"  width="400px"/></td>
      <td width="17%"><input type="submit" value="Submit" id="submit_buttoun"/></td>
    </tr>
  </table>
</form>
<div id="error">
  <?php if(!empty($pc_usingError)){echo $pc_usingError;}?>
</div>
<hr />
<?php 

$seting->celect_all_using() ;              
   }
?>

<!--------------  depart ment  ------------------!-------->

<?php
/////////  using Name
 if (isset($_GET[$all_name->main_parameters_sub_03])) {	


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {	 
	 if(empty($department_name)){
		 $pc_usingError=$all_name->departmentname.'&nbsp;'.$error->cant_empty;
		 }
		 else{	
		   $sql="SELECT * FROM   pc_department_name_tb  WHERE 	department_name='$department_name'";
		   		if ($result=mysql_query($sql))
			  {
			  $rowcount=mysql_num_rows($result);
			if($rowcount==1)
			{
				$pc_usingError=$all_name->departmentname.'&nbsp;'.$department_name.'&nbsp;'.$error->dupplicate;
			}
			else{
				$seting->add_department($department_name);			
			    $pc_usingError=$all_name->departmentname.'&nbsp;'.$department_name.'&nbsp;'.$error->sucess;
				}
			  mysql_free_result($result);
			  }
			 }
	 } 
	
  ?>
<div align="center" id="titels"><?php echo $all_name->departmentname ?></div>
<form action="" method="post">
  <table align="center" width="56%" style="margin-top:5px">
    <tr style="margin-top:5px">
      <td width="33%"><?php echo $all_name->departmentname;?></td>
      <td width="55%"><input type="text" value="" name="department_name"  width="400px"/></td>
      <td width="12%"><input type="submit" value="Submit" id="submit_buttoun"/></td>
    </tr>
  </table>
</form>
<div id="error">
  <?php if(!empty($pc_usingError)){echo $pc_usingError;}?>
</div>
<hr />
<?php 

$seting->celect_all_department() ;              
   }
?>

<!------------------  section -------------!------------->

<?php 
/////////  section name
 if (isset($_GET[$all_name->main_parameters_sub_04])) {	


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {	 
	 if(empty($section_name)){
		 $pc_usingError=$all_name->sectionname.'&nbsp;'.$error->cant_empty;
		 }
		 else{	
		   $sql="SELECT * FROM   pc_section_name_tb  WHERE 	section_name='$section_name'";
		   		if ($result=mysql_query($sql))
			  {
			  $rowcount=mysql_num_rows($result);
			if($rowcount==1)
			{
				$pc_usingError=$all_name->sectionname.'&nbsp;'.$section_name.'&nbsp;'.$error->dupplicate;
			}
			else{
				$seting->add_section($section_name);		
			    $pc_usingError=$all_name->sectionname.'&nbsp;'.$section_name.'&nbsp;'.$error->sucess;
				}
			  mysql_free_result($result);
			  }
			 }
	 } 
	
  ?>
<div align="center" id="titels"><?php echo $all_name->sectionname ?></div>
<form action="" method="post">
  <table align="center" width="56%" style="margin-top:5px">
    <tr style="margin-top:5px">
      <td width="33%"><?php echo $all_name->sectionname;?></td>
      <td width="55%"><input type="text" value="" name="section_name"  width="400px"/></td>
      <td width="12%"><input type="submit" value="Submit" id="submit_buttoun"/></td>
    </tr>
  </table>
</form>
<div id="error">
  <?php if(!empty($pc_usingError)){echo $pc_usingError;}?>
</div>
<hr />
<?php 

$seting->celect_all_section() ;              
   }
   ?>

<!--------------- equpment name ------------------!--------->

<?php 
/////////  section name
 if (isset($_GET[$all_name->main_parameters_sub_05])) {	


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {	 
	 if(empty($equpment_name)){
		 $equpment_nameError=$all_name->equipmentname.'&nbsp;'.$error->cant_empty;
		 }
		 else{	
		   $sql="SELECT * FROM   pc_equpment_name_tb  WHERE 	equpment_name='$equpment_name'";
		   		if ($result=mysql_query($sql))
			  {
			  $rowcount=mysql_num_rows($result);
			if($rowcount==1)
			{
				$equpment_nameError=$all_name->equipmentname.'&nbsp;'.$equpment_name.'&nbsp;'.$error->dupplicate;
			}
			else{
				$seting->add_equpment($equpment_name);		
			    $equpment_nameError=$all_name->equipmentname.'&nbsp;'.$equpment_name.'&nbsp;'.$error->sucess;
				}
			  mysql_free_result($result);
			  }
			 }
	 } 

  ?>
<div align="center" id="titels"><?php echo $all_name->equipmentname ?></div>
<form action="" method="post">
  <table align="center" width="56%" style="margin-top:5px">
    <tr style="margin-top:5px">
      <td width="33%"><?php echo $all_name->equipmentname;?></td>
      <td width="55%"><input type="text" value="" name="equpment_name"  width="400px"/></td>
      <td width="12%"><input type="submit" value="Submit" id="submit_buttoun"/></td>
    </tr>
  </table>
</form>
<div id="error">
  <?php if(!empty($equpment_nameError)){echo $equpment_nameError;}?>
</div>
<hr />
<?php 

$seting->celect_all_equpment() ;              
   }
   ?>

<!------------------- manufacthue --------------!----------->

<?php 
/////////  section name
 if (isset($_GET[$all_name->main_parameters_sub_06])) {	


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {	 
	 if(empty($manufacture_name)){
		 $pc_usingError=$all_name->manufacturename.'&nbsp;'.$error->cant_empty;
		 }
		 else{	
		       $sql="SELECT * FROM   pc_manufacturename_tb  WHERE 	manufacture_name='$manufacture_name'";
		   		if ($result=mysql_query($sql))
			  {
			  $rowcount=mysql_num_rows($result);
			if($rowcount==1)
			{
				$pc_usingError=$all_name->manufacturename.'&nbsp;'.$manufacture_name.'&nbsp;'.$error->dupplicate;
			}
			else{
				$seting->add_manufacturename($manufacture_name);		
			    $pc_usingError=$all_name->manufacturename.'&nbsp;'.$manufacture_name.'&nbsp;'.$error->sucess;
				}
			  mysql_free_result($result);
			  }
			 }
	 } 
	
  ?>
<div align="center" id="titels"><?php echo $all_name->manufacturename ?></div>
<form action="" method="post">
  <table align="center" width="56%" style="margin-top:5px">
    <tr style="margin-top:5px">
      <td width="33%"><?php echo $all_name->manufacturename;?></td>
      <td width="55%"><input type="text" value="" name="manufacture_name"  width="400px"/></td>
      <td width="12%"><input type="submit" value="Submit" id="submit_buttoun"/></td>
    </tr>
  </table>
</form>
<div id="error">
  <?php if(!empty($pc_usingError)){echo $pc_usingError;}?>
</div>
<hr />
<?php 

$seting->celect_all_manufacturename();              
   }
   ?>
<?php 
/////////  model name

 if (isset($_GET[$all_name->main_parameters_sub_07])) {	
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	  
if(!empty($manufacture_name) AND !empty($model_name)){
               $sql="SELECT * FROM   pc_model_name_tb  WHERE  manufacture_name='$manufacture_name' AND model_name='$model_name'";
		   		if ($result=mysql_query($sql))
			  {
			  $rowcount=mysql_num_rows($result);
			if($rowcount==1)
			{
				$pc_usingError=$all_name->manufacturename.' and '.$all_name->modelname.'&nbsp;'.$error->dupplicate;
			}
			else{
				$seting->add_model_name($manufacture_name,$model_name);
				}
			  }	  
}
else{ $pc_usingError=$all_name->manufacturename.' OR '.$all_name->modelname.' '.$error->cant_empty;  
				  }				
 }


  ?>
<div align="center" id="titels"><?php echo $all_name->modelname ?></div>
<form action="" method="post">
  <table align="center" width="56%" style="margin-top:5px">
    <tr style="margin-top:5px">
      <td width="33%"><?php echo $all_name->manufacturename;?></td>
      <td width="55%"><?php $from_db->manufacture_name()?></td>
      <td width="12%"></td>
    </tr>
    <tr style="margin-top:5px">
      <td width="33%"><?php echo $all_name->modelname;?></td>
      <td width="55%"><input type="text" value="" name="model_name"  width="400px"/></td>
      <td width="12%"><input type="submit" value="Submit" id="submit_buttoun"/></td>
    </tr>
  </table>
</form>
<div id="error">
  <?php if(!empty($pc_usingError)){echo $pc_usingError;}?>
</div>
<hr />
<?php 

$seting->celect_all_model_name() ;              
   }
   ?>
<?php 

/////////  OS NAME
 if (isset($_GET[$all_name->main_parameters_sub_08])) {	
 


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {	 
	 if(empty($os_name)){
		 $os_nameError=$all_name->os_name.'&nbsp;'.$error->cant_empty;
		 }
		 else{
		 
		      $sql="SELECT * FROM    pc_os_name_tb  WHERE 	os_name='$os_name'";
			if ($result=mysql_query($sql))
			  {
			  $rowcount=mysql_num_rows($result);
			if($rowcount==1)
			{
				$os_nameError=$all_name->os_name.'&nbsp;'.$os_name.'&nbsp;'.$error->dupplicate;
			}
			else{
				$seting->add_os($os_name);			
			    $os_nameError=$all_name->os_name.'&nbsp;'.$os_name.'&nbsp;'.$error->sucess;
				}
			  mysql_free_result($result);
			  }
			 }
	 } 
	  
  ?>
<div align="center" id="titels"><?php echo $all_name->os_name ?></div>
<form action="" method="post">
  <table align="center" width="50%" style="margin-top:5px">
    <tr style="margin-top:5px">
      <td width="21%"><?php echo $all_name->os_name ?></td>
      <td width="62%"><input type="text" value="" name="os_name"  width="400px"/></td>
      <td width="17%"><input type="submit" value="Submit" id="submit_buttoun"/></td>
    </tr>
  </table>
</form>
<div id="error">
  <?php if(!empty($os_nameError)){echo $os_nameError;}?>
</div>
<hr />
<?php 

$seting->celect_all_os() ;              
   }
   ?>
<?php 

/////////  OFFICE NAME
 if (isset($_GET[$all_name->main_parameters_sub_09])) {	
 


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {	 
	 if(empty($office_name)){
		 $office_nameError=$all_name->office_name.'&nbsp;'.$error->cant_empty;
		 }
		 else{
		 
		      $sql="SELECT * FROM   pc_office_name_tb  WHERE 	office_name='$office_name'";
			if ($result=mysql_query($sql))
			  {
			  $rowcount=mysql_num_rows($result);
			if($rowcount==1)
			{
				$office_nameError=$all_name->office_name.'&nbsp;'.$office_name.'&nbsp;'.$error->dupplicate;
			}
			else{
				$seting->add_office($office_name);			
			    $office_nameError=$all_name->office_name.'&nbsp;'.$office_name.'&nbsp;'.$error->sucess;
				}
			  mysql_free_result($result);
			  }
			 }
	 } 
	  
  ?>
<div align="center" id="titels"><?php echo $all_name->office_name ?></div>
<form action="" method="post">
  <table align="center" width="50%" style="margin-top:5px">
    <tr style="margin-top:5px">
      <td width="21%"><?php echo $all_name->office_name ?></td>
      <td width="62%"><input type="text" value="" name="office_name"  width="400px"/></td>
      <td width="17%"><input type="submit" value="Submit" id="submit_buttoun"/></td>
    </tr>
  </table>
</form>
<div id="error">
  <?php if(!empty($office_nameError)){echo $office_nameError;}?>
</div>
<hr />
<?php 

$seting->celect_all_office() ;              
   }
   ?>
<?php 

///////// cuntry
 if (isset($_GET[$all_name->main_parameters_sub_10])) {	
 


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {	 
	 if(empty($country_name)){
		 $office_nameError=$all_name->cuntry_name.'&nbsp;'.$error->cant_empty;
		 }
		 else{
		 
		      $sql="SELECT * FROM   pc_country_name_tb  WHERE 	country_name='$country_name'";
			if ($result=mysql_query($sql))
			  {
			  $rowcount=mysql_num_rows($result);
			if($rowcount==1)
			{
				$office_nameError=$all_name->cuntry_name.'&nbsp;'.$country_name.'&nbsp;'.$error->dupplicate;
			}
			else{
				$seting->add_country($country_name);			
			    $office_nameError=$all_name->cuntry_name.'&nbsp;'.$country_name.'&nbsp;'.$error->sucess;
				}
			  mysql_free_result($result);
			  }
			 }
	 } 
	  
  ?>
<div align="center" id="titels"><?php echo $all_name->cuntry_name ?></div>
<form action="" method="post">
  <table align="center" width="50%" style="margin-top:5px">
    <tr style="margin-top:5px">
      <td width="21%"><?php echo $all_name->cuntry_name ?></td>
      <td width="62%"><input type="text" value="" name="country_name"  width="400px"/></td>
      <td width="17%"><input type="submit" value="Submit" id="submit_buttoun"/></td>
    </tr>
  </table>
</form>
<div id="error">
  <?php if(!empty($office_nameError)){echo $office_nameError;}?>
</div>
<hr />
<?php 

$seting->celect_all_country() ;              
   }
   ?>
<?php 

/////////  respons
 if (isset($_GET[$all_name->main_parameters_sub_11])) {	
 


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {	 
	 if(empty($responsible_name)){
		 $responsible_nameError=$all_name->responsible_name.'&nbsp;'.$error->cant_empty;
		 }
		 else{
		 
		      $sql="SELECT * FROM   pc_responsible_name_tb  WHERE 	responsible_name='$responsible_name'";
			if ($result=mysql_query($sql))
			  {
			  $rowcount=mysql_num_rows($result);
			if($rowcount==1)
			{
				$responsible_nameError=$all_name->responsible_name.'&nbsp;'.$responsible_name.'&nbsp;'.$error->dupplicate;
			}
			else{
				$seting->add_responsible($responsible_name);			
			    $responsible_nameError=$all_name->responsible_name.'&nbsp;'.$responsible_name.'&nbsp;'.$error->sucess;
				}
			  mysql_free_result($result);
			  }
			 }
	 } 
	  
  ?>
<div align="center" id="titels"><?php echo $all_name->responsible_name ?></div>
<form action="" method="post">
  <table align="center" width="50%" style="margin-top:5px">
    <tr style="margin-top:5px">
      <td width="26%"><?php echo $all_name->responsible_name ?></td>
      <td width="63%"><input type="text" value="" name="responsible_name"  width="400px"/></td>
      <td width="11%"><input type="submit" value="Submit" id="submit_buttoun"/></td>
    </tr>
  </table>
</form>
<div id="error">
  <?php if(!empty($responsible_nameError)){echo $responsible_nameError;}?>
</div>
<hr />
<?php 

$seting->celect_all_responsible() ;              
   }
   ?>
<?php 

/////////  Status
 if (isset($_GET[$all_name->main_parameters_sub_12])) {	
 


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {	 
	 if(empty($status_name)){
		 $status_nameError=$all_name->status_name.'&nbsp;'.$error->cant_empty;
		 }
		 else{
		 
		      $sql="SELECT * FROM   pc_status_name_tb  WHERE 	status_name='$status_name'";
			if ($result=mysql_query($sql))
			  {
			  $rowcount=mysql_num_rows($result);
			if($rowcount==1)
			{
				$status_nameError=$all_name->status_name.'&nbsp;'.$status_name.'&nbsp;'.$error->dupplicate;
			}
			else{
				$seting->add_status($status_name);			
			    $status_nameError=$all_name->status_name.'&nbsp;'.$status_name.'&nbsp;'.$error->sucess;
				}
			  mysql_free_result($result);
			  }
			 }
	 } 
	  
  ?>
<div align="center" id="titels"><?php echo $all_name->status_name ?></div>
<form action="" method="post">
  <table align="center" width="50%" style="margin-top:5px">
    <tr style="margin-top:5px">
      <td width="21%"><?php echo $all_name->status_name ?></td>
      <td width="62%"><input type="text" value="" name="status_name"  width="400px"/></td>
      <td width="17%"><input type="submit" value="Submit" id="submit_buttoun"/></td>
    </tr>
  </table>
</form>
<div id="error">
  <?php if(!empty($status_nameError)){echo $status_nameError;}?>
</div>
<hr />
<?php 

$seting->celect_all_status() ;              
   }
   ?>
<?php 

/////////  hd_capacity
 if (isset($_GET[$all_name->main_parameters_sub_13])) {	

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {	 
	 if(empty($hd_capacity)){
		 $hd_capacityError=$all_name->hd_capacity.'&nbsp;'.$error->cant_empty;
		 }
		 else{
		 
		      $sql="SELECT * FROM   pc_hd_capacity_name_tb  WHERE 	hd_capacity='$hd_capacity'";
			if ($result=mysql_query($sql))
			  {
			  $rowcount=mysql_num_rows($result);
			if($rowcount==1)
			{
				$hd_capacityError=$all_name->hd_capacity.'&nbsp;'.$hd_capacity.'&nbsp;'.$error->dupplicate;
			}
			else{
				$seting->add_hd_capacity($hd_capacity);			
			    $hd_capacityError=$all_name->hd_capacity.'&nbsp;'.$hd_capacity.'&nbsp;'.$error->sucess;
				}
			  mysql_free_result($result);
			  }
			 }
	 } 
	  
  ?>
<div align="center" id="titels"><?php echo $all_name->hd_capacity ?></div>
<form action="" method="post">
  <table align="center" width="50%" style="margin-top:5px">
    <tr style="margin-top:5px">
      <td width="21%"><?php echo $all_name->hd_capacity ?></td>
      <td width="62%"><input type="text" value="" name="hd_capacity"  width="400px"/></td>
      <td width="17%"><input type="submit" value="Submit" id="submit_buttoun"/></td>
    </tr>
  </table>
</form>
<div id="error">
  <?php if(!empty($hd_capacityError)){echo $hd_capacityError;}?>
</div>
<hr />
<?php 

$seting->celect_all_hd_capacity() ;              
   }
   ?>
<?php 

/////////  ram_capacity
 if (isset($_GET[$all_name->main_parameters_sub_14])) {	

 if ($_SERVER['REQUEST_METHOD'] == 'POST') {	 
	 if(empty($ram_capacity)){
		 $ram_capacityError=$all_name->ram_capacity.'&nbsp;'.$error->cant_empty;
		 }
		 else{
		 
		      $sql="SELECT * FROM   pc_ram_capacity_name_tb  WHERE 	ram_capacity='$ram_capacity'";
			if ($result=mysql_query($sql))
			  {
			  $rowcount=mysql_num_rows($result);
			if($rowcount==1)
			{
				$ram_capacityError=$all_name->ram_capacity.'&nbsp;'.$ram_capacity.'&nbsp;'.$error->dupplicate;
			}
			else{
				$seting->add_ram_capacity($ram_capacity);			
			    $ram_capacityError=$all_name->ram_capacity.'&nbsp;'.$ram_capacity.'&nbsp;'.$error->sucess;
				}
			  mysql_free_result($result);
			  }
			 }
	 } 
	  
  ?>
<div align="center" id="titels"><?php echo $all_name->ram_capacity ?></div>
<form action="" method="post">
  <table align="center" width="50%" style="margin-top:5px">
    <tr style="margin-top:5px">
      <td width="21%"><?php echo $all_name->ram_capacity ?></td>
      <td width="62%"><input type="text" value="" name="ram_capacity"  width="400px"/></td>
      <td width="17%"><input type="submit" value="Submit" id="submit_buttoun"/></td>
    </tr>
  </table>
</form>
<div id="error">
  <?php if(!empty($ram_capacityError)){echo $ram_capacityError;}?>
</div>
<hr />
<?php 

$seting->celect_all_ram_capacity() ;              
   }
   ?>
<?php 

/////////  owner_name
 if (isset($_GET[$all_name->main_parameters_sub_15])) {	
 


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {	 
	 if(empty($owner_name)){
		 $owner_nameError=$all_name->owner_name.'&nbsp;'.$error->cant_empty;
		 }
		 else{
		 
		      $sql="SELECT * FROM   pc_owner_name_tb  WHERE 	owner_name='$owner_name'";
			if ($result=mysql_query($sql))
			  {
			  $rowcount=mysql_num_rows($result);
			if($rowcount==1)
			{
				$owner_nameError=$all_name->owner_name.'&nbsp;'.$owner_name.'&nbsp;'.$error->dupplicate;
			}
			else{
				$seting->add_owner_name($owner_name);			
			    $owner_nameError=$all_name->owner_name.'&nbsp;'.$owner_name.'&nbsp;'.$error->sucess;
				}
			  mysql_free_result($result);
			  }
			 }
	 } 
	  
  ?>
<div align="center" id="titels"><?php echo $all_name->owner_name ?></div>
<form action="" method="post">
  <table align="center" width="50%" style="margin-top:5px">
    <tr style="margin-top:5px">
      <td width="21%"><?php echo $all_name->owner_name ?></td>
      <td width="62%"><input type="text" value="" name="owner_name"  width="400px"/></td>
      <td width="17%"><input type="submit" value="Submit" id="submit_buttoun"/></td>
    </tr>
  </table>
</form>
<div id="error">
  <?php if(!empty($owner_nameError)){echo $owner_nameError;}?>
</div>
<hr />
<?php 

$seting->celect_all_owner_name() ;              
   }
   ?>
<?php 

/////////  supplier_name
 if (isset($_GET[$all_name->main_parameters_sub_16])) {	
 


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {	 
	 if(empty($supplier_name)){
		 $supplier_nameError=$all_name->supplier_name.'&nbsp;'.$error->cant_empty;
		 }
		 else{
		 
		      $sql="SELECT * FROM   pc_supplier_name_tb  WHERE 	supplier_name='$supplier_name'";
			if ($result=mysql_query($sql))
			  {
			  $rowcount=mysql_num_rows($result);
			if($rowcount==1)
			{
				$supplier_nameError=$all_name->supplier_name.'&nbsp;'.$supplier_name.'&nbsp;'.$error->dupplicate;
			}
			else{
				$seting->add_supplier_name($supplier_name);			
			    $supplier_nameError=$all_name->supplier_name.'&nbsp;'.$supplier_name.'&nbsp;'.$error->sucess;
				}
			  mysql_free_result($result);
			  }
			 }
	 } 
	  
  ?>
<div align="center" id="titels"><?php echo $all_name->supplier_name ?></div>
<form action="" method="post">
  <table align="center" width="50%" style="margin-top:5px">
    <tr style="margin-top:5px">
      <td width="21%"><?php echo $all_name->supplier_name ?></td>
      <td width="62%"><input type="text" value="" name="supplier_name"  width="400px"/></td>
      <td width="17%"><input type="submit" value="Submit" id="submit_buttoun"/></td>
    </tr>
  </table>
</form>
<div id="error">
  <?php if(!empty($supplier_nameError)){echo $supplier_nameError;}?>
</div>
<hr />
<?php 

$seting->celect_all_supplier_name() ;              
   }
   ?>
<?php 

/////////  currency_type
 if (isset($_GET[$all_name->main_parameters_sub_17])) {	
 


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {	 
	 if(empty($currency_type)){
		 $currency_typeError=$all_name->currency_type.'&nbsp;'.$error->cant_empty;
		 }
		 else{
		 
		      $sql="SELECT * FROM   pc_currency_type_tb  WHERE 	currency_type='$currency_type'";
			if ($result=mysql_query($sql))
			  {
			  $rowcount=mysql_num_rows($result);
			if($rowcount==1)
			{
				$currency_typeError=$all_name->currency_type.'&nbsp;'.$currency_type.'&nbsp;'.$error->dupplicate;
			}
			else{
				$seting->add_currency_type($currency_type);			
			    $currency_typeError=$all_name->currency_type.'&nbsp;'.$currency_type.'&nbsp;'.$error->sucess;
				}
			  mysql_free_result($result);
			  }
			 }
	 } 
	  
  ?>
<div align="center" id="titels"><?php echo $all_name->currency_type ?></div>
<form action="" method="post">
  <table align="center" width="50%" style="margin-top:5px">
    <tr style="margin-top:5px">
      <td width="21%"><?php echo $all_name->currency_type ?></td>
      <td width="62%"><input type="text" value="" name="currency_type"  width="400px"/></td>
      <td width="17%"><input type="submit" value="Submit" id="submit_buttoun"/></td>
    </tr>
  </table>
</form>
<div id="error">
  <?php if(!empty($currency_typeError)){echo $currency_typeError;}?>
</div>
<hr />
<?php 

$seting->celect_all_currency_type() ;              
   }
   ?>
<?php 
 /////////  cpu_speed
 if (isset($_GET[$all_name->main_parameters_sub_18])) {	
 


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {	 
	 if(empty($cpu_speed)){
		 $cpu_speedError=$all_name->cpu_speed.'&nbsp;'.$error->cant_empty;
		 }
		 else{
		 
		      $sql="SELECT * FROM   pc_cpu_speed_tb  WHERE 	cpu_speed='$cpu_speed'";
			if ($result=mysql_query($sql))
			  {
			  $rowcount=mysql_num_rows($result);
			if($rowcount==1)
			{
				$cpu_speedError=$all_name->cpu_speed.'&nbsp;'.$cpu_speed.'&nbsp;'.$error->dupplicate;
			}
			else{
				$seting->add_cpu_speed($cpu_speed);			
			    $cpu_speedError=$all_name->cpu_speed.'&nbsp;'.$cpu_speed.'&nbsp;'.$error->sucess;
				}
			  mysql_free_result($result);
			  }
			 }
	 } 
	  
  ?>
<div align="center" id="titels"><?php echo $all_name->cpu_speed ?></div>
<form action="" method="post">
  <table align="center" width="50%" style="margin-top:5px">
    <tr style="margin-top:5px">
      <td width="21%"><?php echo $all_name->cpu_speed ?></td>
      <td width="62%"><input type="text" value="" name="cpu_speed"  width="400px"/></td>
      <td width="17%"><input type="submit" value="Submit" id="submit_buttoun"/></td>
    </tr>
  </table>
</form>
<div id="error">
  <?php if(!empty($cpu_speedError)){echo $cpu_speedError;}?>
</div>
<hr />
<?php 

$seting->celect_all_cpu_speed() ;              
   }
   ?>
<?php 
 /////////  cpu_gen
 if (isset($_GET[$all_name->main_parameters_sub_19])) {	
 


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {	 
	 if(empty($cpu_gen)){
		 $cpu_genError=$all_name->cpu_gen.'&nbsp;'.$error->cant_empty;
		 }
		 else{
		 
		      $sql="SELECT * FROM   pc_cpu_gen_tb  WHERE 	cpu_gen='$cpu_gen'";
			if ($result=mysql_query($sql))
			  {
			  $rowcount=mysql_num_rows($result);
			if($rowcount==1)
			{
				$cpu_genError=$all_name->cpu_gen.'&nbsp;'.$cpu_gen.'&nbsp;'.$error->dupplicate;
			}
			else{
				$seting->add_cpu_gen($cpu_gen);			
			    $cpu_genError=$all_name->cpu_gen.'&nbsp;'.$cpu_gen.'&nbsp;'.$error->sucess;
				}
			  mysql_free_result($result);
			  }
			 }
	 } 
	  
  ?>
<div align="center" id="titels"><?php echo $all_name->cpu_gen ?></div>
<form action="" method="post">
  <table align="center" width="50%" style="margin-top:5px">
    <tr style="margin-top:5px">
      <td width="21%"><?php echo $all_name->cpu_gen ?></td>
      <td width="62%"><input type="text" value="" name="cpu_gen"  width="400px"/></td>
      <td width="17%"><input type="submit" value="Submit" id="submit_buttoun"/></td>
    </tr>
  </table>
</form>
<div id="error">
  <?php if(!empty($cpu_genError)){echo $cpu_genError;}?>
</div>
<hr />
<?php 

$seting->celect_all_cpu_gen() ;              
   }
   ?>
<?php 
 /////////  ip_addres
 if (isset($_GET[$all_name->main_menu_2_sub])) {	
 


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {	
 
 	

 
	 if(empty($ip_addres)){
		 $ip_addresError=$all_name->ip_addres.'&nbsp;'.$error->cant_empty;
		 }
		 else{
			  if (filter_var($ip_addres, FILTER_VALIDATE_IP)) {  		 
		      $sql="SELECT * FROM   pc_ip_addres_tb  WHERE 	ip_addres='$ip_addres'";
			if ($result=mysql_query($sql))
			  {
			  $rowcount=mysql_num_rows($result);
			if($rowcount==1)
			{
				$ip_addresError=$all_name->ip_addres.'&nbsp;'.$ip_addres.'&nbsp;'.$error->dupplicate;
			}
			else{
				$seting->add_ip_addres($ip_addres);			
			    $ip_addresError=$all_name->ip_addres.'&nbsp;'.$ip_addres.'&nbsp;'.$error->sucess;
				}
			  mysql_free_result($result);
			  }
			 }
			 else{
				$ip_addresError='Not a valid IP address';
				 }
			 } 
			 
	 } 
	  
  ?>
<div align="center" id="titels"><?php echo $all_name->ip_addres ?></div>
<form action="" method="post">
  <table align="center" width="35%" style="margin-top:5px" >
    <tr style="margin-top:5px">
      <td width="21%"><?php echo $all_name->main_menu_2_sub ?></td>
      <td width="62%"><input type="text" value="<?php if(!empty($ip_addres)){echo $ip_addres;}?>" name="ip_addres"  width="400px"/></td>
      <td width="17%"><input type="submit" value="Submit" id="submit_buttoun"/></td>
    </tr>
  </table>
</form>
<div id="error">
  <?php if(!empty($ip_addresError)){echo $ip_addresError;}?>
</div>
<hr />
<?php 

$seting->celect_all_ip_addres() ;              
   }
   ?>
<?php 

if (isset($_GET['ipedit'])) { 
$id=base64_decode($_GET['ipedit']);
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$seting->update_ip_addres($ip_addres_internet,$ip_addres_status,$ip_addres_note,$id);

$ip_addresError=$error->sucess;
 }
 	
$sql = "SELECT id,ip_addres,ip_addres_internet,ip_addres_status,ip_addres_note FROM pc_ip_addres_tb WHERE id=".$id;
$result = mysql_query($sql);
$row=mysql_fetch_array($result);
?>
<form action="" method="post">
<table width="60%">
  <tr>
    <td><?php echo $all_name->ip;?></td>
    <td><?php echo $row['ip_addres'];?></td>
  </tr>
  
  <tr>
    <td><?php echo $all_name->ip_internet;?></td>
    <td> <input type="checkbox"  value="1"  name="ip_addres_internet" <?php if(!empty($row['ip_addres_internet'])){ echo "checked='checked'";}?></td>
  </tr>
  
  <tr>
    <td><?php echo $all_name->ip_status;?></td>
    <td> <input type="checkbox"  value="1" name="ip_addres_status"  <?php if(!empty($row['ip_addres_status'])){ echo "checked='checked'";}?></td>
  </tr>
  
  <tr>
    <td><?php echo $all_name->not;?></td>
    <td> <textarea name="ip_addres_note" rows="3" cols="30" ><?php echo $row['ip_addres_note'];?></textarea> </td>
  </tr>
  
  
<tr>
    <td></td>
    <td> <input type="submit" value="Update" /> </td>
  </tr>

<tr><td colspan="2"><div id="error"> <?php if(!empty($ip_addresError)){echo $ip_addresError;}?> <a href="?<?php echo $all_name->main_menu_2_sub;?>"> Go Back</div> </td></tr>
</table>
</form>
<?php }?>
</body>
</html>