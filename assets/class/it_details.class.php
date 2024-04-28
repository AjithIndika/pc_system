<?php 
include_once('class.link.php');


class it_details{
	
	var $it_titel_color='#99FF33';
	var $it_no='No';
	var $depatment_name='Dept.';
	var $control_no='ID No.';
	var $equmpent_name='M/C or Equipment Name';
	var $manufatcher='Maker';
	var $model='Model';
	var $aset_no='Asset No.';
	var $location='Location';
	var $section='Section / Line Name';
	var $prosess_name='Process Name';
	var $invoce_no='Invoice No.';
	var $invoice_price='Invoice Price';
	var $invoice_price_us='Invoice Price (US $)';
	var $quntity='Quantity';
	var $status='Status (Used /Not Used)';
	var $supplier='Supplier';
	var $lead_time='Lead Time';
	var $insuarance='Insured / Not';
	var $comment='Comments';
	var $led_time='1&tilde;2 weeks';
	var $pc_lagend='Computer Details';
	var $equ_lagend='Equpment';
	
	
	public function it_list_data($depa){
		
		echo '
		<fieldset style="margin-top:10px"><legend>'.$depa.' &nbsp;'.$this->pc_lagend.' </legend></fieldset>
	<table width="150%" border="1" cellpadding="0" cellspacing="0">
    <tr bgcolor='.$this->it_titel_color.'">
    <td align="center">'.$this->it_no.'</td>
    <td align="center">'.$this->depatment_name.'</td>
    <td align="center">'.$this->control_no.'</td>
    <td align="center">'.$this->equmpent_name.'</td>
    <td align="center">'.$this->manufatcher.'</td>
    <td align="center">'.$this->model.'</td>
    <td align="center">'.$this->aset_no.'</td>
    <td align="center">'.$this->location.'</td>
    <td align="center">'.$this->section.'</td>
    <td align="center">'.$this->prosess_name.'</td>
    <td align="center">'.$this->invoce_no.'</td>
    <td align="center">'.$this->invoice_price.'</td>
    <td align="center">'.$this->invoice_price_us.'</td>
    <td align="center">'.$this->quntity.'</td>
    <td align="center">'.$this->status.'</td>
    <td align="center">'.$this->supplier.'</td>
    <td align="center">'.$this->lead_time.'</td>
    <td align="center">'.$this->insuarance.'</td>
    <td align="center">'.$this->comment.'</td>
  </tr>
	';	
	    $count=1;
		$sql="SELECT * FROM pc_it_deails_tb WHERE department_name='$depa'";
        $result=mysql_query($sql);
        while($rows=mysql_fetch_array($result)){
		if($rows['equpment_name']=='COMPUTER'){			 
			 echo '			 
	<tr bgcolor='.$this->it_titel_color.'">			 
    <td align="center">'.$count++.'</td>
    <td align="center">'.$rows['department_name'].'</td>
    <td align="center">'.$rows['control_number'].'</td>
    <td align="left">'.$rows['pc_type'].'</td>
    <td align="left">'.$rows['manufacture_name'].'</td>
    <td align="left">'.$rows['model_name'].'</td>
    <td align="left">'.$rows['asset_no'].'</td>
    <td align="left">'.$rows['building_name'].'</td>
    <td align="left">'.$rows['section_name'].'</td>
    <td align="left">'.$rows['pc_using'].'</td>
    <td align="left">'.$rows['invoice_no'].'</td>
    <td align="left">'.$rows['currency_type'].'&nbsp;'.$rows['price'].'</td>
    <td align="left">'.$rows[''].'</td>
    <td align="left">1</td>
    <td align="left">'.$rows['status_name'].'</td>
    <td align="left">'.$rows['supplier_name'].'</td>
    <td align="center">'.$this->led_time.'</td>
    <td align="left"></td>
    <td align="left"></td>
  </tr>
  ';
              } 
                     }
		   echo '</table>';
		}       
			   
			   

public function it_list_equ_data($depa){
		
		echo '
	<fieldset style="margin-top:10px"><legend>'.$this->equ_lagend.'</legend></fieldset>
	<table width="150%" border="1" cellpadding="0" cellspacing="0">
    <tr bgcolor='.$this->it_titel_color.'">
    <td align="center">'.$this->it_no.'</td>
    <td align="center">'.$this->depatment_name.'</td>
    <td align="center">'.$this->control_no.'</td>
    <td align="center">'.$this->equmpent_name.'</td>
    <td align="center">'.$this->manufatcher.'</td>
    <td align="center">'.$this->model.'</td>
    <td align="center">'.$this->aset_no.'</td>
    <td align="center">'.$this->location.'</td>
    <td align="center">'.$this->section.'</td>
    <td align="center">'.$this->prosess_name.'</td>
    <td align="center">'.$this->invoce_no.'</td>
    <td align="center">'.$this->invoice_price.'</td>
    <td align="center">'.$this->invoice_price_us.'</td>
    <td align="center">'.$this->quntity.'</td>
    <td align="center">'.$this->status.'</td>
    <td align="center">'.$this->supplier.'</td>
    <td align="center">'.$this->lead_time.'</td>
    <td align="center">'.$this->insuarance.'</td>
    <td align="center">'.$this->comment.'</td>
  </tr>
	';	$count=1;
		$sql="SELECT * FROM pc_it_deails_tb WHERE department_name='$depa'";
        $result=mysql_query($sql);
         while($rows=mysql_fetch_array($result)){
			 if($rows['equpment_name']=='COMPUTER'){}
			 else{
			 
			 echo '			 
	<tr bgcolor='.$this->it_titel_color.'">			 
    <td align="center">'.$count++.'</td>
    <td align="center">'.$rows['department_name'].'</td>
    <td align="center">'.$rows['control_number'].'</td>
    <td align="left">'.$rows['pc_type'].'</td>
    <td align="left">'.$rows['manufacture_name'].'</td>
    <td align="left">'.$rows['model_name'].'</td>
    <td align="left">'.$rows['asset_no'].'</td>
    <td align="left">'.$rows['building_name'].'</td>
    <td align="left">'.$rows['section_name'].'</td>
    <td align="left">'.$rows['pc_using'].'</td>
    <td align="left">'.$rows['invoice_no'].'</td>
    <td align="left">'.$rows['currency_type'].'&nbsp;'.$rows['price'].'</td>
    <td align="left">'.$rows[''].'</td>
    <td align="center">1</td>
    <td align="left">'.$rows['status_name'].'</td>
    <td align="left">'.$rows['supplier_name'].'</td>
    <td align="center">'.$this->led_time.'</td>
    <td align="left"></td>
    <td align="left"></td>
  </tr>
  ';
           }
		     
		       }
		   echo '</table>';
		       }
	
	}
?>