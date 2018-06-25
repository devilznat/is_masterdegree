<?php

session_start();

define('ROOT',str_replace("\\",'/',dirname(__FILE__)));

  require('../../../db/connect.php');
  require('../../../db/loaddata.php');

//   echo "Test";
// echo "<br>";
// echo $_SESSION["user_ID"];
// echo "<br>";
// echo $_SESSION["role_ID"];

  if(!isset($_SESSION['user_ID']))
  {
    
    header("location:http://justroolaws.com/page/backend/login");
    exit();
  }

	if($_GET["user_ID"]!="" && $_GET["action"]=="delete") {
		$SQL = "delete from user where user_ID='".$_GET["user_ID"]."'";
		mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);

	} elseif($_GET["user_ID"]!="" && $_GET["action"]=="1") {
		$SQL = "update user set approveStatus_ID='1', key_ID=1, LCEnable_ID=1 where user_ID='".$_GET["user_ID"]."'";
		mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);

		$SQL = "select * from user where user_ID='".$_GET["user_ID"]."'";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		$tmp = mysqli_fetch_array($rst);

		$HTML = file_get_contents("email-approve.html");
		$HTML = str_replace("%showfirstname%",$tmp["firstName"],$HTML);
		$HTML = str_replace("%showlastname%",$tmp["lastName"],$HTML);
		$HTML = str_replace("%showusername%",$tmp["userName"],$HTML);
		$HTML = str_replace("%showpassword%",$tmp["passWord"],$HTML);
		$HTML = str_replace("%showemail%",$tmp["email"],$HTML);
		$HTML = str_replace("%showphone%",$tmp["tel"],$HTML);

		send_mail("JustRooLaws", "reply@justroolaws.com", $tmp["email"], "Congrats! You already Approve. Do Not Reply", $HTML);

	} elseif($_GET["user_ID"]!="" && $_GET["action"]=="2") {
		$SQL = "update user set approveStatus_ID='2' where user_ID='".$_GET["user_ID"]."'";
		mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);

    $SQL = "select * from user where user_ID='".$_GET["user_ID"]."'";
    $rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
    $tmp = mysqli_fetch_array($rst);

    $HTML = file_get_contents("email-deny.html");
    $HTML = str_replace("%showfirstname%",$tmp["firstName"],$HTML);
    $HTML = str_replace("%showlastname%",$tmp["lastName"],$HTML);
    $HTML = str_replace("%showemail%",$tmp["email"],$HTML);
    $HTML = str_replace("%showphone%",$tmp["tel"],$HTML);

    send_mail("JustRooLaws", "reply@justroolaws.com", $tmp["email"], "Sorry! You already Deny. Do Not Reply", $HTML);
	}

  elseif($_GET["user_ID"]!="" && $_GET["action"]=="3") {
    $SQL = "update user set approveStatus_ID='4' where user_ID='".$_GET["user_ID"]."'";
    mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);

    $SQL = "select * from user where user_ID='".$_GET["user_ID"]."'";
    $rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
    $tmp = mysqli_fetch_array($rst);

    $HTML = file_get_contents("email-deactivate.html");
    $HTML = str_replace("%showfirstname%",$tmp["firstName"],$HTML);
    $HTML = str_replace("%showlastname%",$tmp["lastName"],$HTML);
    $HTML = str_replace("%showemail%",$tmp["email"],$HTML);
    $HTML = str_replace("%showphone%",$tmp["tel"],$HTML);

    send_mail("JustRooLaws", "reply@justroolaws.com", $tmp["email"], "Warning! Your account has been Deactivate . Do Not Reply", $HTML);
  }

  elseif($_GET["user_ID"]!="" && $_GET["action"]=="4") {
    $SQL = "update user set approveStatus_ID='5' where user_ID='".$_GET["user_ID"]."'";
    mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);

    $SQL = "select * from user where user_ID='".$_GET["user_ID"]."'";
    $rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
    $tmp = mysqli_fetch_array($rst);

    $HTML = file_get_contents("email-activate.html");
    $HTML = str_replace("%showfirstname%",$tmp["firstName"],$HTML);
    $HTML = str_replace("%showlastname%",$tmp["lastName"],$HTML);
    $HTML = str_replace("%showemail%",$tmp["email"],$HTML);
    $HTML = str_replace("%showphone%",$tmp["tel"],$HTML);

    send_mail("JustRooLaws", "reply@justroolaws.com", $tmp["email"], "Congrats! Your account has been Activate Again . Do Not Reply", $HTML);
  }


