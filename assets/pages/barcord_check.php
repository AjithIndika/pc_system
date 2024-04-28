<?php 
include_once('assets/class/class.link.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 
$from_db->building_name=$building_name;
$from_db->section_name=$section_name;
$from_db->responsible_name=$responsible_name;


if(	!empty($building_name) AND 
	!empty($section_name) AND 
	!empty($responsible_name) AND 
	!empty($control_number)){
		
		    $sql="SELECT * FROM   pc_it_deails_tb  WHERE 	control_number='$control_number'";
			if ($result=mysql_query($sql))
			        {
			        $rowcount=mysql_num_rows($result);
			        if($rowcount==1)
			                  {
		
		$it_check->update_it_details($building_name,$section_name,$responsible_name,$control_number);
		echo '<div id="div_ok" align="center">'.strtoupper($control_number).'&nbsp;'.$it_check->update_ok.'</div>';
		
			}
			else {
				echo '<div id="div_error" align="center">'.strtoupper($control_number).'&nbsp;'.$it_check->not_mach.'</div>';
				}
			  }
		}
}
?>

<style >
#div_error{
	width:50%;
	background-color:#F33;
	color:#DDD;
	color: #EEE;
	font-size:18px;
	font-weight:bold;
	border-radius:5px;

	}
#div_ok{
	background-color: #6F9;
	width:50%;
	color: #777;
	font-size:18px;
	font-weight:bold;
	border-radius:5px;
	height:40px;
	}
</style>
<div id="div_error">
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if(empty($building_name)){echo '1. &nbsp;'.$it_check->bilding_name.'&nbsp;'.$it_check->errors.'<br />';}
if(empty($section_name)){echo '2. &nbsp;'.$it_check->section.'&nbsp;'.$it_check->errors.'<br />';}
if(empty($responsible_name)){echo '3. &nbsp;'.$it_check->responsible.'&nbsp;'.$it_check->errors.'<br />';}
if(empty($control_number)){echo '4. &nbsp;'.$it_check->responsible.'&nbsp;'.$it_check->control_no.'<br />';}  

}
?>
</div>
<form action="" method="post">
<table width="40%" style="margin-top:20px">
  <tr>
    <td ><?php echo $it_check->bilding_name?></td>
    <td ><?php  $from_db->building_name()?></td>
  </tr>
  
  <tr>
    <td><?php echo $it_check->section?></td>
    <td><?php $from_db->section_name()?></td>
  </tr>
  
  <tr>
    <td><?php echo $it_check->responsible?></td>
    <td><?php $from_db->responsible_name()?></td>
  </tr>
  
  <tr>
    <td><?php echo $it_check->control_no?></td>
    <td><input type="text" name="control_number" required  style=" text-transform:uppercase"></td>
  </tr>
  
  <tr>
    <td><input type="submit" value="ok"  style="display:none"></td>
    <td></td>
  </tr>
  
</table>
</form>