<?php
include_once('class.link.php');

class users extends titels{
	
	public function loging($username_name,$user_password){
		
		 $password=md5($user_password);
		//$password=$user_password;
		
		$query= "SELECT * FROM  pc_users_tb WHERE  username_name   = '" .$username_name. "' AND  password = '" .$password. "'";
	    $result=mysql_query($query);
        $rows=mysql_num_rows($result);
		if($rows==1) {
            $user = mysql_result($result, 0, 'username_name');			
			$_SESSION["pc_user"] = ucfirst($username_name);	
			$date=date('Y-m-d');			
			$times=date("H:i:s a");			
			$this->get_user_permission();
	            } 		   
		   else {
		        $message = "Invalid Login";
	        }
		}
		
		
  public function get_user_permission(){	
	        $sql="SELECT * FROM  pc_users_tb  WHERE username_name='".$_SESSION["pc_user"]."'";
            $result=mysql_query($sql);
            $rows=mysql_fetch_array($result);			
			$_SESSION["admin"] = $rows['admin'];
			$_SESSION["delet"] = $rows['delet'];
			$_SESSION["edit"] = $rows['edit']; 
	
	}
	
public function log_out(){
				session_start();
				session_unset($_SESSION["pc_user"]);
				session_unset($_SESSION["delet"]); 
				session_unset($_SESSION["admin"]); 
				session_unset($_SESSION["edit"]); 
				session_unset($_SESSION["rent_device"]);
				session_unset($_SESSION["equpment_name"]);
				session_unset($_SESSION["department_name"]);
				session_unset($_SESSION["owner_name"]); 
                       }
	
public function new_user($username_name,$user_password,$admin,$delet,$edit){	                      
						  $password=md5($user_password);					  
							mysql_query("INSERT INTO   pc_users_tb 
							(   username_name,
								password,
								admin,
								delet,
								edit)
							 VALUES 
								 ('$username_name',
								 '$password',
								 '$admin',
								 '$delet',
								 '$edit')");	
		
	                            }
	

public function celect_all_users(){		
	$count=1;
	$sql = "SELECT id,username_name,admin,edit,delet  FROM pc_users_tb ORDER BY id ASC";
	$result = mysql_query($sql);
	$num_rows = mysql_num_rows($result);
			if ($num_rows > 0) {
			   echo '<table width="50%" border="1" cellpadding="0" cellspacing="0" align="center">
					  <tr>
						<td width="8%" align="center">'.$this->number.'</td>
						<td width="20%" align="center">'.$this->username_name.'</td>
						<td width="10%" align="center">'.$this->admin.'</td>
						<td width="15%" align="center">'.$this->delet.'</td>
						<td width="15%" align="center">'.$this->edit.'</td>
						<td width="10%" align="center">'.$this->delet.'</td>
						</tr> ';
			 while($row=mysql_fetch_array($result)) { ?>
<tr>
  <td  align="center"><?php echo $count++?></td>
  <td  align="left"><?php echo $row['username_name'];?></td>
  <td  align="center"><?php if(!empty($row['admin'])){$id=$row['id'];$this->adminreset($id);} else{$id=$row['id'];$this->adminadd($id);}?></td>
  <td  align="center"><?php if(!empty($row['delet'])){$id=$row['id'];$this->user_delet_re($id);} else{ $id=$row['id'];$this->user_delet_add($id);}?></td>
  <td  align="center"><?php if(!empty($row['edit'])){$id=$row['id'];$this->user_edit_re($id);} else{$id=$row['id'];$this->user_edit_add($id);}?></td>
  <td align="center"><a href="assets/class/delet.class.php?<?php echo $this->user_menu?>=<?php echo base64_encode($row['id'])?>"
  onclick="return confirm('Are you sure Delet ?');"> <span class="glyphicon glyphicon-trash"></span> </a></td>
</tr>
<?php  }
 echo '</table>';
	} else {
echo $this->no_results;
			}
		     }
		
public function adminreset_up($id){
				$sql="UPDATE pc_users_tb SET 
				admin='' WHERE id='$id'";
				$result=mysql_query($sql);	
	           }
	
public function adminadd_up($id){
			$sql="UPDATE pc_users_tb SET 
			admin='1' WHERE id='$id'";
			$result=mysql_query($sql);	
	           }
	

//
public function delet_re($id){
			$sql="UPDATE pc_users_tb SET 
			delet ='' WHERE id='$id'";
			$result=mysql_query($sql);	
	        }


public function delet_add($id){
			$sql="UPDATE pc_users_tb SET 
			delet ='1' WHERE id='$id'";
			$result=mysql_query($sql);	
	         }


public function edit_re($id){
			$sql="UPDATE pc_users_tb SET 
			edit ='' WHERE id='$id'";
			$result=mysql_query($sql);	
	        }


public function edit_add($id){
			$sql="UPDATE pc_users_tb SET 
			edit='1' WHERE id='$id'";
			$result=mysql_query($sql);	
	        }
	
public function delet_user($id){
	      $sql = "DELETE FROM pc_users_tb WHERE id='$id'";
		  if (mysql_query($sql) === TRUE) {} ;	
	   }
	
public function adminreset($id){ ?>
         <a href="assets/class/delet.class.php?adminreset_up=<?php echo base64_encode($id)?>"><i class="fa fa-check"></i>
<?php }
	
public function adminadd($id){ ?>
         <a href="assets/class/delet.class.php?admin_add=<?php echo base64_encode($id)?>"><i class="fa fa-times"></i>
<?php }
	
	
	
public function user_delet_re($id){ ?>
      <a href="assets/class/delet.class.php?user_delet_re=<?php echo base64_encode($id)?>"><i class="fa fa-check"></i></i>
<?php }
	
public function user_delet_add($id){ ?>
      <a href="assets/class/delet.class.php?user_delet_add=<?php echo base64_encode($id)?>"><i class="fa fa-times"></i>
<?php }



public function user_edit_re($id){ ?>
    <a href="assets/class/delet.class.php?user_edit_re=<?php echo base64_encode($id)?>"><i class="fa fa-check"></i></i>
<?php }


public function user_edit_add($id){ ?>
   <a href="assets/class/delet.class.php?user_edit_ad=<?php echo base64_encode($id)?>"><i class="fa fa-times"></i>
<?php }
	
		
	}

 ?>
