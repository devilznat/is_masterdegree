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

if($_POST["dwTitle"]!="" && $_POST["law_ID"]!="") {
	
	if($_FILES["file"]["name"]!="") {
		if($_POST["filename"]!="") {
			@unlink("../../../uploadfile/resources/".$_POST["filename"]);
		}
		$arr = explode(".", $_FILES["file"]["name"]);
		$filename = date("YmdHis").".".end($arr);
		copy($_FILES["file"]["tmp_name"] , "../../../uploadfile/resources/".$filename);
	} else {
		$filename = $_POST["filename"];
	}

	if($_POST["dw_ID"]<=0) {
		$SQL = "select max(dw_ID) as m from download_resource";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		$tmp = mysqli_fetch_array($rst);

		$SQL = "insert into download_resource (
						dw_ID,
						user_ID, 
						law_ID, 
						dwTitle, 
						dwFile, 
						value
					) values(
						'".($tmp["m"]+1)."',
						'".$_SESSION['user_ID']."',
						'".$_POST["law_ID"]."',
						'".$_POST["dwTitle"]."',
						'".$filename."',
						''
					) ";
	} else {
		$SQL = "update download_resource set 
						law_ID='".$_POST["law_ID"]."',
						dwTitle='".$_POST["dwTitle"]."',
						dwFile='".$filename."'
						where dw_ID='".$_POST["dw_ID"]."'";			
	}

	mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
	header("location: all-download");
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
          <li><a href="#"><i class="fa falist fa-file-image-o"></i>Add Law Experiece (Case Study)</a></li>
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
    <h1 class="title">All Articles</h1>
      <ol class="breadcrumb">
        <li><a href="dashboard_main">Dashboard</a></li>
        <li><a href="#">Manage Download Resources</a></li>
        <li class="active">Add Download Resources</li>
      </ol>

    <!-- Start Page Header Right Div -->
    <div class="right">
      <div class="btn-group" role="group" aria-label="...">
        <a href="index.html" class="btn btn-light">Dashboard</a>
        <a href="#" class="btn btn-light"><i class="fa fa-refresh"></i></a>
        <a href="#" class="btn btn-light"><i class="fa fa-search"></i></a>
        <a href="#" class="btn btn-light" id="topstats"><i class="fa fa-line-chart"></i></a>
      </div>
    </div>
    <!-- End Page Header Right Div -->

  </div>
  <!-- End Page Header -->

 <!-- //////////////////////////////////////////////////////////////////////////// --> 
<!-- START CONTAINER -->
<div class="container-default">

  <div class="row">

<?php
		$SQL = "select * from download_resource where dw_ID='".$_GET["dw_ID"]."'";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		$tmp = mysqli_fetch_array($rst);
?>
          

		<div class="col-md-12">

			<form name="form" id="form" class="sky-form" enctype="multipart/form-data"  action="?" method="post">
			<input type="hidden" name="dw_ID" value="<?php print $tmp["dw_ID"]?>">
			<input type="hidden" name="filename" value="<?php print $tmp["dwFile"]?>">
			<div class="row">
				<div class="col-xs-8">
					<H3>ประเภทกฎหมายที่เกี่ยวข้อง</H3>
					<select type="text" name="law_ID" id="law_ID" class="form-control" required>
					<option value=""></option>
			<?php
					$SQL = "select * from lawType";
					$rst1 = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
					while(	$tmp1 = mysqli_fetch_array($rst1)) {
			?>
						<option value="<?php print $tmp1["law_ID"]?>" <?php print ($tmp["dw_ID"]==$tmp1["law_ID"])?"selected":""?>><?php print $tmp1["lawTitle"]?></option>
			<?php } ?>
					</select>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-8">
					<H3>ชื่อไฟล์</H3>
					<input type="text" name="dwTitle" id="dwTitle" class="form-control" value="<?php print $tmp["dwTitle"]?>" maxlength="255" required>
				</div>
			</div>

			<div class="row">
				<div class="col-xs-8">
					<H3>เลือกไฟล์ที่ต้องการอัพโหลด</H3>
					<input type="file" name="file" accept="image/*,.pdf,.zip,.rar,.doc,.docx,.xls,.xlsx,.ppt,.pps" <?php print ($tmp["dw_ID"]<=0)?"required":""?>>
				<?php if($tmp["dwFile"]!="") { ?>
					<a href="../../../uploadfile/resources/<?php print $tmp["dwFile"]?>" target="_blank"><img src="../../../uploadfile/resources/<?php print $tmp["dwFile"]?>"  class="img-responsive" width="300"></a>
				<?php } ?>

					<h6>*File size limit 10MB and allow (pdf,zip,rar,png,jpg,doc,docx,xls,xlsx,ppt,pps)</h6>
				</div>
			</div>
			
			<br>
			<div class="row">
				<div class="col-xs-8">
					<button type="submit"  class="btn btn-success btn-lg rounded-2x  margin-bottom-20"><i class="fa fa-paper-plane"></i> อัพโหลด </button>
				</div>
			</div>

			</form>

		</div>

              

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>



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



</body>
</html>