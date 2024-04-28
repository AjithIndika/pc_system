<?php 
include_once('assets/class/class.link.php');

if(empty($_SESSION["pc_user"])){
	header("location:login.php");
	}
$users_seting->get_user_permission();
 
				/////////  bulding Name ////////  
	 if (isset($_GET[$all_name->main_parameters_sub_01])) {$all_name->now_stay=$all_name->main_parameters_sub_01; }
				/////////  using ////////  
	 if (isset($_GET[$all_name->main_parameters_sub_02])) {$all_name->now_stay=$all_name->main_parameters_sub_02; } 	   
			/////////  using ////////  
	 if (isset($_GET[$all_name->main_parameters_sub_03])) {$all_name->now_stay=$all_name->main_parameters_sub_03;}   
				  /////////  section ////////  
	 if (isset($_GET[$all_name->main_parameters_sub_04])) { $all_name->now_stay=$all_name->main_parameters_sub_04;} 
				   /////////  equpment name ////////  
	 if (isset($_GET[$all_name->main_parameters_sub_05])) { $all_name->now_stay=$all_name->main_parameters_sub_05;} 
	   ///// Manufacturer	   
	 if (isset($_GET[$all_name->main_parameters_sub_06])) { $all_name->now_stay=$all_name->main_parameters_sub_06;} 
				   ///////  Model
	 if (isset($_GET[$all_name->main_parameters_sub_07])) { $all_name->now_stay=$all_name->main_parameters_sub_07;} 
	 if (isset($_GET[$all_name->main_parameters_sub_08])) {$all_name->now_stay=$all_name->main_parameters_sub_08; } 
	 if (isset($_GET[$all_name->main_parameters_sub_09])) { $all_name->now_stay=$all_name->main_parameters_sub_09;} 
	 if (isset($_GET[$all_name->main_parameters_sub_10])) {$all_name->now_stay=$all_name->main_parameters_sub_10; } 
		///// respons
	 if (isset($_GET[$all_name->main_parameters_sub_11])) {$all_name->now_stay=$all_name->main_parameters_sub_11; } 
	  //// status
	 if (isset($_GET[$all_name->main_parameters_sub_12])) { $all_name->now_stay=$all_name->main_parameters_sub_12;} 
      //// HD Capacity
	 if (isset($_GET[$all_name->main_parameters_sub_13]))  {$all_name->now_stay=$all_name->main_parameters_sub_13;} 
	   //// Ram Capacity
	 if (isset($_GET[$all_name->main_parameters_sub_14]))  {$all_name->now_stay=$all_name->main_parameters_sub_01;} 
	 //// owner
	 if (isset($_GET[$all_name->main_parameters_sub_15]))  {$all_name->now_stay=$all_name->main_parameters_sub_15;} 
	 //// Supplaer
	 if (isset($_GET[$all_name->main_parameters_sub_16]))  {$all_name->now_stay=$all_name->main_parameters_sub_16;}
	//// currancy
	 if (isset($_GET[$all_name->main_parameters_sub_17]))  {$all_name->now_stay=$all_name->main_parameters_sub_17;}
	 if (isset($_GET[$all_name->main_menu_1])) {$all_name->now_stay=$all_name->main_menu_1; }
	 
	 if (isset($_GET[$all_name->main_parameters_sub_18]))  {$all_name->now_stay=$all_name->main_parameters_sub_18;}
	 if (isset($_GET[$all_name->main_menu_1])) {$all_name->now_stay=$all_name->main_parameters_sub_18; }	 
	 if (isset($_GET[$all_name->main_parameters_sub_19]))  {$all_name->now_stay=$all_name->main_parameters_sub_19;}
	 if (isset($_GET['newip']))  {$all_name->now_stay=$all_name->main_menu_2_su;}
	 if (isset($_GET['ipedit'])) {$all_name->now_stay='IP Update'; }
	 if (isset($_GET[$all_name->user_menu])) {$all_name->now_stay=$all_name->user_menu; }
	 if (isset($_GET[$all_name->filter])) { $all_name->now_stay=$all_name->filter; }
	 

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php $all_name->titel_icons()?>
<!-- BOOTSTRAP STYLES-->
<link href="assets/css/bootstrap.css" rel="stylesheet" />
<!-- FONTAWESOME STYLES-->
<link href="assets/css/font-awesome.css" rel="stylesheet" />
<!-- MORRIS CHART STYLES-->
<link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
<!-- CUSTOM STYLES-->
<link href="assets/css/custom.css" rel="stylesheet" />
<!-- GOOGLE FONTS-->
<link href="assets/css/system.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

