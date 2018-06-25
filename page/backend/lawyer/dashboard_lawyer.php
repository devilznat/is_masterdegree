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
  <title>JustRooLaws | Consulting Website - Lawyer Control Page</title>

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
   <!--  <ul class="topmenu">
      <li><a href="#">Files</a></li>
      <li><a href="#">Authors</a></li>
      <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="dropdown-toggle">My Files <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Videos</a></li>
          <li><a href="#">Pictures</a></li>
          <li><a href="#">Blog Posts</a></li>
        </ul>
      </li> -->
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
          <li><a href="add-articles"><i class="fa falist fa-font"></i>Add Law Articles</a></li>
          
          <!-- <li><a href="#"><i class="fa falist fa-file-video-o"></i>Video Gallery</a></li> -->
        </ul>
    </li>

    <!-- <li class="link">
      <a href="#" class="notifications">6</a>
    </li> -->
<?php 
        


?>
    <li class="dropdown link">
      <a href="#" data-toggle="dropdown" class="dropdown-toggle profilebox"><img src="../assets/img/lawyer.png" alt="img"><b><?php echo $nameuser ?> <?php echo $lastnameuser ?> </b><span class="caret"></span></a>
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
  <li><a href="dashboard_lawyer"><span class="icon color5"><i class="fa fa-home"></i></span>Dashboard</a></li>
  <!-- <li><a href="mailbox.html"><span class="icon color6"><i class="fa fa-envelope-o"></i></span>Mailbox<span class="label label-default">19</span></a></li> -->
  <li><a href="#"><span class="icon color7"><i class="fa fa-font"></i></span>Manage Articles<span class="caret"></span></a>
    <ul>
      <li><a href="all-articles">All Articles</a></li>
      <li><a href="add-articles">Add Articles</a></li>
    </ul>
  </li>
  
 <!--  <li><a href="#"><span class="icon color10"><i class="fa fa-check-square-o"></i></span>Forms<span class="caret"></span></a>
    <ul>
      <li><a href="form-elements.html">Form Elements</a></li>
      <li><a href="layouts.html">Form Layouts</a></li>
      <li><a href="text-editors.html">Text Editors</a></li>
    </ul>
  </li> -->
  <li><a href="livechat-link"><span class="icon color11"><i class="fa fa-diamond"></i></span>Live Chat Access</a></li>
  
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
    <h1 class="title">Dashboard Lawyer</h1>
      <ol class="breadcrumb">
        <li class="active">This is a quick overview of some features</li>
    </ol>

    <!-- Start Page Header Right Div -->
    <div class="right">
      <div class="btn-group" role="group" aria-label="...">
        <a href="dashboard_lawyer" class="btn btn-light">Dashboard Lawyer</a>
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
<div class="container-widget">

  <!-- Start Top Stats -->
  <!-- <div class="col-md-12">
  <ul class="topstats clearfix">
    <li class="arrow"></li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-dot-circle-o"></i> Today Profit</span>
      <h3>$36.45</h3>
      <span class="diff"><b class="color-down"><i class="fa fa-caret-down"></i> 26%</b> from yesterday</span>
    </li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-calendar-o"></i> This Week</span>
      <h3>$96.25</h3>
      <span class="diff"><b class="color-up"><i class="fa fa-caret-up"></i> 26%</b> from last week</span>
    </li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-shopping-cart"></i> Total Sales</span>
      <h3 class="color-up">696</h3>
      <span class="diff"><b class="color-up"><i class="fa fa-caret-up"></i> 26%</b> from last month</span>
    </li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-users"></i> Visitors</span>
      <h3>960</h3>
      <span class="diff"><b class="color-down"><i class="fa fa-caret-down"></i> 26%</b> from yesterday</span>
    </li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-eye"></i> Page View</span>
      <h3 class="color-up">46.230</h3>
      <span class="diff"><b class="color-down"><i class="fa fa-caret-down"></i> 26%</b> from yesterday</span>
    </li>
    <li class="col-xs-6 col-lg-2">
      <span class="title"><i class="fa fa-clock-o"></i> Avarage Time</span>
      <h3 class="color-down">2:10<small>min</small></h3>
      <span class="diff"><b class="color-up"><i class="fa fa-caret-up"></i> 26%</b> from last week</span>
    </li>
  </ul>
  </div> -->
  <!-- End Top Stats -->


  <!-- Start First Row -->
  <div class="row">

   

  </div>  
  <!-- End First Row -->


  <!-- Start Second Row -->
  <div class="row">



   


  </div>
  <!-- End Second Row -->


  <!-- Start Third Row -->
  <div class="row">


    


  </div>
  <!-- End Third Row -->


  <!-- Start Fourth Row -->
  <div class="row">

     <?php  
   		$SQL = "select * from lawArticle where user_ID='".$_SESSION["user_ID"]."'";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		$number1 = mysqli_num_rows($rst);
  ?>

 <!-- Start Orders -->
    <!-- <div class="col-md-12 col-lg-6"> -->
    <div class="col-md-12 ">
      <div class="panel panel-widget">
        <div class="panel-title">
          บทความล่าสุด <span class="label label-warning"><?php print $number1?></span>
          <ul class="panel-tools">
            <li><a class="icon search-tool"><i class="fa fa-search"></i></a></li>
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <!-- <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li> -->
          </ul>
        </div>

        <div class="panel-search">
          <form>
            <input type="text" class="form-control" placeholder="Search...">
            <i class="fa fa-search icon"></i>
          </form>
        </div>


        <div class="panel-body table-responsive">

          <table class="table table-hover table-striped text-center" >
            <thead>
              <tr>
               <!--  <td class="text-center"><i class="fa fa-trash"></i></td> -->
                <td>Article ID</td>
                <td>Title</td>
                <td>User</td>
                <td>Date</td>
                <td>Type</td>
                <td>Action</td>
              </tr>
            </thead>
            <tbody >
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
			

		$SQL = "select a.*, t.typeTitle from lawArticle as a, articleType as t where a.type_ID=t.type_ID and a.user_ID='".$_SESSION['user_ID']."' order by a.article_ID desc $limit";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		while(	$tmp = mysqli_fetch_array($rst)) {

			$SQL = "select * from user where user_ID='".$tmp["user_ID"]."'";
			$rst1 = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
			$tmp1 = mysqli_fetch_array($rst1);
?>

              <tr>
                <!-- <td class="text-center"><div class="checkbox margin-t-0"><input id="checkbox1" type="checkbox"><label for="checkbox1"></label></div></td> -->
                <td># <b><?php   print $tmp["article_ID"]?></b></td>
                <td><?php   print $tmp["lawArticleTitle"]?></td>
                <td><?php   print $tmp1["firstName"]?> <?php   print $tmp1["lastName"]?></td>
                <td><?php   print show_date($tmp["createdDate"])?></td>
                <td><?php   print $tmp["typeTitle"]?></td>
                
                <td> 

                  <div class="btn-group" role="group" aria-label="...">
                  <a type="button" class="btn btn-warning" href="add-articles.php?article_ID=<?php   print $tmp["article_ID"]?>">แก้ไข</a> 
                  <a type="button" class="btn btn-danger"onclick="return remove_dw();" href="all-articles.php?article_ID=<?php   print $tmp["article_ID"]?>&filename=<?php   print $tmp["lawArticlePic"]?>">ลบ</a>
          
                </div>

              </td>
              </tr>
<?php   } ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>
    <!-- End Orders -->

    


  </div>
  <!-- End Fourth Row -->


  <!-- Start Fifth Row -->
  <div class="row">




    <!-- Start BlogPost -->
   <!--  <div class="col-md-12 col-lg-3">
      <div class="panel panel-widget blog-post">
        <div class="panel-body">

          <div class="image-div color10-bg">
            <img src="../assets/img/example1.jpg" class="image" alt="img">
            <h1 class="title"><a href="#">Across the sea of space, the stars are other suns.</a></h1>
          </div>
          <p class="text">There can be no thought of finishing for ‘aiming for the stars.’ Both figuratively and literally...</p>
          <a href="#">Read More</a>
          <p class="author">
            <img src="../assets/img/profileimg.png" alt="img">
            <span>Jonathan Doe</span>
            Designer
          </p>


        </div>
      </div>
    </div> -->
    <!-- End BlogPost -->


    <!-- Start Teammates -->
   <!--  <div class="col-md-12 col-lg-3">
      <div class="panel panel-info panel-widget">
        <div class="panel-title">
          Teammates
        </div>
        <div class="panel-body">
          <ul class="basic-list image-list">
            <li><img src="../assets/img/profileimg.png" alt="img" class="img"><b>Jonathan Doe</b><span class="desc">Designer</span></li>
            <li><img src="../assets/img/profileimg2.png" alt="img" class="img"><b>Egemem Ka</b><span class="desc">Front-End Developer</span></li>
            <li><img src="../assets/img/profileimg3.png" alt="img" class="img"><b>Timmy Jefsin</b><span class="desc">Back-End Developer</span></li>
            <li><img src="../assets/img/profileimg4.png" alt="img" class="img"><b>James K. Throwing</b><span class="desc">Marketing</span></li>
            <li><img src="../assets/img/profileimg5.png" alt="img" class="img"><b>John Doe</b><span class="desc">iOS Developer</span></li>
          </ul>
        </div>
      </div>
    </div> -->
    <!-- End Teammates -->


  </div>
  <!-- End Fifth Row -->




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

	function remove_dw() {
		if(confirm('คุณต้องลบรายการนี้หรือไม่?')) {
			return true;
		} else {
			return false;
		}
	}

</script>

</body>
</html>