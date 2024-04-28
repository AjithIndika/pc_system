<?php 
include_once('assets/class/class.link.php');

$count=1;
?>


 <fieldset >
      <legend><?php echo strtoupper($all_name->ip_tabal)?></legend>
     
      <table width="50%" border="1" cellpadding="0" cellspacing="0">
         <?php 
	    $count=1;	  
	   $result=mysql_query("SELECT COUNT(ip_addres),sum(ip_addres_internet),sum(ip_addres_status) from pc_ip_addres_tb ");
       $ip=mysql_fetch_assoc($result); 
	   
	  ?>
         
        <tr>
          <td align="center"><?php echo $count++?></td>
          <td align="left">Total IP</td>
          <td align="center"><?php echo $ip['COUNT(ip_addres)'];?></td>
        </tr>
        <tr>
          <td align="center"><?php echo $count++?></td>
          <td align="left">Intrenet</td>
          <td align="center"><?php echo $ip['sum(ip_addres_internet)'];?></td>
        </tr>
        <tr>
          <td align="center"><?php echo $count++?></td>
          <td align="left">Not Internet</td>
          <td align="center"><?php echo $ip['COUNT(ip_addres)']-$ip['sum(ip_addres_internet)'];?></td>
        </tr>
        <tr>
          <td align="center"><?php echo $count++?></td>
          <td align="left">Use Ip</td>
          <td align="center"><?php echo $ip['sum(ip_addres_status)'];?></td>
        </tr>
        <tr>
          <td align="center"><?php echo $count++?></td>
          <td align="left">Free Ip</td>
          <td align="center"><?php echo $ip['COUNT(ip_addres)']- $ip['sum(ip_addres_status)'];?></td>
        </tr>
      </table>
      
      </fieldset>
      
      <fieldset >
      <legend><?php echo strtoupper($all_name->devices_tabal)?></legend>
      
      <table width="90%" cellpadding="0" cellspacing="0" border="1">
       
        <tr>
          <td align="center">No</td>
          <td align="center">Name</td>
          <td align="center">Quantity</td>
        </tr>
        <?php 
	$count=1;
	$result=mysql_query("SELECT COUNT(control_number),COUNT(equpment_name),equpment_name from pc_it_deails_tb GROUP BY equpment_name");
    $num_rows = mysql_num_rows($result);
	   
	   ?>
        <?php 
	while($pc_row = mysql_fetch_array($result)){
		?>
        <tr>
          <td align="center"><?php echo $count++ ?></td>
          <td><?php echo $pc_row['equpment_name']?></td>
          <td align="center"><?php echo $pc_row['COUNT(equpment_name)']?></td>
        </tr>
        <?php }?>
      </table>
      </fieldset>
      
      <fieldset >
      <legend><?php echo strtoupper($all_name->licen_count)?></legend>
      <table border="1" cellpadding="0" cellspacing="0" width="90%">        
        
        <tr>
          <td align="center">No</td>
          <td align="center">Name</td>
          <td align="center">Total</td>
          <td align="center">Active</td>
          <td align="center">Not Active</td>
        </tr>
        <?php 
	$count=1;
	$result=mysql_query("SELECT COUNT(os_name),COUNT(os_type),sum(os_acctivate),os_name,os_type,os_acctivate,equpment_name from pc_it_deails_tb GROUP BY os_name ");
    $num_rows = mysql_num_rows($result);
	while($lic= mysql_fetch_array($result)){
		if($lic['equpment_name']=='COMPUTER'){
    ?>
        <tr>
          <td align="center"><?php echo $count++ ?></td>
          <td><?php echo $lic['os_name']?></td>
          <td align="center"><?php echo $lic['COUNT(os_name)']?></td>
          <td align="center"><?php echo $lic['sum(os_acctivate)']?></td>
          <td align="center"><?php echo $lic['COUNT(os_name)']-$lic['sum(os_acctivate)']?></td>
        </tr>
        <?php }}?>
      </table>
      </fieldset>
      
      
       <fieldset >
      <legend><?php echo strtoupper($all_name->active_licen_count)?></legend>
      <table border="1" cellpadding="0" cellspacing="0" width="90%">        
        <tr>
          <td align="center">No</td>
          <td align="center">OS Name</td>
          <td  align="center">OS Total </td>
          <td  align="center">Active Licen</td>
          <td  align="center">Not Active</td>
           </tr>
          <?php 
	$count=1;
	$result=mysql_query("SELECT COUNT(os_name),COUNT(os_type),sum(os_acctivate),os_name,os_type,os_acctivate from pc_it_deails_tb GROUP BY os_acctivate");
    $num_rows = mysql_num_rows($result);
	while($lic= mysql_fetch_array($result)){
    ?>
        <tr>
          <td align="center"><?php echo $count++?></td>
          <td align="left"><?php echo $lic['os_name']?></td>
          <td  align="center"><?php echo $lic['COUNT(os_name)']?></td>
          <td  align="center"><?php echo $lic['sum(os_acctivate)']?></td>
          <td  align="center"><?php echo $lic['COUNT(os_name)']-$lic['sum(os_acctivate)']?></td>
        </tr>
        <?php }?>
      </table>
     </fieldset>
      
      
      <fieldset >
      <legend><?php echo strtoupper($all_name->office_licen_count)?></legend>
      <table border="1" cellpadding="0" cellspacing="0" width="90%">        
        <tr>
          <td align="center">No</td>
          <td align="center">Office Name</td>
          <td align="center">Total Office</td>
          <td align="center">Active Office</td>
          <td align="center">Not Active</td>
        </tr>
        <?php 
	$count=1;
	$result=mysql_query("SELECT COUNT(office_name),COUNT(office_active),sum(office_active),office_name,office_active from pc_it_deails_tb GROUP BY office_name");
    $num_rows = mysql_num_rows($result);
	while($lic= mysql_fetch_array($result)){
    ?>
        <tr>
          <td align="center"><?php echo $count++?></td>
          <td><?php echo $lic['office_name']?></td>
          <td align="center"><?php echo $lic['COUNT(office_name)']?></td>
          <td align="center"><?php echo $lic['sum(office_active)']?></td>
          <td align="center"><?php echo $lic['COUNT(office_name)']-$lic['sum(office_active)']?></td>
        </tr>
        <?php }?>
      </table>
      </fieldset>
      
      
      <fieldset >
      <legend><?php echo strtoupper($all_name->licen_type)?></legend>
      <table border="1" cellpadding="0" cellspacing="0" width="98%">        
          <th colspan="6"></th>
        <tr>
          <td align="center">No</td>
          <td align="center">Name</td>
          <td align="center">Total</td>
          <td align="center">OEM</td>
          <td align="center">OPEN</td>
          <td align="center">Not Set</td>
        </tr>
        <?php 
	$count=1;
	$result=mysql_query("SELECT COUNT(os_type),COUNT(office_active),sum(office_active),os_type,office_active,os_name from pc_it_deails_tb GROUP BY  os_name");
    $num_rows = mysql_num_rows($result);
	while($lic= mysql_fetch_array($result)){
    ?>
        <tr>
          <td align="center"><?php echo $count++?></td>
          <td align="left"><?php echo $lic['os_name']?></td>
          <td align="center"><?php echo $lic['COUNT(os_type)'];?></td>
          <td align="center"><?php   $results=mysql_query("SELECT * FROM  pc_it_deails_tb  WHERE os_type='OEM' AND os_name='".$lic['os_name']."'");
     echo  mysql_num_rows($results);
	 $OEM=mysql_num_rows($results);?></td>
          <td align="center"><?php   $results=mysql_query("SELECT * FROM  pc_it_deails_tb  WHERE os_type='OPEN' AND os_name='".$lic['os_name']."'");
     echo  mysql_num_rows($results);
	 $OPEN=mysql_num_rows($results);?></td>
          <td align="center"><?php echo $lic['COUNT(os_type)']-($OPEN+$OEM)?></td>
        </tr>
        <?php }?>
      </table>
