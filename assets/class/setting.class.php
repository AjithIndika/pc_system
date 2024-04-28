<?php 
include_once('class.link.php');

class setting extends titels{
	
	var $building_name;
	
	//// new bilding 
	public function add_bulding($building_name){		
			 $sql = "INSERT INTO pc_building_name_tb (building_name)VALUES ('$building_name')";
		     $result=mysql_query($sql);
			 
		}
		
		//// bilding list ////
		
	public function celect_all_bulding(){		
	$count=1;
	$sql = "SELECT id,building_name FROM pc_building_name_tb  ORDER BY building_name ASC ";	
	$result = mysql_query($sql);
	$num_rows = mysql_num_rows($result);
    if ($num_rows > 0) {
			   echo '	<table width="50%" border="1" cellpadding="0" cellspacing="0" align="center">
			  <tr>
				<td width="8%" align="center">'.$this->number.'</td>
				<td width="82%" align="center">'.$this->bildingname.'</td>';
		if(!empty($_SESSION["delet"])){ echo '<td width="10%" align="center">'.$this->delet.'</td>';}
			 echo ' </tr> ';
			while($row=mysql_fetch_array($result)) { 
			?>

<tr>
  <td  align="center"><?php echo $count++?></td>
  <td width="82%" align="left"><?php echo $row['building_name'];?></td>
  <?php if(!empty($_SESSION["delet"])){ ?>
  <td align="center"><a href="assets/class/delet.class.php?delet1=<?php echo base64_encode($row['id'])?>" onclick="return confirm('Are you sure Delet ?');"> <span class="glyphicon glyphicon-trash"></span> </a></td>
  <?php }?>
</tr>
<?php  }
			  echo '</table>';
			}
			 else {
				echo $this->no_results;
			}

		}
		
/// delet bilding /////////

public function delet_bilding($id){	
	$sql = "DELETE FROM pc_building_name_tb WHERE id='$id'";
					if (mysql_query($sql) === TRUE) {
					  
					} 
                }
				
				
/////////// using  name

//// using  name 
	public function add_using($pc_using){		
			 $sql = "INSERT INTO pc_using_tb (pc_using)VALUES ('$pc_using')";
			 mysql_query($sql);
		}
		
	
		
	public function celect_all_using(){		
	$count=1;
	$sql = "SELECT id,pc_using FROM pc_using_tb ORDER BY pc_using ASC ";
	$result = mysql_query($sql);
	$num_rows = mysql_num_rows($result);

			if ($num_rows > 0) {
			   echo '	<table width="50%" border="1" cellpadding="0" cellspacing="0" align="center">
			  <tr>
				<td width="8%" align="center">'.$this->number.'</td>
				<td width="82%" align="center">'.$this->os_name.'</td>';
			if(!empty($_SESSION["delet"])){ echo '<td width="10%" align="center">'.$this->delet.'</td>';}
			echo ' </tr> ';
			 while($row=mysql_fetch_array($result)) { ?>
<tr>
  <td  align="center"><?php echo $count++?></td>
  <td width="82%" align="left"><?php echo $row['pc_using'];?></td>
  <?php if(!empty($_SESSION["delet"])){ ?>
  <td align="center"><a href="assets/class/delet.class.php?delet2=<?php echo base64_encode($row['id'])?>" onclick="return confirm('Are you sure Delet ?');"> <span class="glyphicon glyphicon-trash"></span> </a></td>
  <?php }?>
</tr>
<?php  }
			  echo '</table>';
			} else {
				echo $this->no_results;
			}

		}
		


public function delet_using($id){
	
	$sql = "DELETE FROM pc_using_tb WHERE id='$id'";
					if (mysql_query($sql) === TRUE) {
					  
					} 
	  
	
	                      }
						  


//// using  name 
	public function add_department($department_name){		
			 $sql = "INSERT INTO pc_department_name_tb (department_name)VALUES('$department_name')";
			 mysql_query($sql);
		}
		
	public function celect_all_department(){		
	$count=1;
	$sql = "SELECT id,department_name FROM pc_department_name_tb ORDER BY department_name ASC";
	$result = mysql_query($sql);
    $num_rows = mysql_num_rows($result);
			if ($num_rows  > 0) {
			   echo '	<table width="50%" border="1" cellpadding="0" cellspacing="0" align="center">
			  <tr>
				<td width="8%" align="center">'.$this->number.'</td>
				<td width="82%" align="center">'.$this->departmentname.'</td>';
		if(!empty($_SESSION["delet"])){ echo '<td width="10%" align="center">'.$this->delet.'</td>';}
			 echo' </tr> ';
			 while($row=mysql_fetch_array($result)) { ?>
<tr>
  <td  align="center"><?php echo $count++?></td>
  <td width="82%" align="left"><?php echo $row['department_name'];?></td>
  <?php if(!empty($_SESSION["delet"])){  ?>
  <td align="center"><a href="assets/class/delet.class.php?delet3=<?php echo base64_encode($row['id'])?>" onclick="return confirm('Are you sure Delet ?');"> <span class="glyphicon glyphicon-trash"></span> </a></td>
  <?php }?>
</tr>
<?php  }
			  echo '</table>';
			} else {
				echo $this->no_results;
			}

		}
		
public function delet_department($id){
	
	$sql = "DELETE FROM pc_department_name_tb WHERE id='$id'";
					if (mysql_query($sql) === TRUE) {
					  
					} 
	                        }
							
							
							
							
							
//// section  name 
	public function add_section($section_name){		
			 $sql = "INSERT INTO pc_section_name_tb (section_name)VALUES('$section_name')";
			 mysql_query($sql);
		}
		
