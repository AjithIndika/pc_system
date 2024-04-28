<?php 
include_once('assets/class/class.link.php');
$all_name->now_stay='Loging';



if($_SERVER['REQUEST_METHOD'] == 'POST') {
	

	if(empty($user_password) AND empty($username_name)){  $error=$all_name->username_name.' & '.$all_name->user_password.' '.$error->cant_empty;}
	if(!empty($user_password) AND !empty($username_name)){ 	
	$users_seting->loging($username_name,$user_password);
	header("location:index.php");
	
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php $all_name->titel_icons()?>
<link href="assets/css/system.css" rel="stylesheet" type="text/css" />
</head>

<body  id="loging_body">
<center>
<div id="login_div">
<form action="" method="post">
  <table  id="login_tb">
  <th colspan="2"><h1>Loging to <?php echo $all_name->site_name?></h1></th>
    <tr>
      <td><?php echo $all_name->username_name?></td>
      <td><input type="text" value="<?php if(!empty($username_name)){echo $username_name;}?>" name="username_name"   placeholder="<?php echo $all_name->plese_enter.$all_name->username_name;?> ..." autocomplete="off" autofocus="autofocus" id="input"/></td>
    </tr>
    <tr>
      <td><?php echo $all_name->user_password?></td>
      <td><input type="password" value="<?php if(!empty($user_password)){echo $user_password;}?>" name="user_password" placeholder="<?php echo $all_name->plese_enter.$all_name->user_password;?> ..." autocomplete="off" autofocus="autofocus" id="input"/></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" value="Login"  id="submit_log"/></td>
      
    </tr>
    
    <tr><td colspan="2" id="error"> <?php if($_SERVER['REQUEST_METHOD'] == 'POST') {if(!empty($error)){echo $error;}}?></td></tr>
  </table>
  </form>
  <div>
</center>
</body>
</html>