</fieldset>

<fieldset >
      <legend><?php echo strtoupper($all_name->building_wise)?></legend>
      
      
       <table border="1" cellpadding="0" cellspacing="0" width="98%">        
          <th colspan="6"></th>
        <tr>
          <td align="center">No</td>
          <td align="center">Name</td>
          <td align="center">Total</td>
          <td align="center">Laptop</td>
          <td align="center">Desktop</td>
          <td align="center">Not Set</td>
        </tr>
        <?php 
	$count=1;
	$result=mysql_query("SELECT COUNT(building_name),building_name  from pc_it_deails_tb GROUP BY  building_name ");
    $num_rows = mysql_num_rows($result);
	while($bu= mysql_fetch_array($result)){
    ?>
        <tr>
          <td align="center"><?php echo $count++?></td>
          <td align="left"><?php echo $bu['building_name']?></td>
          <td align="center"><?php echo $bu['COUNT(building_name)'];?></td>
          <td align="center"><?php   $results=mysql_query("SELECT * FROM  pc_it_deails_tb  WHERE  	pc_type ='LAPTOP' AND building_name='".$bu['building_name']."'");
     echo  mysql_num_rows($results);
	 $laptop=mysql_num_rows($results); ?></td>
          <td align="center"><?php   $results=mysql_query("SELECT * FROM  pc_it_deails_tb  WHERE  	pc_type ='DESKTOP' AND building_name='".$bu['building_name']."'");
     echo  mysql_num_rows($results);
	 $desktop=mysql_num_rows($results); ?></td>
          <td align="center"><?php echo $bu['COUNT(building_name)']-($laptop+$desktop)?></td>
        </tr>
        <?php }?>
      </table>
      
      </fieldset>
      
      
      <fieldset >
      <legend><?php echo strtoupper($all_name->network)?></legend>
      
      
       <table border="1" cellpadding="0" cellspacing="0" width="98%">        
          <th colspan="6"></th>
        <tr>
          <td align="center">No</td>
          <td align="center">Name</td>
          <td align="center">Total</td>
          <td align="center">WIFI</td>
          <td align="center">Cable</td>               
          <td align="center">Not Set</td>
          
        </tr>
        <?php 
	$count=1;
	$result=mysql_query("SELECT COUNT(building_name),building_name  from pc_it_deails_tb GROUP BY  building_name ");
    $num_rows = mysql_num_rows($result);
	while($net= mysql_fetch_array($result)){
    ?>
        <tr>
          <td align="center"><?php echo $count++?></td>
          <td align="left"><?php echo $net['building_name']?></td>
          <td align="center"><?php echo $net['COUNT(building_name)']?></td>
          <td align="center">
	<?php  $results=mysql_query("SELECT * FROM  pc_it_deails_tb  WHERE network_connct_type ='Wifi' AND building_name='".$net['building_name']."'");
     echo  mysql_num_rows($results);
	 $wifi=mysql_num_rows($results);
	  ?>
     
     </td>
          <td align="center"> 
      <?php $results=mysql_query("SELECT * FROM  pc_it_deails_tb  WHERE network_connct_type ='Cable' AND building_name='".$net['building_name']."'");
     echo  mysql_num_rows($results);
	 $cabll=mysql_num_rows($results); 
	 ?>
     </td>
          <td align="center"><?php echo $net['COUNT(building_name)']-($wifi+$cabll)?></td>
        </tr>
        <?php }?>
      </table>
      
      </fieldset>
      
    <fieldset >
      <legend><?php echo strtoupper($all_name->department_wice)?></legend>
      
      
       <table border="1" cellpadding="0" cellspacing="0" width="98%">        
          <th colspan="6"></th>
        <tr>
          <td align="center">No</td>
          <td align="center">Name</td>
          <td align="center">Total</td>
          <td align="center">Laptop</td>
          <td align="center">Desktop</td>               
          <td align="center">Not Set</td>
          
        </tr>
        <?php 
	$count=1;
	$result=mysql_query("SELECT COUNT(department_name),department_name  from pc_it_deails_tb GROUP BY  department_name ");
    $num_rows = mysql_num_rows($result);
	while($de= mysql_fetch_array($result)){
    ?>
        <tr>
          <td align="center"><?php echo $count++?></td>
          <td align="left"><?php echo $de['department_name']?></td>
          <td align="center"><?php echo $de['COUNT(department_name)']?></td>
          <td align="center">
	<?php  $results=mysql_query("SELECT * FROM  pc_it_deails_tb  WHERE pc_type ='Laptop' AND department_name='".$de['department_name']."'");
     echo  mysql_num_rows($results);
	 $wifi=mysql_num_rows($results);
	  ?>
     
     </td>
          <td align="center"> 
      <?php $results=mysql_query("SELECT * FROM  pc_it_deails_tb  WHERE pc_type ='Desktop' AND department_name='".$de['department_name']."'");
     echo  mysql_num_rows($results);
	 $cabll=mysql_num_rows($results); 
	 ?>
     </td>
          <td align="center">
		  <?php if($de['COUNT(department_name)']<=$de['COUNT(building_name)']-($wifi+$cabll)){echo $de['COUNT(building_name)']-($wifi+$cabll);}?>
          </td>
        </tr>
        <?php }?>
      </table>
      
      </fieldset>
      
      
       <fieldset >
      <legend><?php echo strtoupper($all_name->department_network)?></legend>
      
      
       <table border="1" cellpadding="0" cellspacing="0" width="98%">        
          <th colspan="6"></th>
        <tr>
          <td align="center">No</td>
          <td align="center">Name</td>
          <td align="center">Total</td>
          <td align="center">Virus</td>
          <td align="center">Network</td>               
          <td align="center">Not Set</td>
          
        </tr>
        <?php 
	$count=1;
	$result=mysql_query("SELECT COUNT(department_name),sum(virus_gurd),department_name  from pc_it_deails_tb GROUP BY  department_name ");
    $number_of_rows = mysql_num_rows($result);
	while($de= mysql_fetch_array($result)){
    ?>
        <tr>
          <td align="center"><?php echo $count++?></td>
          <td align="left"><?php echo $de['department_name']?></td>
          <td align="center"><?php echo $de['COUNT(department_name)']?></td>
          <td align="center">
	<?php  $results=mysql_query("SELECT * FROM  pc_it_deails_tb  WHERE virus_gurd  ='1' AND department_name='".$de['department_name']."'");
     echo  mysql_num_rows($results);
	 $wifi=mysql_num_rows($results);
	 $department_name=$de['COUNT(department_name)']++;
	  ?>
     
     </td>
          <td align="center"> 
      <?php $results=mysql_query("SELECT * FROM  pc_it_deails_tb  WHERE network_connct ='1' AND department_name='".$de['department_name']."'");
     echo  mysql_num_rows($results);
	 $cabll=mysql_num_rows($results); 
	 ?>
     </td>
          <td align="center">
		  <?php if($de['COUNT(department_name)']<=$de['COUNT(building_name)']-($wifi+$cabll)){echo $de['COUNT(building_name)']-($wifi+$cabll);}?>
          </td>
        </tr>
        <?php }?>
        <tr>
        <td colspan="2" align="center">Total</td>
     
        <td><?php echo $number_of_rows;?></td>
        <td></td>
        <td></td>
        <td></td>
        </tr>
      </table>
      
      </fieldset>