	public function celect_all_section(){		
	$count=1;
	$sql = "SELECT id,section_name FROM pc_section_name_tb ORDER BY section_name ASC";
	$result = mysql_query($sql);
	 $num_rows = mysql_num_rows($result);

			if ($num_rows > 0) {
			   echo '	<table width="50%" border="1" cellpadding="0" cellspacing="0" align="center">
			  <tr>
				<td width="8%" align="center">'.$this->number.'</td>
				<td width="82%" align="center">'.$this->sectionname.'</td>';
			if(!empty($_SESSION["delet"])){ echo '<td width="10%" align="center">'.$this->delet.'</td>';}
			 echo ' </tr> ';
			 while($row=mysql_fetch_array($result)) { ?>
<tr>
  <td  align="center"><?php echo $count++?></td>
  <td width="82%" align="left"><?php echo $row['section_name'];?></td>
  <?php if(!empty($_SESSION["delet"])){  ?>
  <td align="center"><a href="assets/class/delet.class.php?delet4=<?php echo base64_encode($row['id'])?>" onclick="return confirm('Are you sure Delet ?');"> <span class="glyphicon glyphicon-trash"></span> </a></td>
  <?php }?>
</tr>
<?php  }
			  echo '</table>';
			} else {
				echo $this->no_results;
			}

		}
		


public function delet_section($id){
	
	$sql = "DELETE FROM pc_section_name_tb WHERE id='$id'";
					if (mysql_query($sql) === TRUE) {
					  
					} 
	                        }
							
							
							
/////////// equpment name 


public function add_equpment($equpment_name){		
			 $sql = "INSERT INTO pc_equpment_name_tb (equpment_name)VALUES('$equpment_name')";
			 mysql_query($sql);
		}
		
	public function celect_all_equpment(){		
	$count=1;
	$sql = "SELECT id,equpment_name FROM pc_equpment_name_tb ORDER BY equpment_name ASC";
	$result = mysql_query($sql);
	 $num_rows = mysql_num_rows($result);

			if ($num_rows> 0) {
			   echo '	<table width="50%" border="1" cellpadding="0" cellspacing="0" align="center">
			  <tr>
				<td width="8%" align="center">'.$this->number.'</td>
				<td width="82%" align="center">'.$this->equipmentname.'</td>';
		if(!empty($_SESSION["delet"])){ echo '<td width="10%" align="center">'.$this->delet.'</td>';}
			 echo ' </tr> ';
			 while($row=mysql_fetch_array($result)) { ?>
<tr>
  <td  align="center"><?php echo $count++?></td>
  <td width="82%" align="left"><?php echo $row['equpment_name'];?></td>
  <?php if(!empty($_SESSION["delet"])){ ?>
  <td align="center"><a href="assets/class/delet.class.php?delet5=<?php echo base64_encode($row['id'])?>" onclick="return confirm('Are you sure Delet ?');"> <span class="glyphicon glyphicon-trash"></span> </a></td>
  <?php }?>
</tr>
<?php  }
			  echo '</table>';
			} else {
				echo $this->no_results;
			}

		}
		


public function delet_equpment($id){
	
	$sql = "DELETE FROM pc_equpment_name_tb WHERE id='$id'";
					if (mysql_query($sql) === TRUE) {
					  
					} 
	                        }
	
	
	
///////////// manufact

	public function add_manufacturename($manufacture_name){		
			 $sql = "INSERT INTO pc_manufacturename_tb (manufacture_name)VALUES('$manufacture_name')";
			 mysql_query($sql);
		}
		
