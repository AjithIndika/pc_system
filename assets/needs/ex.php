 <?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//connect to the database
$connect = mysql_connect("localhost","root","");
mysql_select_db("computer_manage",$connect); //select the table



if ($_FILES[csv][size] > 0) {

    //get the csv file
    $file = $_FILES[csv][tmp_name];
    $handle = fopen($file,"r");
    
    //loop through the csv file and insert into database
    do {
        if ($data[0]) {
            mysql_query("INSERT INTO   pc_it_deails_tb (control_number,
														equpment_name,
														rent_device,
														responsible_name,
														pc_using,
														status_name,
														owner_name,
														country_name,
														department_name,
														section_name,
														building_name,
														manufacture_name,
														model_name,
														sn_no,
														cpu_gen,
														cpu_speed,
														hd_type,
														hd_capacity,
														ram_type,
														ram_capacity,
														monitor_manufacture_name,
														model_name_monitor,
														monitor_sn,
														pc_type,
														pc_name,
														email,
														supplier_name,
														invoice_no,
														invoice_pdf,
														asset,
														asset_pending,
														asset_no,
														currency_type,
														price,
														os_name,
														os_type,
														os_acctivate,
														office_name,
														office_active,
														virus_gurd,
														ip_addres,
														network_connct,
														network_connct_type,
														register_person,
														register_date,
														update_by,
														update_date	
												) VALUES
																(
                    '".addslashes($data[0])."',
                    '".addslashes($data[1])."',
					'".addslashes($data[2])."',
					'".addslashes($data[3])."',
					'".addslashes($data[4])."',
					'".addslashes($data[5])."',
					'".addslashes($data[6])."',
					'".addslashes($data[7])."',
					'".addslashes($data[8])."',
					'".addslashes($data[9])."',
					'".addslashes($data[10])."',
					'".addslashes($data[11])."',
					'".addslashes($data[12])."',
					'".addslashes($data[13])."',
					'".addslashes($data[14])."',
					'".addslashes($data[15])."',
					'".addslashes($data[16])."',
					'".addslashes($data[17])."',
					'".addslashes($data[18])."',
					'".addslashes($data[19])."',
					'".addslashes($data[20])."',
					'".addslashes($data[21])."',
					'".addslashes($data[22])."',
					'".addslashes($data[23])."',
					'".addslashes($data[24])."',
					'".addslashes($data[25])."',
					'".addslashes($data[26])."',
					'".addslashes($data[27])."',
					'".addslashes($data[28])."',
					'".addslashes($data[29])."',
					'".addslashes($data[30])."',
					'".addslashes($data[31])."',
					'".addslashes($data[32])."',
					'".addslashes($data[33])."',
					'".addslashes($data[34])."',
					'".addslashes($data[35])."',
					'".addslashes($data[36])."',
					'".addslashes($data[37])."',
					'".addslashes($data[38])."',
					'".addslashes($data[39])."',
					'".addslashes($data[40])."',
					'".addslashes($data[41])."',
					'".addslashes($data[42])."',
					'".addslashes($data[43])."',
					'".addslashes($data[44])."',
					'".addslashes($data[45])."',
					'".addslashes($data[46])."'
					 ) ");
        }
    } while ($data = fgetcsv($handle,1000,","));
    //

    //redirect
   /// header('Location: import.php?success=1'); die;
   
   echo "hi hi ok";
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Import a CSV File with PHP & MySQL</title>
</head>

<body>

<?php if (!empty($_GET[success])) { echo "<b>Your file has been imported.</b><br><br>"; } //generic success notice ?>

<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  Choose your file: <br />
  <input name="csv" type="file" id="csv" />
  <input type="submit" name="Submit" value="Submit" />
</form>

</body>
</html>
