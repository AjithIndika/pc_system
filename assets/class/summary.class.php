<?php 
include_once('class.link.php');

class summary extends titels{
	
	
	
public function ip_summary(){
		
		 $result = mysql_query("SELECT SUM(ip_addres_internet),SUM(ip_addres_status),count(id) FROM pc_ip_addres_tb");       		
		 while($row=mysql_fetch_array($result))
  {
	  $id=$row['count(id)'];
      $ip_addres_internet=$row['SUM(ip_addres_internet)'];
      $ip_addres_status=$row['SUM(ip_addres_status)'];  
  }
 
  $normal=$id-$ip_addres_internet;
  $free=$id-$ip_addres_status; 

echo '<table width="50%" border="1" cellpadding="0" cellspacing="0" >
<th colspan="5" align="center"> IP Details</th>
	<tr bgcolor="#00FF99">
	<td align="center">Total</td>
	<td align="center">Internet</td>
	<td align="center">Normal</td>
	<td align="center">Free</td>
	<td align="center">Using IP</td>	
	</tr>
		
	<tr>
	<td align="center">'.$id.'</td>
	<td align="center">'.$ip_addres_internet.'</td>
	<td align="center">'.$normal.'</td>
	<td align="center">'.$free.'</td>
	<td align="center">'.$ip_addres_status.'</td>	
	</tr >
	
</table>';

		}
		

public function pc_summary_list01(){	
		 $sql = "SELECT count(control_number) FROM  pc_it_deails_tb"; 
		 $result=mysql_query($sql);      		
		 $rows=mysql_fetch_array($result);  
        echo 'Total It equpment '.$rows['count(control_number)'];  
		}
		
public function os_summery(){
	$count=1;
	     $sql = "SELECT os_name FROM  pc_it_deails_tb"; 
		 $result=mysql_query($sql);
		       		
		  while($rows=mysql_fetch_array($result)){
		
                      if(!empty($rows['os_name'])){
						  $oss = $count++;
						  }
						  
						
		  }
		  
		  echo $oss;
	
	}
		


	
	}

?>