	public function celect_all_manufacturename(){		
	$count=1;
	$sql = "SELECT id,manufacture_name FROM pc_manufacturename_tb ORDER BY manufacture_name ASC";
	$result = mysql_query($sql);
	 $num_rows = mysql_num_rows($result);

			if ( $num_rows > 0) {
			   echo '	<table width="50%" border="1" cellpadding="0" cellspacing="0" align="center">
			  <tr>
				<td width="8%" align="center">'.$this->number.'</td>
				<td width="82%" align="center">'.$this->manufacturename.'</td>';
			if(!empty($_SESSION["delet"])){ echo'<td width="10%" align="center">'.$this->delet.'</td>';}
			 echo ' </tr> ';
			 while($row=mysql_fetch_array($result)) { ?>
<tr>
  <td  align="center"><?php echo $count++?></td>
  <td width="82%" align="left"><?php echo $row['manufacture_name'];?></td>
  <?php if(!empty($_SESSION["delet"])){ ?>
  <td align="center"><a href="assets/class/delet.class.php?delet6=<?php echo base64_encode($row['id'])?>" onclick="return confirm('Are you sure Delet ?');"> <span class="glyphicon glyphicon-trash"></span> </a></td>
  <?php }?>
</tr>
<?php  }
			  echo '</table>';
			} else {
				echo $this->no_results;
			}

		}
		


public function delet_manufacturename($id){	
	$sql = "DELETE FROM pc_manufacturename_tb WHERE id='$id'";
					if (mysql_query($sql) === TRUE) {					  
					} }
					
					



///// model in

	public function add_model_name($manufacture_name,$model_name){		
			 $sql = "INSERT INTO pc_model_name_tb (manufacture_name,model_name)VALUES('$manufacture_name','$model_name')";
			 mysql_query($sql);
		}
		
	public function celect_all_model_name(){		
	$count=1;
	$sql = "SELECT id,manufacture_name,model_name FROM pc_model_name_tb ORDER BY manufacture_name ASC";
	$result = mysql_query($sql);
	$num_rows = mysql_num_rows($result);

			if ( $num_rows  > 0) {
			   echo '	<table width="50%" border="1" cellpadding="0" cellspacing="0" align="center">
			  <tr>
				<td width="8%" align="center">'.$this->number.'</td>
				<td width="30%" align="center">'.$this->manufacturename.'</td>
                <td width="82%" align="center">'.$this->modelname.'</td>';
			if(!empty($_SESSION["delet"])){ echo'<td width="10%" align="center">'.$this->delet.'</td>';}
			 echo ' </tr> ';
			 while($row=mysql_fetch_array($result)) { ?>
<tr>
  <td  align="center"><?php echo $count++?></td>
  <td  align="left"><?php echo $row['manufacture_name'];?></td>
  <td align="left"><?php echo $row['model_name'];?></td>
  <?php if(!empty($_SESSION["delet"])){  ?>
  <td align="center"><a href="assets/class/delet.class.php?delet7=<?php echo base64_encode($row['id'])?>" onclick="return confirm('Are you sure Delet ?');"> <span class="glyphicon glyphicon-trash"></span> </a></td>
  <?php }?>
</tr>
<?php  }
			  echo '</table>';
			} else {
				echo $this->no_results;
			}

		}
		


public function delet_model_name($id){	
	$sql = "DELETE FROM pc_model_name_tb WHERE id='$id'";
					if (mysql_query($sql) === TRUE) {					  
					} }


////////////// os name



	public function add_os($os_name){		
			 $sql = "INSERT INTO pc_os_name_tb (os_name)VALUES ('$os_name')";
			 mysql_query($sql);
		}
		
	
		
	public function celect_all_os(){		
	$count=1;
	$sql = "SELECT id,os_name FROM pc_os_name_tb ORDER BY os_name ASC";
	$result = mysql_query($sql);
	$num_rows = mysql_num_rows($result);

			if ($num_rows > 0) {
			   echo '	<table width="50%" border="1" cellpadding="0" cellspacing="0" align="center">
			  <tr>
				<td width="8%" align="center">'.$this->number.'</td>
				<td width="82%" align="center">'.$this->os_name.'</td>';
				if(!empty($_SESSION["delet"])){ echo '<td width="10%" align="center">'.$this->delet.'</td>';}
			  echo '</tr> ';
			 while($row=mysql_fetch_array($result)) { ?>
<tr>
  <td  align="center"><?php echo $count++?></td>
  <td width="82%" align="left"><?php echo $row['os_name'];?></td>
  <?php if(!empty($_SESSION["delet"])){  ?>
  <td align="center"><a href="assets/class/delet.class.php?delet8=<?php echo base64_encode($row['id'])?>" onclick="return confirm('Are you sure Delet ?');"> <span class="glyphicon glyphicon-trash"></span> </a></td>
  <?php } ?>
</tr>
<?php  }
			  echo '</table>';
			} else {
				echo $this->no_results;
			}

		}
		


public function delet_os($id){
	
	$sql = "DELETE FROM pc_os_name_tb WHERE id='$id'";
					if (mysql_query($sql) === TRUE) {
					  
					} 
	  
	
	                      }
						  				



////////////// office name



	public function add_office($office_name){		
			 $sql = "INSERT INTO  pc_office_name_tb(office_name)VALUES ('$office_name')";
			 mysql_query($sql);
		}
		