//*** Update Last Stay in Login System
  $sql = "UPDATE user SET LastLogin = NOW() WHERE user_ID = '".$_SESSION["user_ID"]."' ";
  $query = mysqli_query($link,$sql);

  //*** Get User Login
  $strSQL = "SELECT * FROM user WHERE user_ID = '".$_SESSION['user_ID']."' ";
  $objQuery = mysqli_query($link,$strSQL);
  $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <title>JustRooLaws | Consulting Website  - Admin Control Page</title>

  <!-- ========== Css Files ========== -->
  <link href="../assets/css/root.css" rel="stylesheet">


  </head>
  <body>
  <!-- Start Page Loading -->
  <div class="loading"><img src="../assets/img/loading.gif" alt="loading-img"></div>
  <!-- End Page Loading -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 
  <!-- START TOP -->
  <div id="top" class="clearfix">

    <!-- Start App Logo -->
    <div class="applogo">
      <a href="dashboard_main" class="logo" >JUSTROOLAWS</a>
    </div>
    <!-- End App Logo -->

    <!-- Start Sidebar Show Hide Button -->
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
    <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
    <!-- End Sidebar Show Hide Button -->

    <!-- Start Searchbox -->
    <form class="searchform">
      <input type="text" class="searchbox" id="searchbox" placeholder="Search">
      <span class="searchbutton"><i class="fa fa-search"></i></span>
    </form>
    <!-- End Searchbox -->

    <!-- Start Top Menu -->
    <ul class="topmenu">
      <li><a href="#">Files</a></li>
      <li><a href="#">Authors</a></li>
      <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">My Files <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Videos</a></li>
          <li><a href="#">Pictures</a></li>
          <li><a href="#">Blog Posts</a></li>
        </ul>
      </li>
    </ul>
    <!-- End Top Menu -->

    <!-- Start Sidepanel Show-Hide Button -->
    <!-- <a href="#sidepanel" class="sidepanel-open-button"><i class="fa fa-outdent"></i></a> -->
    <!-- End Sidepanel Show-Hide Button -->

    <!-- Start Top Right -->
    <ul class="top-right">

    <li class="dropdown link">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle hdbutton">Create New <span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-list">
         <!--  <li><a href="#"><i class="fa falist fa-paper-plane-o"></i>Product or Item</a></li> -->
          <li><a href="add-article"><i class="fa falist fa-font"></i>Add Law Articles</a></li>
          <!-- <li><a href="#"><i class="fa falist fa-file-image-o"></i>Add Law Experiece (Case Study)</a></li> -->
          <!-- <li><a href="#"><i class="fa falist fa-file-video-o"></i>Video Gallery</a></li> -->
        </ul>
    </li>

    <!-- <li class="link">
      <a href="#" class="notifications">6</a>
    </li> -->
<?php
        


?>
    <li class="dropdown link">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><img src="../assets/img/admin.png" alt="img"><b><?php echo $nameuser ?> <?php echo $lastnameuser ?> </b><span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-menu-list dropdown-menu-right">
          <li role="presentation" class="dropdown-header">Profile</li>
          <li><a href="#"><i class="fa falist fa-user"></i>Role : <?php echo $roletitle?>  </a></li>
          <!-- <li><a href="#"><i class="fa falist fa-file-o"></i>Files</a></li>
          <li><a href="#"><i class="fa falist fa-wrench"></i>Settings</a></li> -->
          <li class="divider"></li>
         <!--  <li><a href="#"><i class="fa falist fa-lock"></i> Lockscreen</a></li> -->
          <li><a href="../logout"><i class="fa falist fa-power-off"></i> Logout</a></li>
        </ul>
    </li>

    </ul>
    <!-- End Top Right -->

  </div>
  <!-- END TOP -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 


