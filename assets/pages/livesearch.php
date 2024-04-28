<?php
include_once('../class/class.link.php');
$q=$_GET["q"];


$sql="SELECT * FROM  pc_it_deails_tb WHERE control_number like '%$q%'
                                                     OR pc_name like '%$q%'
													 OR ip_addres='$q' 
													 OR asset_no='$q'  
													 LIMIT 20";
$result=mysql_query($sql);
$num_rows = mysql_num_rows($result);
			if ($num_rows > 0) {
while($rows=mysql_fetch_array($result)){
	
	
echo "<label  style='background-color:#FFF;width:100%' >
<a href='?pc_details=".base64_encode($rows['control_number'])."'> ";

	echo $rows['control_number'];
	if(!empty($rows['asset_no'])){echo ' / '.$rows['asset_no'];}
	if(!empty($rows['ip_addres'])){echo ' / '.$rows['ip_addres'];}
	if(!empty($rows['pc_name'])){echo ' / '.$rows['pc_name'];}

echo "</label></a><br/>";
}
			}
			
			else {
				echo $all_name->cant_find;
				}
?> 