	public function celect_all_office(){		
	$count=1;
	$sql = "SELECT id,office_name FROM  pc_office_name_tb ORDER BY office_name ASC";
	$result = mysql_query($sql);
	$num_rows = mysql_num_rows($result);

			if ($num_rows > 0) {
			   echo '	<table width="50%" border="1" cellpadding="0" cellspacing="0" align="center">
			  <tr>
				<td width="8%" align="center">'.$this->number.'</td>
				<td width="82%" align="center">'.$this->office_name.'</td>';
			if(!empty($_SESSION["delet"])){ echo '<td width="10%" align="center">'.$this->delet.'</td>';}
			 echo ' </tr> ';
			 while($row=mysql_fetch_array($result)) { ?>
<tr>
  <td  align="center"><?php echo $count++?></td>
  <td width="82%" align="left"><?php echo $row['office_name'];?></td>
  <?php if(!empty($_SESSION["delet"])){ ?>
  <td align="center"><a href="assets/class/delet.class.php?delet9=<?php echo base64_encode($row['id'])?>" onclick="return confirm('Are you sure Delet ?');"> <span class="glyphicon glyphicon-trash"></span> </a></td>
  <?php }?>
</tr>
<?php  }
			  echo '</table>';
			} else {
				echo $this->no_results;
			}

		}
		
public function delet_office($id){
	
	$sql = "DELETE FROM pc_office_name_tb WHERE id='$id'";
					if (mysql_query($sql) === TRUE) {
					  
					} 
	  
	                      }
						  


						  
						  
////////////// cuntry name




public function add_country($country_name){		
			 $sql = "INSERT INTO   pc_country_name_tb(country_name)VALUES ('$country_name')";
			 mysql_query($sql);
		}
		

	public function celect_all_country(){		
	$count=1;
	$sql = "SELECT id,country_name FROM  pc_country_name_tb ORDER BY country_name ASC";
	$result = mysql_query($sql);
	$num_rows = mysql_num_rows($result);

			if ($num_rows> 0) {
			   echo '	<table width="50%" border="1" cellpadding="0" cellspacing="0" align="center">
			  <tr>
				<td width="8%" align="center">'.$this->number.'</td>
				<td width="82%" align="center">'.$this->cuntry_name.'</td>';
				if(!empty($_SESSION["delet"])){ echo '<td width="10%" align="center">'.$this->delet.'</td>';}
			  echo '</tr> ';
			 while($row=mysql_fetch_array($result)) { ?>
<tr>
  <td  align="center"><?php echo $count++?></td>
  <td width="82%" align="left"><?php echo $row['country_name'];?></td>
  <?php if(!empty($_SESSION["delet"])){ ?>
  <td align="center"><a href="assets/class/delet.class.php?delet10=<?php echo base64_encode($row['id'])?>" onclick="return confirm('Are you sure Delet ?');"> <span class="glyphicon glyphicon-trash"></span> </a></td>
  <?php }?>
</tr>
<?php  }
			  echo '</table>';
			} else {
				echo $this->no_results;
			}

		}
		
public function delet_country($id){
	
	$sql = "DELETE FROM pc_country_name_tb WHERE id='$id'";
					if (mysql_query($sql) === TRUE) {
					  
					} 
	  
	                      }
						  


////////////// status_person
public function add_responsible($responsible_name){		
			 $sql = "INSERT INTO   pc_responsible_name_tb(responsible_name)VALUES ('$responsible_name')";
			 mysql_query($sql);
		}
		

	public function celect_all_responsible(){		
	$count=1;
	$sql = "SELECT id,responsible_name FROM pc_responsible_name_tb ORDER BY responsible_name ASC";
	$result = mysql_query($sql);
	$num_rows = mysql_num_rows($result);

			if ($num_rows > 0) {
			   echo '	<table width="50%" border="1" cellpadding="0" cellspacing="0" align="center">
			  <tr>
				<td width="8%" align="center">'.$this->number.'</td>
				<td width="82%" align="center">'.$this->responsible_name.'</td>';
				if(!empty($_SESSION["delet"])){  echo '<td width="10%" align="center">'.$this->delet.'</td>';}
			 echo ' </tr> ';
			 while($row=mysql_fetch_array($result)) { ?>
<tr>
  <td  align="center"><?php echo $count++?></td>
  <td width="82%" align="left"><?php echo $row['responsible_name'];?></td>
  <?php if(!empty($_SESSION["delet"])){ ?>
  <td align="center"><a href="assets/class/delet.class.php?delet11=<?php echo base64_encode($row['id'])?>" onclick="return confirm('Are you sure Delet ?');"> <span class="glyphicon glyphicon-trash"></span> </a></td>
  <?php }?>
</tr>
<?php  }
			  echo '</table>';
			} else {
				echo $this->no_results;
			}

		}
		
public function delet_responsible($id){
	
	$sql = "DELETE FROM pc_responsible_name_tb WHERE id='$id'";
					if (mysql_query($sql) === TRUE) {
					  
					} 
	  
	                      }
						  
						  
						  
						  						
	
	
							  
////////////// status_person
public function add_status($status_name){		
			 $sql = "INSERT INTO   pc_status_name_tb(status_name)VALUES ('$status_name')";
			 mysql_query($sql);
		}
		