<!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START SIDEBAR -->
<div class="sidebar clearfix">

<ul class="sidebar-panel nav">
  <li class="sidetitle">MAIN</li>
  <li><a href="dashboard_main"><span class="icon color5"><i class="fa fa-home"></i></span>Dashboard</a></li>
  <!-- <li><a href="mailbox.html"><span class="icon color6"><i class="fa fa-envelope-o"></i></span>Mailbox<span class="label label-default">19</span></a></li> -->
  <li><a href="#"><span class="icon color7"><i class="fa fa-font"></i></span>Manage Articles<span class="caret"></span></a>
    <ul>
      <li><a href="all-articles">All Articles</a></li>
      <li><a href="add-article">Add Articles</a></li>
    </ul>
  </li>
  <li><a href="#"><span class="icon color9"><i class="fa fa-user"></i></span>Manage Users<span class="caret"></span></a>
    <ul>
      <li><a href="all-users">All Users</a></li>
      
    </ul>
  </li>
 <!--  <li><a href="#"><span class="icon color10"><i class="fa fa-check-square-o"></i></span>Forms<span class="caret"></span></a>
    <ul>
      <li><a href="form-elements.html">Form Elements</a></li>
      <li><a href="layouts.html">Form Layouts</a></li>
      <li><a href="text-editors.html">Text Editors</a></li>
    </ul>
  </li> -->
  <li><a href="livechat-control"><span class="icon color11"><i class="fa fa-diamond"></i></span>Live Chat Control</a></li>
  <li><a href="#"><span class="icon color14"><i class="fa fa-file-text-o"></i></span>Manage Download Resource<span class="caret"></span></a>
    <ul>
      <li><a href="all-download">All Download Resources</a></li>
      <li><a href="add-download">Add Download Resources</a></li>
    </ul>
  </li>
</ul>

<!-- <ul class="sidebar-panel nav">
  <li class="sidetitle">MORE</li>
  <li><a href="grid.html"><span class="icon color15"><i class="fa fa-columns"></i></span>Grid System</a></li>
  <li><a href="maps.html"><span class="icon color7"><i class="fa fa-map-marker"></i></span>Maps</a></li>
  <li><a href="customizable.html"><span class="icon color10"><i class="fa fa-lightbulb-o"></i></span>Customizable</a></li>
  <li><a href="helper-classes.html"><span class="icon color8"><i class="fa fa-code"></i></span>Helper Classes</a></li>
  <li><a href="changelogs.html"><span class="icon color12"><i class="fa fa-file-text-o"></i></span>Manage Download Resource</a></li>
</ul> -->

<!-- <div class="sidebar-plan">
  Pro Plan<a href="#" class="link">Upgrade</a>
  <div class="progress">
  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
  </div>
</div>
<span class="space">42 GB / 100 GB</span>
</div> -->

</div>
<!-- END SIDEBAR -->
<!-- //////////////////////////////////////////////////////////////////////////// --> 

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTENT -->
<div class="content">

  <!-- Start Page Header -->
  <div class="page-header">
    <h1 class="title">All Users</h1>
      <ol class="breadcrumb">
        <li><a href="dashboard_main">Dashboard</a></li>
        <li><a href="#">Manage Users</a></li>
        <li class="active">All Users</li>
      </ol>

    <!-- Start Page Header Right Div -->
    <div class="right">
      <div class="btn-group" role="group" aria-label="...">
        <a href="dashboard_main" class="btn btn-light">Dashboard Admin</a>
       <!--  <a href="#" class="btn btn-light"><i class="fa fa-refresh"></i></a>
        <a href="#" class="btn btn-light"><i class="fa fa-search"></i></a>
        <a href="#" class="btn btn-light" id="topstats"><i class="fa fa-line-chart"></i></a> -->
      </div>
    </div>
    <!-- End Page Header Right Div -->

  </div>
  <!-- End Page Header -->

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
<div class="container-default">

  <?php
   		$SQL = "select * from user";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		$number1 = mysqli_num_rows($rst);
  ?>

