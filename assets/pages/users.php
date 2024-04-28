<?php 
include_once('assets/class/class.link.php');


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center>
  <?php 
  if (isset($_GET[$all_name->user_menu])) {
	  if($_SERVER['REQUEST_METHOD'] == 'POST') {
		  
		  if(!empty($username_name) AND !empty($user_password)){
	  $users_seting->new_user($username_name,$user_password,$admin,$delet,$edit);
		  }
		  
		  else {
			  
			  $error=$all_name->username_name.' &amp; '.$all_name->user_password.' '.$error->cant_empty;
			  }
	  }
	  ?>
      
      <form action="" method="post">
  <table width="30%" align="left">
    <tr>
      <td><?php echo $all_name->username_name ?></td>
      <td><input type="text" name="username_name" value="<?php if(!empty($username_name)){echo $username_name;}?>" /></td>
    </tr>
    
    <tr>
      <td><?php echo $all_name->user_password ?></td>
      <td><input type="password" name="user_password" value="<?php if(!empty($user_password)){echo $user_password;}?>" /></td>
    </tr>
    
    <tr>
      <td><?php echo $all_name->admin?></td>
      <td><input type="checkbox" value="1" name="admin"  <?php if(!empty($admin)){echo 'checked="checked"';}?>/></td>
    </tr>
    
    <tr>
      <td><?php echo $all_name->delet ?></td>
      <td><input type="checkbox" value="1" name="delet" <?php if(!empty($delet)){echo 'checked="checked"';}?>/></td>
    </tr>
    
    <tr>
      <td><?php echo $all_name->edit ?></td>
      <td><input type="checkbox" value="1" name="edit" <?php if(!empty($edit)){echo 'checked="checked"';}?>/></td>
    </tr>
    
   
     <tr>
      <td colspan="2" ><input type="submit" value="Crate New User"  /></td>
    </tr>
    
   <tr>
     <td colspan="2" id="error"> <?php if($_SERVER['REQUEST_METHOD'] == 'POST') {if(!empty($error)){echo $error;}}?></td>
    </tr> 
    
  </table>
  </form>
  <?php  }
  
 $users_seting->celect_all_users()
  ?>
</center>
</body>
</html>