	public function celect_all_status(){		
	$count=1;
	$sql = "SELECT id,status_name FROM pc_status_name_tb ORDER BY status_name ASC";
	$result = mysql_query($sql);
    $num_rows = mysql_num_rows($result);
			if ($num_rows > 0) {
			   echo '	<table width="50%" border="1" cellpadding="0" cellspacing="0" align="center">
			  <tr>
				<td width="8%" align="center">'.$this->number.'</td>
				<td width="82%" align="center">'.$this->responsible_name.'</td>';
				if(!empty($_SESSION["delet"])){  echo '<td width="10%" align="center">'.$this->delet.'</td>';}
			  echo '</tr> ';
			 while($row=mysql_fetch_array($result)) { ?>
<tr>
  <td  align="center"><?php echo $count++?></td>
  <td width="82%" align="left"><?php echo $row['status_name'];?></td>
  <?php if(!empty($_SESSION["delet"])){  ?>
  <td align="center"><a href="assets/class/delet.class.php?delet12=<?php echo base64_encode($row['id'])?>" onclick="return confirm('Are you sure Delet ?');"> <span class="glyphicon glyphicon-trash"></span> </a></td>
  <?php }?>
</tr>
<?php  }
			  echo '</table>';
			} else {
				echo $this->no_results;
			}

		}
		
public function delet_status($id){
	
	$sql = "DELETE FROM pc_status_name_tb WHERE id='$id'";
					if (mysql_query($sql) === TRUE) {
					  
					} 
	  
	                      }
						  
						  
////////////// hd capacity
public function add_hd_capacity($hd_capacity){		
			 $sql = "INSERT INTO   pc_hd_capacity_name_tb(hd_capacity)VALUES ('$hd_capacity')";
			 mysql_query($sql);
		}
		

	public function celect_all_hd_capacity(){		
	$count=1;
	$sql = "SELECT id,hd_capacity FROM pc_hd_capacity_name_tb ORDER BY hd_capacity ASC";
	$result = mysql_query($sql);
	$num_rows = mysql_num_rows($result);

			if ($num_rows > 0) {
			   echo '	<table width="50%" border="1" cellpadding="0" cellspacing="0" align="center">
			  <tr>
				<td width="8%" align="center">'.$this->number.'</td>
				<td width="82%" align="center">'.$this->hd_capacity.'</td>';
				if(!empty($_SESSION["delet"])){ echo '<td width="10%" align="center">'.$this->delet.'</td>'; }
			  echo '</tr> ';
			 while($row=mysql_fetch_array($result)) { ?>
<tr>
  <td  align="center"><?php echo $count++?></td>
  <td width="82%" align="left"><?php echo $row['hd_capacity'];?></td>
  <?php if(!empty($_SESSION["delet"])){ ?>
  <td align="center"><a href="assets/class/delet.class.php?delet13=<?php echo base64_encode($row['id'])?>" onclick="return confirm('Are you sure Delet ?');"> <span class="glyphicon glyphicon-trash"></span> </a></td>
  <?php }?>
</tr>
<?php  }
			  echo '</table>';
			} else {
				echo $this->no_results;
			}

		}
		
public function delet_hd_capacity($id){
	
	$sql = "DELETE FROM pc_hd_capacity_name_tb WHERE id='$id'";
					if (mysql_query($sql) === TRUE) {
					  
					} 
	  
	                      }
						  
						  

////////////// hd capacity
public function add_ram_capacity($ram_capacity){		
			 $sql = "INSERT INTO   pc_ram_capacity_name_tb(ram_capacity)VALUES ('$ram_capacity')";
			 mysql_query($sql);
		}
		

	public function celect_all_ram_capacity(){		
	$count=1;
	$sql = "SELECT id,ram_capacity FROM pc_ram_capacity_name_tb ORDER BY ram_capacity ASC";
	$result = mysql_query($sql);
	$num_rows = mysql_num_rows($result);

			if ($num_rows > 0) {
			   echo '	<table width="50%" border="1" cellpadding="0" cellspacing="0" align="center">
			  <tr>
				<td width="8%" align="center">'.$this->number.'</td>
				<td width="82%" align="center">'.$this->ram_capacity.'</td>';
				if(!empty($_SESSION["delet"])){ echo '<td width="10%" align="center">'.$this->delet.'</td>';}
			  echo '</tr> ';
			 while($row=mysql_fetch_array($result)) { ?>
<tr>
  <td  align="center"><?php echo $count++?></td>
  <td width="82%" align="left"><?php echo $row['ram_capacity'];?></td>
  <?php if(!empty($_SESSION["delet"])){  ?>
  <td align="center"><a href="assets/class/delet.class.php?delet14=<?php echo base64_encode($row['id'])?>" onclick="return confirm('Are you sure Delet ?');"> <span class="glyphicon glyphicon-trash"></span> </a></td>
  <?php }?>
</tr>
<?php  }
			  echo '</table>';
			} else {
				echo $this->no_results;
			}

		}
		
public function delet_ram_capacity($id){
	
	$sql = "DELETE FROM pc_ram_capacity_name_tb WHERE id='$id'";
					if (mysql_query($sql) === TRUE) {
					  
					} 
	  
	                      }					  



////////////// Owner
public function add_owner_name($owner_name){		
			 $sql = "INSERT INTO   pc_owner_name_tb(owner_name)VALUES ('$owner_name')";
			 mysql_query($sql);
		}
		