<div class="row">
<!-- Start Project Stats -->
    <div class="col-md-12 ">
      <div class="panel panel-widget">
        <div class="panel-title">
          รายชื่อผู้ใช้งานทั้งหมด<span class="label label-info"><?php print $number1?></span>
          <ul class="panel-tools">
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
          <!--   <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li> -->
          </ul>
        </div>

        <div class="panel-search">
          <form>
            <input type="text" class="form-control" placeholder="Search...">
            <i class="fa fa-search icon"></i>
          </form>
        </div>


        <div class="panel-body table-responsive">

          <table class="table table-hover">
            <thead>
              <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Type</td>
                <td>Status</td>
                <td class="text-right">Action</td>
              </tr>
            </thead>
            <tbody>
<?php
		

		$page = $_REQUEST["page"];
		if($number1>0) { 		
			$qty = 10;
			if($page=="" || $page<=0) {
				$page = 1;
			} else {
				$page = $page;
			}
			$limit = " limit ".(($page-1)*$qty).",".$qty;	

			if($number1>0) {
				if(($number1%$qty)>0) { $totalpage = (intval($number1/$qty))+1; }
				else { $totalpage = ($number1/$qty); }
			}
		}
			

		$SQL = "select u.*, r.roleTitle from user as u, role as r where u.role_ID=r.role_ID order by u.user_ID desc $limit";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		while(	$tmp = mysqli_fetch_array($rst)) {
?>
              <tr>
                <td><?php print $tmp["user_ID"]?></td>
                <td><?php print $tmp["firstName"]?> <?php print $tmp["lastName"]?></td>
                <td><?php print $tmp["email"]?></td>
                <td><?php print $tmp["roleTitle"]?></td>
                <td>
				<?php if($tmp["role_ID"]==2) { ?>
					<?php if($tmp["approveStatus_ID"]==0) { ?>
						<span class="label label-warning">รออนุมัติ</span>
					<?php } elseif($tmp["approveStatus_ID"]==1) { ?>
						<span class="label label-default">อนุมัติแล้ว</span>
            <?php } elseif($tmp["approveStatus_ID"]==4) { ?>
            <span class="label label-primary">บัญชีถูกระงับ</span>
            <?php } elseif($tmp["approveStatus_ID"]==5) { ?>
            <span class="label label-info">ปลดระงับแล้ว</span>
					<?php } else { ?>
						<span class="label label-danger">ไม่อนุมัติ</span>
					<?php } ?>
				<?php } ?>
				
				</td>
                <td class="text-right">  <div class="btn-group" role="group" aria-label="...">
				<?php  if($tmp["role_ID"]==2 && $tmp["evidenceFile"]!="") { ?>
                  <a type="button" class="btn btn-default" href="../../../uploadfile/evidence/<?php print $tmp["evidenceFile"]?>" target="_blank">ดู</a> 
				<?php } ?>
				<?php  if(($tmp["approveStatus_ID"]==0 || $tmp["approveStatus_ID"]==2) && $tmp["role_ID"]==2) { ?>
                  <a type="button" class="btn btn-info" onclick="return approv(1);" href="?user_ID=<?php print $tmp["user_ID"]?>&action=1">อนุมัติ</a> 
				<?php } ?>
				<?php  if(($tmp["approveStatus_ID"]==0 || $tmp["approveStatus_ID"]==1)  && $tmp["role_ID"]==2 ) { ?>
                  <a type="button" class="btn btn-warning" onclick="return approv(0);" href="?user_ID=<?php print $tmp["user_ID"]?>&action=2">ไม่อนุมัติ</a>          
				<?php } ?>

        <?php  if(($tmp["approveStatus_ID"]==1 || $tmp["approveStatus_ID"]==5)  && $tmp["role_ID"]==2 ) { ?>
                  <a type="button" class="btn btn-primary" onclick="return approv(2);" href="?user_ID=<?php print $tmp["user_ID"]?>&action=3">ระงับบัญชี</a>          
        <?php } ?>
        <?php  if(($tmp["approveStatus_ID"]==4)  && $tmp["role_ID"]==2 ) { ?>
                  <a type="button" class="btn btn-option1" onclick="return approv(3);" href="?user_ID=<?php print $tmp["user_ID"]?>&action=4">ยกเลิกการระงับบัญชี</a>          
        <?php } ?>
                 <!-- <a type="button" class="btn btn-success" href="add-users?user_ID=<?php print $tmp["user_ID"]?>">แก้ไข</a>-->
                  <a type="button" class="btn btn-danger" onclick="return remove_user();" href="?user_ID=<?php print $tmp["user_ID"]?>&action=delete">ลบ</a>
          
                </div></td>
              </tr>
<?php } ?>
            </tbody>
          </table>

        </div>
      </div>
      <center>
		<nav>
		  <ul class="pagination">
			<li>
			<?php if($page>1) {?>
			  <a href="?find=<?php print $find?>&page=<?php print ($page-1)?>" aria-label="Previous">
				<span aria-hidden="true">&laquo;</span>
			  </a>
			 <?php } ?>
			</li>
		 <?php for($i=1;$i<=$totalpage;$i++) { ?>
			<li <?php print ($page==$i)?"class=\"active\"":""?>><a href="?find=<?php print $find?>&page=<?php print ($i)?>"><?php print $i?></a></li>
		<?php } ?>
			<li>
			<?php if($page<$totalpage) {?>
			  <a href="?find=<?php print $find?>&page=<?php print ($page+1)?>" aria-label="Next">
				<span aria-hidden="true">&raquo;</span>
			  </a>
			 <?php } ?>
			</li>
		  </ul>
		</nav>
          </center>
    </div>
    <!-- Start Project Stats -->
   

