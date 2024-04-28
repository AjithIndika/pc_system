<?php 
include_once('assets/class/class.link.php');


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $all_name->titel_icons()?>
<script type="text/javascript">
var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns=""><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()
</script>
</head>

<body>

 <div><img  src="assets/img/xls_icon.png" onclick="tableToExcel('testTable', 'Result of Summary')" value="Export to Excel" height="40" width="40" title="Export to excel"/></div> 
 
 <br />
<div id="testTable" summary="Code page support in different versions of MS Windows." rules="groups" frame="hsides" >
  <?php   
 
  $sql="SELECT * FROM pc_it_deails_tb GROUP BY department_name";
  $result=mysql_query($sql);
  while($rows=mysql_fetch_array($result)){
  $depa = $rows['department_name'];
  $it_details->it_list_data($depa);
  }
  
   $sql="SELECT * FROM pc_it_deails_tb GROUP BY department_name";
  $result=mysql_query($sql);
  while($rows=mysql_fetch_array($result)){
  $depa = $rows['department_name'];
  $it_details->it_list_equ_data($depa);
  }
  ?>
</div>
</body>
</html>