	public function celect_all_owner_name(){		
	$count=1;
	$sql = "SELECT id,owner_name FROM pc_owner_name_tb ORDER BY owner_name ASC";
	$result = mysql_query($sql);
	$num_rows = mysql_num_rows($result);

			if ($num_rows > 0) {
			   echo '	<table width="50%" border="1" cellpadding="0" cellspacing="0" align="center">
			  <tr>
				<td width="8%" align="center">'.$this->number.'</td>
				<td width="82%" align="center">'.$this->owner_name.'</td>';
				if(!empty($_SESSION["delet"])){ echo'<td width="10%" align="center">'.$this->delet.'</td>';}
			 echo' </tr> ';
			 while($row=mysql_fetch_array($result)) { ?>
<tr>
  <td  align="center"><?php echo $count++?></td>
  <td width="82%" align="left"><?php echo $row['owner_name'];?></td>
  <?php if(!empty($_SESSION["delet"])){  ?>
  <td align="center"><?php if($row['owner_name']=='KLA'){}else{?>
    <a href="assets/class/delet.class.php?delet15=<?php echo base64_encode($row['id'])?>" onclick="return confirm('Are you sure Delet ?');"> <span class="glyphicon glyphicon-trash"></span> </a>
    <?php }?></td>
  <?php }?>
</tr>
<?php  }
			  echo '</table>';
			} else {
				echo $this->no_results;
			}

		}
		
public function delet_owner_name($id){
	
	$sql = "DELETE FROM pc_owner_name_tb WHERE id='$id'";
					if (mysql_query($sql) === TRUE) {
					  
					} 
	  
	                      }	
						  
//////// suppayer name

public function add_supplier_name($supplier_name){		
			 $sql = "INSERT INTO   pc_supplier_name_tb(supplier_name)VALUES ('$supplier_name')";
			 mysql_query($sql);
		}
		

	public function celect_all_supplier_name(){		
	$count=1;
	$sql = "SELECT id,supplier_name FROM pc_supplier_name_tb ORDER BY supplier_name ASC";
	$result = mysql_query($sql);
	$num_rows = mysql_num_rows($result);

			if ($num_rows > 0) {
			   echo '	<table width="50%" border="1" cellpadding="0" cellspacing="0" align="center">
			  <tr>
				<td width="8%" align="center">'.$this->number.'</td>
				<td width="82%" align="center">'.$this->supplier_name.'</td>';
				if(!empty($_SESSION["delet"])){ echo '<td width="10%" align="center">'.$this->delet.'</td>'; }
			  echo'</tr> ';
			 while($row=mysql_fetch_array($result)) { ?>
<tr>
  <td  align="center"><?php echo $count++?></td>
  <td width="82%" align="left"><?php echo $row['supplier_name'];?></td>
  <?php if(!empty($_SESSION["delet"])){ ?>
  <td align="center"><a href="assets/class/delet.class.php?delet16=<?php echo base64_encode($row['id'])?>" onclick="return confirm('Are you sure Delet ?');"> <span class="glyphicon glyphicon-trash"></span> </a></td>
  <?php }?>
</tr>
<?php  }
			  echo '</table>';
			} else {
				echo $this->no_results;
			}

		}
		
public function delet_supplier_name($id){
	
	$sql = "DELETE FROM pc_supplier_name_tb WHERE id='$id'";
					if (mysql_query($sql) === TRUE) {
					  
					} 
	  
	                      }	
						  
						  
						  
						  
////////////// currency_type
public function add_currency_type($currency_type){		
			 $sql = "INSERT INTO   pc_currency_type_tb(currency_type)VALUES ('$currency_type')";
			 mysql_query($sql);
		}
		

