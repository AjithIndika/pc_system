<?php 
error_reporting(E_PARSE|E_WARNING|E_ERROR);
 

$host="localhost"; 
$username="root";
$password="";
$db_name="computer_manage";

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

 $list="FA";
 //WHERE location='$list'

$set = 1; 
 
$sql="SELECT * FROM pc_it_deails_tb WHERE department_name ='$list' ";
$result=mysql_query($sql);
$count=mysql_num_rows($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table>
  <tr>
    <td>No</td>
    <td>id</td>
    <td>Barcord</td>
   

     <td>asset Cuntry</td>
     <td>asset Number</td>
     <td>Owner</td>
     <td>othe aset infor</td>
    
    <td>Update BY</td>
    <td>Update Date</td>
  </tr>
  <form action="" method="post">
    <?php while($rows=mysql_fetch_array($result)){
	
	?>
    <tr>
      <td><?php echo $set++?></td>
      <td><?php $control_number[]=$rows['control_number']; ?>
        <?php echo $rows['control_number'];?>
        <input type="text"  value="<?php echo $rows['control_number'];?>" name="control_number[]" id="control_number" /></td>
       <td><?php echo $rows['barcord_No'];?></td>
       <td><input type="text"  name="department_name[]"  id="department_name" value="FAF"/><?php echo $rows['department_name'];?></td>

    </tr>
    <?php 
}
	?>
    <tr>
      <td><input type="submit" value="Submit"  name="Submit"/></td>
    </tr>
  </form>
</table>
</body>
</html>
<?php 


 if ($_SERVER['REQUEST_METHOD'] == 'POST') {  
	   $department_name=$_POST['department_name'];	    
	   $control_number=$_POST['control_number'];

 for($i=0;$i<$count;$i++){
$sql1="UPDATE pc_it_deails_tb SET        
				department_name	='$department_name[$i]'										
				WHERE control_number='$control_number[$i]'";
				
$result1=mysql_query($sql1);

 }
 }
 ?>