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
    
    header("location:dashboard_member");
    exit();
  }





if($_POST["law_ID"]!="" && $_POST["type_ID"]!="" && $_POST["cate_ID"]!="" && $_POST["lawArticleTitle"]!="" && $_POST["description"]!="") {

	if($_FILES["file"]["name"]!="") {
		if($_POST["filename"]!="") {
			@unlink("../../../uploadfile/article/".$_POST["filename"]);
		}
#		include("../inc_resizeimage.php");

		$arr = explode(".", $_FILES["file"]["name"]);
		$filename = date("YmdHis").".".end($arr);

#		$rimg=new RESIZEIMAGE($_FILES["file"]["tmp_name"]);
#		if($rimg->error()) {
#			print $rimg->error();
			copy($_FILES["file"]["tmp_name"] , "../../../uploadfile/article/".$filename);
#		} else {
#			$rimg->resize_limitwh(360,360,"../../../uploadfile/article/".$filename);
#		}
#		$rimg->close();

	} else {
		$filename = $_POST["filename"];
	}

/*
	if($_FILES["file"]["name"]!="") {
		if($_POST["filename"]!="") {
			@unlink("../../../uploadfile/article/".$_POST["filename"]);
		}
		$arr = explode(".", $_FILES["file"]["name"]);
		$filename = date("YmdHis").".".end($arr);
		copy($_FILES["file"]["tmp_name"] , "../../../uploadfile/article/".$filename);
	} else {
		$filename = $_POST["filename"];
	}
	*/
	if($_POST["article_ID"]<=0) {

		$SQL = "select max(article_ID) as m from lawArticle";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		$tmp = mysqli_fetch_array($rst);

		$SQL = "insert into lawArticle (
								article_ID,
								user_ID,
								cate_ID,
								law_ID,
								type_ID,
								lawArticleTitle,
								description,
								lawArticleDetail,
								lawArticlePic,
								createdDate
							) values (
								'".($tmp["m"]+1)."',
								'".$_SESSION['user_ID']."',
								'".$_POST["cate_ID"]."',
								'".$_POST["law_ID"]."',
								'".$_POST["type_ID"]."',
								'".$_POST["lawArticleTitle"]."',
								'".$_POST["description"]."',
								'".$_POST["lawArticleDetail"]."',
								'".$filename."',
								'".date("Y-m-d H:i:s")."'
							)";
	} else {
			$SQL = "update lawArticle set 
								cate_ID='".$_POST["cate_ID"]."',
								law_ID='".$_POST["law_ID"]."',
								type_ID='".$_POST["type_ID"]."',
								lawArticleTitle='".$_POST["lawArticleTitle"]."',
								description='".$_POST["description"]."',
								lawArticleDetail='".$_POST["lawArticleDetail"]."',
								lawArticlePic='".$filename."'
							where article_ID='".$_POST["article_ID"]."'";

	}
	mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
	header("location: my-articles");

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
  <title>JustRooLaws | Consulting Website  - Member Control Page</title>

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
      <a href="dashboard_member" class="logo" >JUSTROOLAWS</a>
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
      <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><img src="../assets/img/profileimg.png" alt="img"><b><?php echo $nameuser ?> <?php echo $lastnameuser ?> </b><span class="caret"></span></a>
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
  <li><a href="dashboard_member"><span class="icon color5"><i class="fa fa-home"></i></span>Dashboard</a></li>
  <!-- <li><a href="mailbox.html"><span class="icon color6"><i class="fa fa-envelope-o"></i></span>Mailbox<span class="label label-default">19</span></a></li> -->
  <li><a href="#"><span class="icon color7"><i class="fa fa-font"></i></span>Manage Articles <span class="caret"></span></a>
    <ul>
      <li><a href="my-articles">My Articles </a></li>
      <li><a href="add-exp">Add Law Experience </a></li>
    </ul>
  </li>
 
 <!--  <li><a href="#"><span class="icon color10"><i class="fa fa-check-square-o"></i></span>Forms<span class="caret"></span></a>
    <ul>
      <li><a href="form-elements.html">Form Elements</a></li>
      <li><a href="layouts.html">Form Layouts</a></li>
      <li><a href="text-editors.html">Text Editors</a></li>
    </ul>
  </li> -->
  
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
    <h1 class="title">ADD Law Experience</h1>
      <ol class="breadcrumb">
        <li><a href="dashboard_main">Dashboard</a></li>
        <li><a href="#">Manage Articles</a></li>
        <li class="active">Add Law Experience</li>
      </ol>

    <!-- Start Page Header Right Div -->
    <div class="right">
      <div class="btn-group" role="group" aria-label="...">
        <a href="dashboard_member" class="btn btn-light">Dashboard Member</a>
       <!--  <a href="#" class="btn btn-light"><i class="fa fa-refresh"></i></a>
        <a href="#" class="btn btn-light"><i class="fa fa-search"></i></a>
        <a href="#" class="btn btn-light" id="topstats"><i class="fa fa-line-chart"></i></a> -->
      </div>
    </div>
    <!-- End Page Header Right Div -->

  </div>
  <!-- End Page Header -->

