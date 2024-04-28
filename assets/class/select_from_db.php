<?php

include_once('class.link.php');

class select_from_db extends titels{
	
	var $equpment_name;
	var $department_name;
	var $owner_name;
	var $licen_type;
	var $equpment_type;
	var $manufacture_name;
	var $model_name;
	var $cpu_speed;
	var $cpu_gen;
	var $supplier_name;
	var $ram_capacity;
    var $ram_type;
	var $hd_capacity;
	var $hd_type;
	var $monitor_manufacture_name;
	var $model_name_monitor;
	var $pc_type;
	var $office_name;
	var $ip_addres;
	var $network_connct_type;
	var $country_name;
	var $building_name;
	var $section_name;
	var $responsible_name;
	var $pc_using;
	var $status_name;
	var $currency_type;
	var $os_type;
	
	
	
	public function equpment_name(){		
		$sql = "SELECT id,equpment_name FROM pc_equpment_name_tb  ORDER BY equpment_name ASC";
	    $result = mysql_query($sql);
	    $num_rows = mysql_num_rows($result);
			if ($num_rows > 0) {
				 echo '<select name="equpment_name">';				
				 if(!empty($this->equpment_name)){echo '<option>'.$this->equpment_name.'</option>';}
				 else{ echo '<option value="">'.$this->plz_select_one.'</option>';}
				  echo '<option value="">-</option>';				 
				 while($row=mysql_fetch_array($result)) {
					 echo '<option>'.$row['equpment_name'].'</option>';
					 }
			          }
				else {				
				echo $this->no_results;
							}
		        echo '</select>';		
		                      }

//// department name

public function department_name(){		
		      $sql = "SELECT id,department_name FROM pc_department_name_tb";
	          $result = mysql_query($sql);
	          $num_rows = mysql_num_rows($result);
			  if ($num_rows > 0) {
			  echo '<select name="department_name">';
			  if(!empty($this->department_name)){echo '<option>'.$this->department_name.'</option>';}
			  else{ echo '<option value="">'.$this->plz_select_one.'</option>';}
			  echo '<option value="">-</option>';				 
			  while($row=mysql_fetch_array($result)) {
			  echo '<option>'.$row['department_name'].'</option>';
					 }
			           }
			  else {				
			  echo $this->no_results;
							}
		      echo '</select>';		
		                      }
							  

//// department name

public function owner_name(){		
		$sql = "SELECT id,owner_name FROM pc_owner_name_tb";
	    $result = mysql_query($sql);
	    $num_rows = mysql_num_rows($result);
			 if ($num_rows > 0) {
			 echo '<select name="owner_name" >';
			 if(!empty($this->owner_name)){echo '<option>'.$this->owner_name.'</option>';}
			 else{ echo '<option value="">'.$this->plz_select_one.'</option>';}
			 echo '<option value="">-</option>';
			 while($row=mysql_fetch_array($result)) {
			 echo '<option>'.$row['owner_name'].'</option>';
					 }
			           }
			 else {				
			 echo $this->no_results;
							}
		     echo '</select>';		
		                      }
							  		

public function licen_type(){	
	  echo '<select name="os_type"">';
      if(!empty($this->os_type)){echo '<option>'.$this->os_type.'</option>';}
	  else{ echo '<option value="">'.$this->plz_select_one.'</option>';}
	  echo '<option value="">-</option>';
	  echo'<option>OPEN</option>
	       <option>OEM</option>
		   </select>';	
		}
	
	
	
////////// os_name

public function os_name(){		
		$sql = "SELECT id,os_name FROM  pc_os_name_tb   GROUP BY os_name ORDER BY os_name ASC";
	    $result = mysql_query($sql);
	    $num_rows = mysql_num_rows($result);
			     if ($num_rows > 0) {
				 echo '<select name="os_name" >';				
				 if(!empty($this->os_name)){echo '<option value="'.$this->os_name.'">'.$this->os_name.'</option>';}
				 else{ echo '<option  value="">'.$this->plz_select_one.'</option>';}	
				 echo '<option value="">-</option>';			 
				 while($row=mysql_fetch_array($result)) {
				 echo '<option>'.$row['os_name'].'</option>';
					 }
			           }
				 else {				
				 echo $this->no_results;
							}
		          echo '</select>';	
		                      }
	

////////// os_name

public function office_name(){		
		$sql = "SELECT id,office_name FROM  pc_office_name_tb   ORDER BY office_name ASC";
	    $result = mysql_query($sql);
	    $num_rows = mysql_num_rows($result);
			      if ($num_rows > 0) {
				  echo '<select name="office_name" >';				
				  if(!empty($this->office_name)){echo '<option value="'.$this->office_name.'">'.$this->office_name.'</option>';}
				  else{ echo '<option  value="">'.$this->plz_select_one.'</option>';}				 
				  while($row=mysql_fetch_array($result)) {
				  echo '<option>'.$row['office_name'].'</option>';
					 }
			           }
				   else {				
				   echo $this->no_results;
							}
		           echo '</select>';	
		              }
	
		
	
////// ram type
public function ram_type(){	
	    echo '<select name="ram_type"">';
        if(!empty($this->ram_type)){echo '<option>'.$this->ram_type.'</option>';}
		else{ echo '<option value="">'.$this->plz_select_one.'</option>';}
		echo '<option value="">-</option>';
		echo'
		<option>SDR</option>
		<option>DDR1</option>
		<option>DDR2</option>
		<option>DDR3</option>
		</select>';	
		}


/// ram capacity

public function ram_capacity(){		
		 $sql = "SELECT id,ram_capacity FROM pc_ram_capacity_name_tb";
	     $result = mysql_query($sql);
	     $num_rows = mysql_num_rows($result);
			    if ($num_rows > 0) {
				echo '<select name="ram_capacity">';
				if(!empty($this->ram_capacity)){echo '<option>'.$this->ram_capacity.'</option>';}
				else{ echo '<option value="">'.$this->plz_select_one.'</option>';}	
				echo '<option value="">-</option>';			 
				while($row=mysql_fetch_array($result)) {
				echo '<option>'.$row['ram_capacity'].'</option>';
					 }
			           }
				 else {				
				 echo $this->no_results;
							}
		         echo '</select>';		
		                      }
							  
							  
							  
public function equpment_type(){	
	     echo '<select name="equpment_type">';
         if(!empty($this->equpment_type)){echo '<option>'.$this->equpment_type.'</option>';}
		 else{ echo '<option value="">'.$this->plz_select_one.'</option>';}
		 echo '<option value="">-</option>';
		 echo'<option>Computer</option>
			  <option>Device</option>
			  </select>';	
                 }
	
	
////////// manufac

public function manufacture_name(){		
		$sql = "SELECT id,manufacture_name FROM pc_manufacturename_tb   GROUP BY manufacture_name ORDER BY manufacture_name ASC";
	    $result = mysql_query($sql);
	    $num_rows = mysql_num_rows($result);
			    if ($num_rows > 0) {
				echo '<select name="manufacture_name" onChange="manufac(this.value)">';				
				if(!empty($this->manufacture_name)){echo '<option value="'.$this->manufacture_name.'">'.$this->manufacture_name.'</option>';}
				else{ echo '<option  value="">'.$this->plz_select_one.'</option>';}	
				echo '<option value="">-</option>';			 
				while($row=mysql_fetch_array($result)) {
				echo '<option>'.$row['manufacture_name'].'</option>';
					 }
			           }
				else {				
				echo $this->no_results;
							}
		        echo '</select>
						  ';	
		                      }
	
	
	
	
////////// manufac

public function modelname_name($q){		
		$sql = "SELECT id,manufacture_name,model_name FROM pc_model_name_tb  WHERE manufacture_name='".$q."'";
	    $result = mysql_query($sql);
	    $num_rows = mysql_num_rows($result);
			     if ($num_rows  > 0) {						
				 if(!empty($this->model_name)){echo '<option value="'.$this->model_name.'">'.$this->model_name.'</option>';}
				 else{ echo '<option  value=""> '.$this->plz_select_one.'</option>';}	
				 echo '<option value="">-</option>';			 
				 while($row=mysql_fetch_array($result)) {					
				 echo '<option>'.$row['model_name'].'</option>';				
					 }
			           }
				 else {				
				 echo $this->no_results;
							}
		                      }
							  


////////// manufac for monitor

public function manufacture_monitor_name(){		 	
		$sql = "SELECT id,manufacture_name FROM pc_manufacturename_tb   GROUP BY manufacture_name ORDER BY manufacture_name ASC";
	    $result = mysql_query($sql);
	    $num_rows = mysql_num_rows($result);
			if ($num_rows > 0) {
			echo '<select name="monitor_manufacture_name" onChange="manufac_monitor(this.value)">';				
		    if(!empty($this->monitor_manufacture_name)){echo '<option value="'.$this->monitor_manufacture_name.'">'.$this->monitor_manufacture_name.'</option>';}
			else{ echo '<option  value="">'.$this->plz_select_one.'</option>';}	
			echo '<option value="">-</option>';			 
			while($row=mysql_fetch_array($result)) {
			echo '<option>'.$row['manufacture_name'].'</option>';
					 }
			           }
			else {				
			echo $this->no_results;
							}
		     echo '</select>';	
		         }
	
	
	
	

	
////////// monitor_model_manufac

public function modelname_monitor__name($q){		
		$sql = "SELECT id,manufacture_name,model_name FROM pc_model_name_tb  WHERE manufacture_name='".$q."'";
	   $result = mysql_query($sql);
	    $num_rows = mysql_num_rows($result);
			if ($num_rows  > 0) {						
				 if(!empty($this->model_name_monitor)){echo '<option value="'.$this->model_name_monitor.'">'.$this->model_name_monitor.'</option>';}
				 else{ echo '<option  value=""> '.$this->plz_select_one.'</option>';}	
				 echo '<option value="">-</option>';			 
				 while($row=mysql_fetch_array($result)) {					
				 echo '<option>'.$row['model_name'].'</option>';				
					 }
			           }
				 else {				
				 echo $this->no_results;
							}
		           }
							  
							  
	
	
////////// cpu speed

public function cpu_speed(){		
		$sql = "SELECT id,cpu_speed FROM pc_cpu_speed_tb ORDER BY cpu_speed ASC";
	    $result = mysql_query($sql);
	    $num_rows = mysql_num_rows($result);
			     if ($num_rows > 0) {
				 echo '<select name="cpu_speed" >';				
				 if(!empty($this->cpu_speed)){echo '<option value="'.$this->cpu_speed.'">'.$this->cpu_speed.'</option>';}
				 else{ echo '<option  value="">'.$this->plz_select_one.'</option>';}	
				 echo '<option value="">-</option>';			 
				 while($row=mysql_fetch_array($result)) {
				 echo '<option>'.$row['cpu_speed'].'</option>';
					 }
			           }
				 else {				
				 echo $this->no_results;
							}
		         echo '</select>';	
		                  }
							  

///////// cpu gen

public function cpu_gen(){		
		$sql = "SELECT id,cpu_gen FROM pc_cpu_gen_tb ORDER BY cpu_gen ASC";
	    $result = mysql_query($sql);
	    $num_rows = mysql_num_rows($result);
			     if ($num_rows > 0) {
				 echo '<select name="cpu_gen" >';				
				 if(!empty($this->cpu_gen)){echo '<option value="'.$this->cpu_gen.'">'.$this->cpu_gen.'</option>';}
				 else{ echo '<option  value="">'.$this->plz_select_one.'</option>';}
				 echo '<option value="">-</option>';				 
				 while($row=mysql_fetch_array($result)) {
				 echo '<option>'.$row['cpu_gen'].'</option>';
					 }
			           }
				 else {				
				 echo $this->no_results;
							}
		         echo '</select>';	
		              }

///////// suplayer
public function supplier_name(){		
		$sql = "SELECT id,supplier_name FROM pc_supplier_name_tb ORDER BY supplier_name ASC";
	    $result = mysql_query($sql);
	    $num_rows = mysql_num_rows($result);
			     if ($num_rows > 0) {
				 echo '<select name="supplier_name" >';				
				 if(!empty($this->supplier_name)){echo '<option value="'.$this->supplier_name.'">'.$this->supplier_name.'</option>';}
				 else{ echo '<option  value="">'.$this->plz_select_one.'</option>';}	
				 echo '<option value="">-</option>';			 
				 while($row=mysql_fetch_array($result)) {
				 echo '<option>'.$row['supplier_name'].'</option>';
					 }
			           }
				 else {				
				 echo $this->no_results;
							}
		         echo '</select>';	
		                      }



//// singal ip 

public function singal_ip($ip_addres){	
			$sql="SELECT * FROM pc_ip_addres_tb WHERE id='$ip_addres'";
			$result=mysql_query($sql);
			$rows=mysql_fetch_array($result);
			echo $rows['ip_addres'];;
	}
	
	
///////// ip addres
public function ip_addres(){		
		$sql = "SELECT id,ip_addres,ip_addres_internet,ip_addres_status FROM pc_ip_addres_tb ORDER BY id ASC";
	    $result = mysql_query($sql);
	    $num_rows = mysql_num_rows($result);
			     if ($num_rows > 0) {
				 echo '<select name="ip_addres" >';				
				 if(!empty($this->ip_addres)){echo '<option value="'.$this->ip_addres.'">'.$this->ip_addres.'</option>';}
				 else{ echo '<option  value="">'.$this->plz_select_one.'</option>';}	
				 echo '<option value="">-</option>';			 
				 while($row=mysql_fetch_array($result)) {
				 if(!empty($row['ip_addres_status'])){}else{
				 if(!empty($row['ip_addres_internet'])){
				 echo '<option  id="ip_int">'.$row['ip_addres'].'</option>';
							 }
				 else{
				 echo '<option >'.$row['ip_addres'].'</option>';
								 }
					 }
					   }
			             }
				else {				
				echo $this->no_results;
							}
		        echo '</select>';	
		                      }
							  


///////// hd size

public function hd_capacity(){		
		$sql = "SELECT id,hd_capacity FROM pc_hd_capacity_name_tb ORDER BY hd_capacity ASC";
	    $result = mysql_query($sql);
	    $num_rows = mysql_num_rows($result);
			     if ($num_rows > 0) {
				 echo '<select name="hd_capacity" >';				
				 if(!empty($this->hd_capacity)){echo '<option value="'.$this->hd_capacity.'">'.$this->hd_capacity.'</option>';}
				 else{ echo '<option  value="">'.$this->plz_select_one.'</option>';}
				 echo '<option value="">-</option>';				 
				 while($row=mysql_fetch_array($result)) {
				 echo '<option>'.$row['hd_capacity'].'</option>';
					 }
			           }
				 else {				
				 echo $this->no_results;
							}
		         echo '</select>';	
		                      }
							  

public function hd_type(){	
	          echo '<select name="hd_type"">';
              if(!empty($this->hd_type)){echo '<option>'.$this->hd_type.'</option>';}
			  
		      else{ echo '<option value="">'.$this->plz_select_one.'</option>';}
			  echo '<option value="">-</option>';
			        echo '<option>ID</option>
						 <option>SATA</option>
						 <option>SSD</option>
			      </select>';	
	                 }
	

public function pc_type(){	
	  echo '<select name="pc_type"">';
      if(!empty($this->pc_type)){echo '<option>'.$this->pc_type.'</option>';}
	  else{ echo '<option value="">'.$this->plz_select_one.'</option>';}
	  echo '<option value="">-</option>';
	        echo '<option>Laptop</option>
				 <option>Desktop</option>
				 <option>All In One</option>
		  </select>';	
	           }
	
	

public function network_connct_type(){	
	  echo '<select name="network_connct_type">';
      if(!empty($this->network_connct_type)){echo '<option>'.$this->network_connct_type.'</option>';}
	  else{ echo '<option value="">'.$this->plz_select_one.'</option>';}
	  echo '<option value="">-</option>';
	  echo'<option>Cable</option>
	       <option>Wifi</option>
	      </select>';	
                                  }
	

////////// cuntry

public function pc_country_name_tb(){		
		$sql = "SELECT id,country_name FROM pc_country_name_tb  ";
	    $result = mysql_query($sql);
	    $num_rows = mysql_num_rows($result);
			if($num_rows  > 0) {	
			echo '<select name="country_name" >';				
			if(!empty($this->country_name)){echo '<option value="'.$this->country_name.'">'.$this->country_name.'</option>';}
			else{ echo '<option  value="">'.$this->plz_select_one.'</option>';}	
			echo '<option value="">-</option>';			 
			while($row=mysql_fetch_array($result)) {
			echo '<option>'.$row['country_name'].'</option>';
					 }
			           }
			else {				
			echo $this->no_results;
							}
		    echo '</select>';			                 	
                                }


public function building_name(){		
		$sql = "SELECT id,building_name FROM pc_building_name_tb  ";
	    $result = mysql_query($sql);
	    $num_rows = mysql_num_rows($result);
			if ($num_rows  > 0) {
						
				 echo '<select name="building_name" >';				
				 if(!empty($this->building_name)){echo '<option value="'.$this->building_name.'">'.$this->building_name.'</option>';}
				 else{ echo '<option  value="">'.$this->plz_select_one.'</option>';}	
				 echo '<option value="">-</option>';			 
				 while($row=mysql_fetch_array($result)) {
				 echo '<option>'.$row['building_name'].'</option>';
					 }
			           }
				 else {				
				 echo $this->no_results;
							}
		          echo '</select>';			                 	
                           }						  


public function section_name(){		
		$sql = "SELECT id,section_name FROM pc_section_name_tb  ";
	    $result = mysql_query($sql);
	    $num_rows = mysql_num_rows($result);
			if ($num_rows  > 0) {	
			echo '<select name="section_name" >';				
			if(!empty($this->section_name)){echo '<option value="'.$this->section_name.'">'.$this->section_name.'</option>';}
			else{ echo '<option  value="">'.$this->plz_select_one.'</option>';}	
			echo '<option value="">-</option>';			 
			while($row=mysql_fetch_array($result)) {
			echo '<option>'.$row['section_name'].'</option>';
					 }
			           }
			else {				
			echo $this->no_results;
							}
		    echo '</select>';			                 	
                            }


public function responsible_name(){		
		$sql = "SELECT id,responsible_name FROM pc_responsible_name_tb  ";
	    $result = mysql_query($sql);
	    $num_rows = mysql_num_rows($result);
			if ($num_rows  > 0) {	
			echo '<select name="responsible_name" >';				
			if(!empty($this->responsible_name)){echo '<option value="'.$this->responsible_name.'">'.$this->responsible_name.'</option>';}
			else{ echo '<option  value="">'.$this->plz_select_one.'</option>';}	
			echo '<option value="">-</option>';			 
			while($row=mysql_fetch_array($result)) {
			echo '<option>'.$row['responsible_name'].'</option>';
					 }
			           }
			else {				
			echo $this->no_results;
							}
		    echo '</select>';			                 	
                  }

public function  	pc_using(){		
		$sql = "SELECT id,pc_using FROM pc_using_tb  ";
	    $result = mysql_query($sql);
	    $num_rows = mysql_num_rows($result);
			if ($num_rows  > 0) {
			echo '<select name="pc_using" >';				
			if(!empty($this->pc_using)){echo '<option value="'.$this->pc_using.'">'.$this->pc_using.'</option>';}
			else{ echo '<option  value="">'.$this->plz_select_one.'</option>';}	
			echo '<option value="">-</option>';			 
			while($row=mysql_fetch_array($result)) {
			echo '<option>'.$row['pc_using'].'</option>';
					 }
			           }
			else {				
			echo $this->no_results;
							}
		    echo '</select>';			                 	
                    }	


public function  	status_name(){		
		$sql = "SELECT id,status_name FROM pc_status_name_tb  ";
	    $result = mysql_query($sql);
	    $num_rows = mysql_num_rows($result);
			if ($num_rows  > 0) {
			echo '<select name="status_name" >';				
			if(!empty($this->status_name)){echo '<option value="'.$this->status_name.'">'.$this->status_name.'</option>';}
			else{ echo '<option  value="">'.$this->plz_select_one.'</option>';}	
			echo '<option value="">-</option>';			 
			while($row=mysql_fetch_array($result)) {
			echo '<option>'.$row['status_name'].'</option>';
					 }
			           }
			else {				
			echo $this->no_results;
							}
		    echo '</select>';			                 	
                   }
				   

/// currancy type

public function currency_type(){		
		$sql = "SELECT id,currency_type FROM pc_currency_type_tb  ";
	    $result = mysql_query($sql);
	    $num_rows = mysql_num_rows($result);
			if ($num_rows  > 0) {
			echo '<select name="currency_type" >';				
			if(!empty($this->currency_type)){echo '<option value="'.$this->currency_type.'">'.$this->currency_type.'</option>';}
			else{ echo '<option  value="">'.$this->plz_select_one.'</option>';}		
			echo '<option value="">-</option>';		 
			while($row=mysql_fetch_array($result)) {
			echo '<option>'.$row['currency_type'].'</option>';
					 }
			           }
			else {				
			echo $this->no_results;
							}
		    echo '</select>';		
		                      }						  										  						  
						  						  
	}
 ?>