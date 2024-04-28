<?php 
include_once('class.link.php');
class asset_list{
	
	var $it_titel_color='#99FF33';
	var $it_titel_color_equ='#DDD';
	var $it_no='No';
	var $control_no='Contro :';
	var $bulding='Bulding.';
	var $line_name='Line Name';
	var $using='Using ';
	var $aset_no='Asset No.';
	
	
	
	public function all_asset($depa){
		
		echo '
	<fieldset style="margin-top:10px"><legend>'.$depa.' &nbsp;'.$this->pc_lagend.' </legend></fieldset>
	<table width="150%" border="1" cellpadding="0" cellspacing="0">
    <tr bgcolor='.$this->it_titel_color.'">
    <td align="center">'.$this->it_no.'</td>
    <td align="center">'.$this->control_no.'</td>
    <td align="center">'.$this->bulding.'</td>
    <td align="center">'.$this->line_name.'</td>
    <td align="center">'.$this->using.'</td>
    <td align="center">'.$this->aset_no.'</td>
    </tr>
	';	
	$count=1;
		$sql="SELECT * FROM pc_it_deails_tb WHERE department_name='$depa'";
        $result=mysql_query($sql);
        while($rows=mysql_fetch_array($result)){
			if(!empty($rows['asset_no'])){	
		if($rows['equpment_name']=='COMPUTER'){	
		 
			 echo ' <tr bgcolor='.$this->it_titel_color.'">			 
					<td align="center">'.$count++.'</td>
					<td align="center">'.$rows['control_number'].'</td>
					<td align="center">'.$rows['building_name'].'</td>
					<td align="left">'.$rows['section_name'].'</td>
					<td align="left">'.$rows['status_name'].'</td>
					<td align="left">'.$rows['asset_no'].'</td>
					<tr>';		 
			 
		}
		else {
			
			echo ' <tr bgcolor='.$this->it_titel_color_equ.'">			 
					<td align="center">'.$count++.'</td>
					<td align="center">'.$rows['control_number'].'</td>
					<td align="center">'.$rows['building_name'].'</td>
					<td align="left">'.$rows['section_name'].'</td>
					<td align="left">'.$rows['status_name'].'</td>
					<td align="left">'.$rows['asset_no'].'</td>
					<tr>';
			
			}
		}
			
		}
		echo '</table>';
		}
	}

?>