<!-- START CONTAINER -->
<div class="container-default">


  
  <!-- Start Row -->
  <div class="row">
    


    <div class="col-md-12">


<?php
		$SQL = "select * from lawArticle where article_ID='".$_GET["article_ID"]."' and user_ID='".$_SESSION["user_ID"]."'";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		$tmp = mysqli_fetch_array($rst);
?>

      <div class="panel panel-default">
        <form name="form1" id="form1" method="post" action="?"  enctype="multipart/form-data">
		<input type="hidden" name="article_ID" value="<?php print $tmp["article_ID"]?>">
		<input type="hidden" name="filename" value="<?php print $tmp["lawArticlePic"]?>">
   
                  <!-- <div class="controls">
                      <select class="form-control">
                      <option value="">Default select</option>
                    </select>
                  </div>
                  <br> -->

                   <div class="panel-body">

              


                <div class="form-group">
                  <label class="col-sm-4 control-label form-label">หมวดหมู่บทความ</label>
                  <div class="col-sm-8" >
                    <select  name="cate_ID" id="cate_ID">
                        <option value="1">ประสบการณ์ด้านกฎหมายในชีวิตประจำวัน (Law Experience)</option>                        
                      </select>                  
                  </div>
                </div>


                  <br>

                   <div class="form-group">
                  <label class="col-sm-4 control-label form-label">ประเภทบทความ</label>
                  <div class="col-sm-8">
                    <select  name="type_ID" id="type_ID">
                        <option value="1">บทความทั่วไป (General)</option>
                        <option value="2">อินโฟรกราฟิกส์ (Infographic) </option>
                        <option value="3">แนะนำภาพยนตร์ (Review Movies) </option>
                      </select>                  
                  </div>
                </div>
                <br>

			<div class="form-group">
                <label class="col-sm-4 control-label form-label">ประเภทกฎหมายที่เกี่ยวข้อง</label>
                <div class="col-sm-8" >
                    <select  name="law_ID" id="law_ID" required>
			<?php
					$SQL = "select * from lawType order by law_ID";
					$rst1 = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
					while(	$tmp1 = mysqli_fetch_array($rst1)) {
			?>
						<option value="<?php print $tmp1["law_ID"]?>" <?php print ($tmp["law_ID"]==$tmp1["law_ID"])?"selected":""?>><?php print $tmp1["lawTitle"]?> <?php if($tmp1["lawDetail"]!="") { print "(".$tmp1["lawDetail"].")"; } ?></option>
			<?php } ?>
                      </select>                

            </div>
           </div>
			<br>

                <div class="form-group">
                  <label for="input001" class="col-sm-2 control-label form-label">ชื่อบทความ</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="lawArticleTitle" id="lawArticleTitle" placeholder="title" value="<?php print $tmp["lawArticleTitle"]?>" required>
                    <span id="helpBlock" class="help-block"> ชื่อบทความ ไม่ควรเกิน 20 ตัวอักษร</span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="input001" class="col-sm-2 control-label form-label">คำอธิบายย่อ</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="description" id="description" placeholder="description" value="<?php print $tmp["description"]?>" required>
                    <span id="helpBlock" class="help-block">คำอธิบายอย่างย่อ เน้นใจความสำคัญ ดึงดูดผู้อ่าน</span>
                  </div>
                </div>

                <br>

                

        <div class="panel-title">
          Summernote
        </div>

            <div class="panel-body">

              
                <textarea class="summernote" id="lawArticleDetail" name="lawArticleDetail"><?php print $tmp["lawArticleDetail"]?></textarea> 
                <!-- <a class="btn btn-u btn-block" onclick="save()">บันทึก และอัพโหลดรูปภาพหน้าปก </a> -->

				<br>
				<strong>รูปภาพหน้าปก</strong>
				<input type="file" name="file" accept=".png, .jpg, .gif">
				<?php if($tmp["lawArticlePic"]!="") { ?>
					<a href="../../../uploadfile/article/<?php print $tmp["lawArticlePic"]?>" target="_blank"><img src="../../../uploadfile/article/<?php print $tmp["lawArticlePic"]?>"  class="img-responsive" width="300"></a>
				<?php } ?>
					<h6>*File size limit 10MB and allow (png, jpg, gif)</h6>
				<br>
                <button class="btn btn-default" type="submit">บันทึก</button>
               <!--  <a onclick="save();"  class="btn btn-success btn-lg rounded-2x  margin-bottom-20"><i class="fa fa-paper-plane"></i> Save </a> -->

            </div>
</form>
      </div>
    </div>
    

  </div>
  <!-- End Row -->

</div>
<!-- END CONTAINER -->

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
  /* BOOTSTRAP WYSIHTML5 */
  $('.textarea').wysihtml5();

  /* SUMMERNOTE*/
  $(document).ready(function() {
  $('#lawArticleDetail').summernote();
});
</script>


</body>
</html>