	public function celect_all_currency_type(){		
	$count=1;
	$sql = "SELECT id,currency_type FROM pc_currency_type_tb ORDER BY currency_type ASC";
	$result = mysql_query($sql);
	$num_rows = mysql_num_rows($result);

			if ($num_rows > 0) {
			   echo '	<table width="50%" border="1" cellpadding="0" cellspacing="0" align="center">
			  <tr>
				<td width="8%" align="center">'.$this->number.'</td>
				<td width="82%" align="center">'.$this->currency_type.'</td>';
				if(!empty($_SESSION["delet"])){ echo'<td width="10%" align="center">'.$this->delet.'</td>'; }
			  echo'</tr> ';
			 while($row=mysql_fetch_array($result)) { ?>
<tr>
  <td  align="center"><?php echo $count++?></td>
  <td width="82%" align="left"><?php echo $row['currency_type'];?></td>
  <?php if(!empty($_SESSION["delet"])){  ?>
  <td align="center"><a href="assets/class/delet.class.php?delet17=<?php echo base64_encode($row['id'])?>" onclick="return confirm('Are you sure Delet ?');"> <span class="glyphicon glyphicon-trash"></span> </a></td>
  <?php } ?>
</tr>
<?php  }
			  echo '</table>';
			} else {
				echo $this->no_results;
			}

		}
		
public function delet_currency_type($id){
	
	$sql = "DELETE FROM pc_currency_type_tb WHERE id='$id'";
					if (mysql_query($sql) === TRUE) {
					  
					} 
	  
	                      }
						  


////////////// cpu_speed
public function add_cpu_speed($cpu_speed){		
			 $sql = "INSERT INTO   pc_cpu_speed_tb(cpu_speed)VALUES ('$cpu_speed')";
			 mysql_query($sql);
		}
		

	public function celect_all_cpu_speed(){		
	$count=1;
	$sql = "SELECT id,cpu_speed FROM pc_cpu_speed_tb ORDER BY cpu_speed ASC";
	$result = mysql_query($sql);
	$num_rows = mysql_num_rows($result);

			if ($num_rows > 0) {
			   echo '	<table width="50%" border="1" cellpadding="0" cellspacing="0" align="center">
			  <tr>
				<td width="8%" align="center">'.$this->number.'</td>
				<td width="82%" align="center">'.$this->cpu_speed.'</td>';
				 if(!empty($_SESSION["delet"])){ echo '<td width="10%" align="center">'.$this->delet.'</td>';}
			 echo ' </tr> ';
			 while($row=mysql_fetch_array($result)) { ?>
<tr>
  <td  align="center"><?php echo $count++?></td>
  <td width="82%" align="left"><?php echo $row['cpu_speed'];?></td>
  <?php  if(!empty($_SESSION["delet"])){ ?>
  <td align="center"><a href="assets/class/delet.class.php?delet18=<?php echo base64_encode($row['id'])?>" onclick="return confirm('Are you sure Delet ?');"> <span class="glyphicon glyphicon-trash"></span> </a></td>
  <?php }?>
</tr>
<?php  }
			  echo '</table>';
			} else {
				echo $this->no_results;
			}

		}
		
public function delet_cpu_speed($id){
	
	$sql = "DELETE FROM pc_cpu_speed_tb WHERE id='$id'";
					if (mysql_query($sql) === TRUE) {
					  
					} 
	  
	                      }	
						  


///////////// cpu_gen
public function add_cpu_gen($cpu_gen){		
			 $sql = "INSERT INTO   pc_cpu_gen_tb(cpu_gen)VALUES ('$cpu_gen')";
			 mysql_query($sql);
		}
		

	public function celect_all_cpu_gen(){		
	$count=1;
	$sql = "SELECT id,cpu_gen FROM pc_cpu_gen_tb ORDER BY cpu_gen ASC";
	$result = mysql_query($sql);
	$num_rows = mysql_num_rows($result);

			if ($num_rows > 0) {
			   echo '	<table width="50%" border="1" cellpadding="0" cellspacing="0" align="center">
			  <tr>
				<td width="8%" align="center">'.$this->number.'</td>
				<td width="82%" align="center">'.$this->cpu_gen.'</td>';
				 if(!empty($_SESSION["delet"])){ echo ' <td width="10%" align="center">'.$this->delet.'</td>'; }
			  echo '</tr> ';
			 while($row=mysql_fetch_array($result)) { ?>
<tr>
  <td  align="center"><?php echo $count++?></td>
  <td width="82%" align="left"><?php echo $row['cpu_gen'];?></td>
  <?php if(!empty($_SESSION["delet"])){ ?>
  <td align="center"><a href="assets/class/delet.class.php?delet19=<?php echo base64_encode($row['id'])?>"
  onclick="return confirm('Are you sure Delet ?');"> <span class="glyphicon glyphicon-trash"></span> </a></td>
  <?php }?>
</tr>
<?php  }
			  echo '</table>';
			} else {
				echo $this->no_results;
			}

		}
		
public function delet_cpu_gen($id){
	
	$sql = "DELETE FROM pc_cpu_gen_tb WHERE id='$id'";
					if (mysql_query($sql) === TRUE) {
					  
					} 
	  
	                      }	



///////////// ip_addres
public function add_ip_addres($ip_addres){		
			 $sql = "INSERT INTO   pc_ip_addres_tb(ip_addres)VALUES ('$ip_addres')";
			 mysql_query($sql);
		}

public function update_ip_addres($ip_addres_internet,$ip_addres_status,$ip_addres_note,$id){
	
	$sql="UPDATE pc_ip_addres_tb SET 
	ip_addres_internet='$ip_addres_internet', 
	ip_addres_status='$ip_addres_status',
	ip_addres_note='$ip_addres_note' WHERE id='$id'";
    $result=mysql_query($sql);
	
	}
	
public function ip_reset($id){
	
	$sql="SELECT * FROM  pc_ip_addres_tb  WHERE  	id ='$id'";
    $result=mysql_query($sql);
    $rows=mysql_fetch_array($result);
	$ip_addres=$rows['ip_addres'];	
	
	$sql="UPDATE pc_ip_addres_tb SET 
	ip_addres_status='',
	ip_addres_note='' WHERE id='$id'";
    $result=mysql_query($sql);
	
			
	
	$sql="UPDATE pc_it_deails_tb SET 
	ip_addres='' WHERE  	ip_addres='$ip_addres'";
    $result=mysql_query($sql);
	
	
	
	}

		