</div>
</div>
<!-- END CONTAINER -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 

<!-- Start Footer -->
<div class="row footer">
  <div class="col-md-6 text-left">
  Copyright © 2018 <a href="#" target="_blank">Justroolaws</a> All rights reserved.
  </div>
  <div class="col-md-6 text-right">
    Design and Developed by <a href="#" target="_blank">Nuthakul N.</a>
  </div> 
</div>
<!-- End Footer -->



</div>
<!-- End Content -->
 <!-- //////////////////////////////////////////////////////////////////////////// --> 



<!-- ================================================
jQuery Library
================================================ -->
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src="../assets/js/bootstrap/bootstrap.min.js"></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script type="text/javascript" src="../assets/js/plugins.js"></script>

<!-- ================================================
Bootstrap Select
================================================ -->
<script type="text/javascript" src="../assets/js/bootstrap-select/bootstrap-select.js"></script>

<!-- ================================================
Bootstrap Toggle
================================================ -->
<script type="text/javascript" src="../assets/js/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- ================================================
Bootstrap WYSIHTML5
================================================ -->
<!-- main file -->
<script type="text/javascript" src="../assets/js/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js"></script>
<!-- bootstrap file -->
<script type="text/javascript" src="../assets/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

<!-- ================================================
Summernote
================================================ -->
<script type="text/javascript" src="../assets/js/summernote/summernote.min.js"></script>

<script>

	function approv(s) {
		if(s==0) {
			if(confirm('คุณต้องการไม่อนุมัติรายการนี้หรือไม่?')) {
				return true;
			} else {
				return false;
			}
		} if(s==1){
			if(confirm('คุณต้องการอนุมัติรายการนี้หรือไม่?')) {
				return true;
			} else {
				return false;
			}
		}
    if (s==2) {
      if(confirm('คุณต้องการระงับบัญชีผู้ใช้รายการนี้หรือไม่?')) {
        return true;
      } else {
        return false;
      }
    }
    if (s==3) {
      if(confirm('คุณต้องการยกเลิกการระงับบัญชีผู้ใช้รายการนี้หรือไม่?')) {
        return true;
      } else {
        return false;
      }
    }
	}

	function remove_user() {
		if(confirm('คุณต้องลบรายการนี้หรือไม่?')) {
			return true;
		} else {
			return false;
		}
	}


</script>

</body>
</html>