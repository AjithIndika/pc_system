<?php 
include_once('assets/class/class.link.php');


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
<?php if(isset($_GET['dash'])){
?>

<table width="80%" border="1">
<tr>
<td align="center"><?php $summary->ip_summary()?></td><td  align="center"><?php $summary->pc_summary_list01()?></td>
</tr>

<tr>
<td align="center"><?php $summary->os_summery()?></td><td  align="center"><?php $summary->pc_summary_list01()?></td>
</tr>

</table>
<?php } ?>
</body>
</html>