	public function celect_all_ip_addres(){		
	$count=1;
	$sql = "SELECT id,ip_addres,ip_addres_internet,ip_addres_status,ip_addres_note  FROM pc_ip_addres_tb ORDER BY id ASC";
	$result = mysql_query($sql);
	$num_rows = mysql_num_rows($result);

			if ($num_rows > 0) {
			   echo '	<table width="80%" border="1" cellpadding="0" cellspacing="0" align="center">
			  <tr>
				<td width="8%" align="center">'.$this->number.'</td>
				<td width="20%" align="center">'.$this->ip.'</td>
				<td width="25%" align="center">'.$this->inequp.'</td>
				<td width="10%" align="center">'.$this->ip_internet.'</td>
				<td width="10%" align="center">'.$this->ip_status.'</td>
				<td width="10%" align="center">'.$this->resets.'</td>
				<td width="10%" align="center">'.$this->edit.'</td>';
				if(!empty($_SESSION["delet"])){echo '<td width="10%" align="center">'.$this->delet.'</td>'; }
				echo' </tr> ';
			 while($row=mysql_fetch_array($result)) { ?>
<tr>
  <td  align="center"><?php echo $count++?></td>
  <td  align="left"><?php echo $row['ip_addres'];?>
    <?php if(!empty($row['ip_addres_note'])){echo '<i class="fa fa-comments"></i>';}?></td>
  <td><?php $ip_addres=$row['ip_addres'];$this->select_equ_for_ip($ip_addres);?></td>
  <td  align="center">
  <?php  if(!empty($row['ip_addres_internet'])){echo '<i class="fa fa-check"></i>';} else{ echo '<i class="fa fa-times"></i>';}?>
  </td>
  <td  align="center">
  <?php   if(!empty($row['ip_addres_status'])){echo '<i class="fa fa-check"></i>';} else{ echo '<i class="fa fa-times"></i>';}?>
  </td>
  <td  align="center">
  <a href="assets/class/delet.class.php?ipreset=<?php echo base64_encode($row['id'])?>" onclick="return confirm('Are you sure Reset ?');">
  <i class="fa fa-refresh"></i>
  </td>
  <td align="center">
  <a href="?ipedit=<?php echo base64_encode($row['id'])?>"  onclick="return confirm('Are you sure Update ?');"> <i class="fa fa-wrench"></i>
  </a>
  </td>
  <?php if(!empty($_SESSION["delet"])){ ?>
  <td align="center">
  <a href="assets/class/delet.class.php?<?php echo $this->main_menu_2_sub?>=<?php echo base64_encode($row['id'])?>"
  onclick="return confirm('Are you sure Delet ?');"> <span class="glyphicon glyphicon-trash"></span> </a>
  </td>
  <?php }?>
</tr>
<?php  }
			  echo '</table>';
			} else {
				echo $this->no_results;
			}

		}
		

public function select_equ_for_ip($ip_addres){
	 $sql="SELECT * FROM pc_it_deails_tb WHERE ip_addres='$ip_addres' ";
     $result=mysql_query($sql);
     $rows=mysql_fetch_array($result);
	 $num_rows = mysql_num_rows($result);
			if ($num_rows > 0) {
	echo $rows['control_number'];
			}
			else {echo $this->ip_not_issu;}
	}
	

public function select_ip_for_internet($ip_addres){
	       $sql="SELECT * FROM pc_ip_addres_tb  WHERE ip_addres='$ip_addres'";
			$result=mysql_query($sql);
			$rows=mysql_fetch_array($result);			
			 if(!empty($rows['ip_addres_internet'])){  echo'<label>'.$this->check_icon.'</label>' ;} else{ echo '<label>'.$this->not_check_icon.'</label>'; }
	
	}
		
public function delet_ip_addres($id){
	
	$sql = "DELETE FROM pc_ip_addres_tb WHERE id='$id'";
					if (mysql_query($sql) === TRUE) {
					  
					} 
	  
	                      }			  	  							  	  					
	}



?>