<script>
function showResult(str) {
  if (str.length==0) {
    document.getElementById("livesearch").innerHTML="";
    document.getElementById("livesearch").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
    }
  }
  xmlhttp.open("GET","assets/pages/livesearch.php?q="+str,true);
  xmlhttp.send();
}
</script>

</head>
<body>
<div id="wrapper">
  <hr />
  
  <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <a class="navbar-brand" href="index.php"><?php echo $all_name->now_stay?></a> </div>
    <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="assets/class/delet.class.php?logout" class="btn btn-danger square-btn-adjust">Logout</a> </div>
  </nav>
  <!-- /. NAV TOP  -->
  <nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
   
      <ul class="nav" id="main-menu">
        <li class="text-center"> <img src="assets/img/find_user.png" class="user-image img-responsive"/> </li>
        <li> <a class="active-menu"  href="index.php?dash"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a> </li>
        <li>
        
        </li>
        <li  > <a   href="?<?php echo $all_name->filter;?>"><i class="fa fa-bar-chart-o fa-3x"></i> <?php echo $all_name->filter;?></a> </li>
        
        <?php if(!empty($_SESSION["admin"])){ ?>
        <li  > <a  href="?<?php echo $all_name->user_menu?>"><i class="fa fa-user" style="font-size:40px"></i> <?php echo $all_name->user_menu?></a> </li>
        <?php } ?>
        <?php if(!empty($_SESSION["edit"])){ ?>
        <li> <a  href="?<?php echo $all_name->main_menu_1?>"><i class="fa fa-desktop fa-3x"></i> <?php echo $all_name->nepc_add?></a> </li>
        <?php } ?>
        
        <?php if(!empty($_SESSION["edit"])){ ?>
        <li  > <a  href="?<?php echo $all_name->main_menu_2_sub?>"><i class="fa  fa-fighter-jet fa-3x"></i> <?php echo $all_name->main_menu_2?> </a> </li>
        <?php }?>
         <?php if(!empty($_SESSION["edit"])){ ?>
        <li> <a href="#"><i class="fa fa-sitemap fa-3x"></i> <?php echo $all_name->main_parameters?><span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
            <li> <a href="?<?php echo $all_name->main_parameters_sub_01?>"> <?php echo $all_name->main_parameters_sub_01?></a> </li>
            <li> <a href="?<?php echo $all_name->main_parameters_sub_02?>"><?php echo $all_name->main_parameters_sub_02?></a> </li>
            <li> <a href="?<?php echo $all_name->main_parameters_sub_03?>"><?php echo $all_name->main_parameters_sub_03?></a> </li>
            <li> <a href="?<?php echo $all_name->main_parameters_sub_04?>"><?php echo $all_name->main_parameters_sub_04?></a> </li>
            <li> <a href="?<?php echo $all_name->main_parameters_sub_05?>"><?php echo $all_name->main_parameters_sub_05?></a> </li>
            <li> <a href="?<?php echo $all_name->main_parameters_sub_06?>"><?php echo $all_name->main_parameters_sub_06?></a> </li>
            <li> <a href="?<?php echo $all_name->main_parameters_sub_07?>"><?php echo $all_name->main_parameters_sub_07?></a> </li>
            <li> <a href="?<?php echo $all_name->main_parameters_sub_08?>"><?php echo $all_name->main_parameters_sub_08?></a> </li>
            <li> <a href="?<?php echo $all_name->main_parameters_sub_09?>"><?php echo $all_name->main_parameters_sub_09?></a> </li>
            <li> <a href="?<?php echo $all_name->main_parameters_sub_10?>"><?php echo $all_name->main_parameters_sub_10?></a> </li>
            <li> <a href="?<?php echo $all_name->main_parameters_sub_11?>"><?php echo $all_name->main_parameters_sub_11?></a> </li>
            <li> <a href="?<?php echo $all_name->main_parameters_sub_12?>"><?php echo $all_name->main_parameters_sub_12?></a> </li>
            <li> <a href="?<?php echo $all_name->main_parameters_sub_13?>"><?php echo $all_name->main_parameters_sub_13?></a> </li>
            <li> <a href="?<?php echo $all_name->main_parameters_sub_14?>"><?php echo $all_name->main_parameters_sub_14?></a> </li>
            <li> <a href="?<?php echo $all_name->main_parameters_sub_15?>"><?php echo $all_name->main_parameters_sub_15?></a> </li>
            <li> <a href="?<?php echo $all_name->main_parameters_sub_16?>"><?php echo $all_name->main_parameters_sub_16?></a> </li>
            <li> <a href="?<?php echo $all_name->main_parameters_sub_17?>"><?php echo $all_name->main_parameters_sub_17?></a> </li>
            <li> <a href="?<?php echo $all_name->main_parameters_sub_18?>"><?php echo $all_name->main_parameters_sub_18?></a> </li>
            <li> <a href="?<?php echo $all_name->main_parameters_sub_19?>"><?php echo $all_name->main_parameters_sub_19?></a> </li>
           
            
           
          </ul>
        </li>
        
        <?php } ?>
        
          <?php if(!empty($_SESSION["edit"])){ ?>
        <li  > <a  href="?barcord_check"><i class="fa fa-barcode" style="font-size:24px"></i> <?php echo $all_name->barcord_check?> </a> </li>
        <?php }?>
        
          <li> <a href="#"><i class="fa fa-tasks"></i> Summary Report<span class="fa arrow"></span></a>
          <ul class="nav nav-second-level">
       <?php if(!empty($_SESSION["edit"])){ ?> <li  > <a  href="assets/pages/export.php"><i class="fa fa-square-o fa-3x"></i> Excel</a> </li>  <?php }?>
        <li  > <a  href="?chart"><i class="fa fa-square-o fa-3x"></i>Chart</a> </li>
        <li  > <a  href="?it_list"><i class="fa fa-list" style="font-size:24px"></i>IT Item_List_<?php echo date('dM_y')?></a> </li>
      
         <li  > <a  href="?chek_list"><i class="fa fa-eye" style="font-size:24px"></i>Barcode Check Report</a> </li>
          <li  > <a  href="?asset"><i class="fa fa-money" style="font-size:24px"></i>Asset List</a> </li>
        

      </ul>
      
    </div>
  </nav>
  <!-- /. NAV SIDE  -->
  <div id="page-wrapper" >
    <div id="page-inner">
      <div class="row">
        <div class="col-md-12">
          <h2>Dashboard</h2>
          <h5>Welcome <?php echo $_SESSION["pc_user"] ?> , Love to see you back. </h5>
        </div>
      </div>
      <!-- /. ROW  -->
      <div class="row">
       <form>
       <input type="text" size="30" onkeyup="showResult(this.value)"  id="live_serch" placeholder="Live Serch ...">
       <div id="livesearch"></div>
       </form>
       </div>
      <!-- /. ROW  -->
      <hr />
      <div class="row"></div>
      <!-- /. ROW  -->
      <div class="row"></div>
      <!-- /. ROW  -->
      <div class="row" ></div>
      <!-- /. ROW  -->
      <div class="row"></div>
      <!-- /. ROW  -->
      
      <?php 
				 
				  
				/////////  bulding Name ////////  
				  if (isset($_GET[$all_name->main_parameters_sub_01])) {
                     include('assets/pages/parameters.php'); 
                   }
				/////////  using ////////  
				  if (isset($_GET[$all_name->main_parameters_sub_02])) {
                     include('assets/pages/parameters.php'); 
                   } 
				   
				/////////  using ////////  
				  if (isset($_GET[$all_name->main_parameters_sub_03])) {
                     include('assets/pages/parameters.php'); 
                   }   
				   
				   
				  /////////  section ////////  
				  if (isset($_GET[$all_name->main_parameters_sub_04])) {
                     include('assets/pages/parameters.php'); 
                   } 
				   
				   /////////  equpment name ////////  
				  if (isset($_GET[$all_name->main_parameters_sub_05])) {
                     include('assets/pages/parameters.php'); 
                   } 
				   
				   ///// Manufacturer
				   
				    if (isset($_GET[$all_name->main_parameters_sub_06])) {
                     include('assets/pages/parameters.php'); 
                   } 
				   
				   
				   ///////  Model
				    if (isset($_GET[$all_name->main_parameters_sub_07])) {
                     include('assets/pages/parameters.php'); 
                   } 
				   
				   
				   
				    if (isset($_GET[$all_name->main_parameters_sub_08])) {
                     include('assets/pages/parameters.php'); 
                   } 
				   
				   
				   
				    if (isset($_GET[$all_name->main_parameters_sub_09])) {
                     include('assets/pages/parameters.php'); 
                   } 
				   
				   
				    if (isset($_GET[$all_name->main_parameters_sub_10])) {
                     include('assets/pages/parameters.php'); 
                   } 
				   
				   ///// respons
				   
				    if (isset($_GET[$all_name->main_parameters_sub_11])) {
                     include('assets/pages/parameters.php'); 
                   } 
				   
				   
				   //// status
				     if (isset($_GET[$all_name->main_parameters_sub_12])) {
                     include('assets/pages/parameters.php'); 
                   } 
				   
				   
				   //// HD Capacity
				     if (isset($_GET[$all_name->main_parameters_sub_13])) {
                     include('assets/pages/parameters.php'); 
                   } 
				   
				   //// Ram Capacity
				     if (isset($_GET[$all_name->main_parameters_sub_14])) {
                     include('assets/pages/parameters.php'); 
                   } 
				   
				   //// owner
				     if (isset($_GET[$all_name->main_parameters_sub_15])) {
                     include('assets/pages/parameters.php'); 
                   } 
				   
				    //// Supplaer
				     if (isset($_GET[$all_name->main_parameters_sub_16])) {
                     include('assets/pages/parameters.php'); 
                   }
				   
				    //// currancy
				     if (isset($_GET[$all_name->main_parameters_sub_17])) {
                     include('assets/pages/parameters.php'); 
                   }
				   
				    if (isset($_GET[$all_name->main_parameters_sub_18])) {
                     include('assets/pages/parameters.php'); 
                   }
				   
				   if (isset($_GET[$all_name->main_parameters_sub_19])) {
                     include('assets/pages/parameters.php'); 
                   }
				   
				   
				   
				   if (isset($_GET[$all_name->main_menu_1])) {                    
                    include_once('assets/pages/newpc.php');
                    } 
					
					 if (isset($_GET['new'])) {                    
                    include_once('assets/pages/newpc.php');
                    } 					
					
					 if (isset($_GET[$all_name->main_menu_2_sub])) {                    
                    include_once('assets/pages/parameters.php');				
			         }
					 
					 if (isset($_GET['ipedit'])) {                    
                    include_once('assets/pages/parameters.php');				
			         }
					 
					  if (isset($_GET[$all_name->user_menu])) {                    
                    include_once('assets/pages/users.php');				
			         }
					
					
					  if (isset($_GET['pc_details'])) {                    
                    include_once('assets/pages/details.php');				
			         }
					 
					   if (isset($_GET['update'])) {                    
                    include_once('assets/pages/details.php');				
			         }
					 
					 
					   if (isset($_GET['dash'])) {
						   include_once('assets/pages/sumary.php');	
						 
						 }
						 
						 if (isset($_GET[$all_name->filter])) {
						   include_once('assets/pages/datashort.php');	
						 
						 }
						 
						 if (isset($_GET['chart'])) {
						   include_once('assets/pages/chart-chartjs.php');	
						 
						 }
                         if (isset($_GET['it_list'])) {
						   include_once('assets/pages/it_list.php');	
						 
						 }
                     
                         if (isset($_GET['barcord_check'])) {
						   include_once('assets/pages/barcord_check.php');	
						 
						 }
						 
						 if (isset($_GET['chek_list'])) {
						   include_once('assets/pages/chek_list.php');	
						 
						 }
					    
					 
					 if (isset($_GET['asset'])) {
						   include_once('assets/pages/asset.php');	
						 
						 }
					 
				 
				 ?>
    </div>
    <!-- /. PAGE INNER  --> 
  </div>
  <!-- /. PAGE WRAPPER  --> 
</div>
<!-- /. WRAPPER  --> 
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME--> 
<!-- JQUERY SCRIPTS --> 
<script src="assets/js/jquery-1.10.2.js"></script> 
<!-- BOOTSTRAP SCRIPTS --> 
<script src="assets/js/bootstrap.min.js"></script> 
<!-- METISMENU SCRIPTS --> 
<script src="assets/js/jquery.metisMenu.js"></script> 
<!-- MORRIS CHART SCRIPTS --> 
<script src="assets/js/morris/raphael-2.1.0.min.js"></script> 
<script src="assets/js/morris/morris.js"></script> 
<!-- CUSTOM SCRIPTS --> 
<script src="assets/js/custom.js"></script>
</body>
</html>
