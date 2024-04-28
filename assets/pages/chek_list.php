<?php 
include_once('assets/class/class.link.php');

//check_date
if ($_SERVER['REQUEST_METHOD'] == 'POST') {	

$from_details->check_date=$check_date;
$from_db->department_name=$department_name;
}
$sql="SELECT * FROM  pc_it_deails_tb WHERE department_name ='$department_name' ORDER BY control_number ASC ";
$result=mysql_query($sql);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="50%" style="margin-bottom:20px">
  <form action="" method="post">
    <tr>
      <td><?php echo $all_name->departmentname?></td>
      <td><?php echo $from_db->department_name()?></td>
      <td>Date</td>
      <td><?php echo $from_details->barcord_check_dates()?></td>
    </tr>
    <tr>
      <td><button type="submit" >Get List</button></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </form>
</table>
<table width="50%" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center">No</td>
    <td align="center">Con : No</td>
    <td align="center"><?php echo $all_name->bildingname?></td>
    <td align="center">Check Date</td>
    <td align="center">Check By</td>
    <td align="center">Check </td>
  </tr>
  <?php 
  $count=1;
  $date_ok=0;
  while($rows=mysql_fetch_array($result)){
	 $num_rows = mysql_num_rows($result);
	 $check_bardate=$rows['check_date'];
	 
	 if(!empty($check_date) AND !empty($check_bardate)){
				 
				$db_dat=explode("-",$check_bardate);
				$select_dat=explode("-",$check_date);
				$db_date_ok= $db_dat[0].'-'.$db_dat[1];
				$select_date_ok=$select_dat[0].'-'.$select_dat[1];	
				if($db_date_ok==$select_date_ok)
					{ 
					   $pc_ok ='1';
					   $date_ok += $pc_ok;
							}
	 }
				
				
  ?>
  <tr>
    <td><?php echo $count++?></td>
    <td><?php echo $rows['control_number']?></td>
    <td><?php echo $rows['building_name']?></td>
    <td align="center"><?php echo $rows['check_date'];?></td>
    <td ><?php echo $rows['check_by']?></td>
    <td align="center"><?php $it_check->check_barcord($check_bardate,$check_date); ?></td>
  </tr>
  <?php } ?>
</table>
<div  style="width:50%; margin-top:20px; margin-bottom:20px">
  <table width="50%" border="1" cellpadding="0" cellspacing="0" align="right">
  <tr>
      <td align="center">Total PC In Depart:</td>
      <td align="center"><?php echo $num_rows;?></td>
    </tr>
    <tr>
      <td align="center">Barcord Check PC</td>
      <td align="center"><?php echo $date_ok;?></td>
    </tr>
    
    <tr>
      <td align="center">Missing </td>
      <td align="center"><?php echo $num_rows-$date_ok;?></td>
    </tr>
  </table>
</div>
</body>
</html>