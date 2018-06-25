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
  $strSQL = "SELECT u.*, r.roleTitle FROM user as u, role as r WHERE u.user_ID = '".$_SESSION['user_ID']."' and r.role_ID=u.role_ID ";
  $objQuery = mysqli_query($link,$strSQL);
  $objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
/*
$nameuser = $objResult["firstName"];
$lastnameuser = $objResult["lastName"];
$roletitle = $objResult["roleTitle"];
*/
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
    <!-- <ul class="topmenu">
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
    </ul> -->
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
    <h1 class="title">Dashboard</h1>
      <ol class="breadcrumb">
        <li class="active">This is a quick overview of some features</li>
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

    <!-- Start Chart Daily -->
     <!-- <div class="col-md-12 col-lg-7"> -->
    <div class="col-md-12 ">
      <div class=" panel-widget widget chart-with-stats clearfix" style="height:450px;">

<?php
	$SQL = "select count(*) as cnt from search_index ";
	$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
	$tmp = mysqli_fetch_array($rst);
?>
        <div class="col-sm-12" style="height:450px;">
          <h4 class="title">สถิติคำค้น<small>Last update: 1 Hours ago</small></h4>
          <div class="top-label"><h2><?php print $tmp["cnt"]?></h2><h4>Today Total</h4></div>

          	<canvas id="myChart1" width="400" height="180" </canvas>

        </div>

        

<?php
	$SQL = "select count(searchKeyword) as cnt, searchKeyword from search_index group by searchKeyword order by cnt desc limit 0,3 ";
	$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
?>

        <div class="right" style="height:450px;">
          <h4 class="title">คำค้นยอดนิยม</h4>
          <!-- start stats -->
          <ul class="widget-inline-list clearfix">
<?php 	$tmp = mysqli_fetch_array($rst);?>
			<li class="col-12"><span><?php print $tmp["cnt"]?></span><?php print $tmp["searchKeyword"]?><i class="chart sparkline-green"></i></li>
<?php 	$tmp = mysqli_fetch_array($rst);?>
            <li class="col-12"><span><?php print $tmp["cnt"]?></span><?php print $tmp["searchKeyword"]?><i class="chart sparkline-blue"></i></li>
<?php 	$tmp = mysqli_fetch_array($rst);?>
            <li class="col-12"><span><?php print $tmp["cnt"]?></span><?php print $tmp["searchKeyword"]?><i class="chart sparkline-red"></i></li>
          </ul>
          <!-- end stats -->
        </div>


      </div>
    </div>
    <!-- End Chart Daily -->

  </div>  
  <!-- End First Row -->






  <!-- Start Fourth Row -->
  <div class="row">

<?php
/*	
	if($_GET["user_ID"]!="" && $_GET["status"]!="" && $_GET["table"]=="user") {

		if($_GET["status"]==1) {
			$SQL = "update user set approveStatus_ID=1, key_ID=1, LCEnable_ID=1 where user_ID=".$_GET["user_ID"];
		} else {
			$SQL = "update user set approveStatus_ID=2 where user_ID=".$_GET["user_ID"];
		}
#print $SQL;
		mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);

	} elseif($_GET["user_ID"]!="" && $_GET["action"]!="" && $_GET["table"]=="user") {
		$SQL = "delete from user where user_ID='".$_GET["user_ID"]."'";
		mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
	}
*/
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

  // elseif($_GET["user_ID"]!="" && $_GET["action"]=="3") {
  //   $SQL = "update user set approveStatus_ID='4' where user_ID='".$_GET["user_ID"]."'";
  //   mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);

  //   $SQL = "select * from user where user_ID='".$_GET["user_ID"]."'";
  //   $rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
  //   $tmp = mysqli_fetch_array($rst);

  //   $HTML = file_get_contents("email-deactivate.html");
  //   $HTML = str_replace("%showfirstname%",$tmp["firstName"],$HTML);
  //   $HTML = str_replace("%showlastname%",$tmp["lastName"],$HTML);
  //   $HTML = str_replace("%showemail%",$tmp["email"],$HTML);
  //   $HTML = str_replace("%showphone%",$tmp["tel"],$HTML);

  //   send_mail("JustRooLaws", "reply@justroolaws.com", $tmp["email"], "Warning! Your account has been Deactivate . Do Not Reply", $HTML);
  // }

	$SQL = "select * from user where role_ID=2 and approveStatus_ID=0 ";
	$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
?>

   <!-- Start Project Stats -->
    <div class="col-md-12 col-lg-8 ">
      <div class="panel panel-widget">
        <div class="panel-title">
          รายชื่อนักกฎหมายรอการอนุมัติ <span class="label label-info"><?php print mysqli_num_rows($rst);?></span>
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
                <td class="text-right">Action</td>
              </tr>
            </thead>
            <tbody>
<?php
		$SQL = "select u.*, r.roleTitle from user as u, role as r where u.role_ID=r.role_ID and u.approveStatus_ID=0 and (u.role_ID=2) order by u.user_ID desc limit 0,5";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		while(	$tmp = mysqli_fetch_array($rst)) {
?>
              <tr>
                <td><?php print $tmp["user_ID"]?></td>
                <td><?php print $tmp["firstName"]?> <?php print $tmp["lastName"]?></td>
                <td><?php print $tmp["email"]?></td>
                <td><?php print $tmp["roleTitle"]?></td>
                <td class="text-right">  <div class="btn-group" role="group" aria-label="...">
				<?php if($tmp["role_ID"]==2) { ?>
					<?php if($tmp["evidenceFile"]!="") { ?>
                  <a type="button" class="btn btn-default" href="../../../uploadfile/evidence/<?php print $tmp["evidenceFile"]?>" target="_blank">ดู</a> 
					<?php } ?>
                  <a type="button" class="btn btn-info" onclick="return approv(1);" href="?user_ID=<?php print $tmp["user_ID"]?>&action=1">อนุมัติ</a> 
                  <a type="button" class="btn btn-danger" onclick="return approv(0);" href="?user_ID=<?php print $tmp["user_ID"]?>&action=2">ไม่อนุมัติ</a> 
                    
                       
				 <?php } else { ?>
                  <a type="button" class="btn btn-danger" onclick="return remove_user();" href="?user_ID=<?php print $tmp["user_ID"]?>&action=delete">ลบ</a>
				<?php } ?>
                </div></td>
              </tr>
<?php } ?>

            </tbody>
          </table>

        </div>
      </div>
    </div>
    <!-- Start Project Stats -->

   <?php
  		$SQL = "select * from download_resource";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
 
   ?>
    <!-- Start Files -->
    <div class="col-md-12 col-lg-4">
      <div class="panel panel-widget" style="height:628px;">
        <div class="panel-title">
          ทรัพยากรให้ดาวน์โหลด <span class="label label-danger"><?php print mysqli_num_rows($rst);?></span>
          <ul class="panel-tools">
            <li><a class="icon"><i class="fa fa-refresh"></i></a></li>
            <!-- <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li> -->
          </ul>
        </div>
        <div class="panel-body table-responsive">

          <table class="table table-dic table-hover ">
            <tbody>
<?php
		$SQL = "select * from download_resource order by dw_ID desc limit 0,6";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		while(	$tmp = mysqli_fetch_array($rst)) {
			$arr = explode(".", $tmp["dwFile"]);
?>
              <tr>
                <td><i class="fa fa-file"></i><?php print $tmp["dwTitle"]?></td>
                <td><?php print strtoupper(end($arr))?></td>
                <td class="text-r"><?php print date ("d/m/Y", filemtime("../../../uploadfile/resources/".$tmp["dwFile"]))?></td>
              </tr>
<?php } ?>
			</tbody>
          </table>          

        </div>
      </div>
    </div>
    <!-- End Files -->
    


  </div>
  <!-- End Fourth Row -->


  <!-- Start Fifth Row -->
  <div class="row">

<?php

	$SQL = "select * from lawArticle  ";
	$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);

?>

     <!-- Start Orders -->
    <!-- <div class="col-md-12 col-lg-6"> -->
    <div class="col-md-12 ">
      <div class="panel panel-widget">
        <div class="panel-title">
          บทความล่าสุด <span class="label label-warning"><?php print mysqli_num_rows($rst);?></span>
          <ul class="panel-tools">
            <li><a class="icon search-tool"><i class="fa fa-search"></i></a></li>
            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
            <!-- <li><a class="icon closed-tool"><i class="fa fa-times"></i></a></li> -->
          </ul>
        </div>

        <!-- <div class="panel-search">
          <form>
            <input type="text" class="form-control" placeholder="Search...">
            <i class="fa fa-search icon"></i>
          </form>
        </div> -->


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
		$SQL = "select l.*,t.typeTitle from lawArticle as l, articleType as t where l.type_ID=t.type_ID order by l.article_ID desc limit 0,5";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		while(	$tmp = mysqli_fetch_array($rst)) {

			$SQL = "select * from user where user_ID='".$tmp["user_ID"]."'";
			$rst1 = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
			$tmp1 = mysqli_fetch_array($rst1);
?>

			  <tr>
                <!-- <td class="text-center"><div class="checkbox margin-t-0"><input id="checkbox1" type="checkbox"><label for="checkbox1"></label></div></td> -->
                <td># <b><?php print $tmp["article_ID"]?></b></td>
                <td><?php print $tmp["lawArticleTitle"]?></td>
                <td><?php print $tmp1["firstName"]?> <?php print $tmp1["lastName"]?></td>
                <td><?php print show_date($tmp["createdDate"])?></td>
                <td><?php print $tmp["typeTitle"]?></td>
                
                <td> 

                  <div class="btn-group" role="group" aria-label="...">
                  <a type="button" class="btn btn-warning" href="add-article.php?article_ID=<?php print $tmp["article_ID"]?>">แก้ไข</a> 
                  <a type="button" class="btn btn-danger" onclick="return remove_art()" href="all-articles.php?article_ID=<?php print $tmp["article_ID"]?>&table=lawArticle&filename=<?php print $tmp["lawArticlePic"]?>">ลบ</a>
          
                </div>

              </td>
              </tr>
<?php } ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>
    <!-- End Orders -->


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
<!-- bootstrap file -->

<!-- ================================================
Summernote
================================================ -->
<script type="text/javascript" src="../assets/js/summernote/summernote.min.js"></script>


<!-- ================================================
Easy Pie Chart
================================================ -->
<!-- main file -->
<script type="text/javascript" src="../assets/js/easypiechart/easypiechart.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="../assets/js/easypiechart/easypiechart-plugin.js"></script>

<!-- ================================================
Sparkline
================================================ -->
<!-- main file -->
<script type="text/javascript" src="../assets/js/sparkline/sparkline.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="../assets/js/sparkline/sparkline-plugin.js"></script>


<!-- ================================================
Data Tables
================================================ -->
<script src="../assets/js/datatables/datatables.min.js"></script>

<!-- ================================================
Sweet Alert
================================================ -->
<script src="../assets/js/sweet-alert/sweet-alert.min.js"></script>

<!-- ================================================
Kode Alert
================================================ -->
<script src="../assets/js/kode-alert/main.js"></script>


<!-- ================================================
jQuery UI
================================================ -->
<script type="text/javascript" src="../assets/js/jquery-ui/jquery-ui.min.js"></script>

<!-- ================================================
Moment.js
================================================ -->
<script type="text/javascript" src="../assets/js/moment/moment.min.js"></script>

<!-- ================================================
Full Calendar
================================================ -->
<script type="text/javascript" src="../assets/js/full-calendar/fullcalendar.js"></script>

<!-- ================================================
Bootstrap Date Range Picker
================================================ -->
<script type="text/javascript" src="../assets/js/date-range-picker/daterangepicker.js"></script>

  <script src="js/Chart.bundle.js"></script>

<?php
	$SQL = "select count(searchKeyword) as cnt, searchKeyword  from search_index group by searchKeyword order by rand() limit 0,20";
	$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
	$x = 0;
	while($tmp = mysqli_fetch_array($rst)) {

		$label .= ($label!="")?",":"";
		$data .= ($data!="")?",":"";

		$label .= "'".$tmp["searchKeyword"]."(".$tmp["cnt"].")'";
		$data .= $tmp["cnt"];
		$x++;
	}
?>


		<script>

		var ctx = document.getElementById("myChart1");
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: [<?php print $label?>],
				datasets: [{
					label: 'สถิติคำค้น ',
					data: [<?php print $data?>],
					backgroundColor: [
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(153, 102, 255, 0.2)',
						'rgba(255, 99, 132, 0.2)',
						'rgba(54, 162, 235, 0.2)',
						'rgba(255, 206, 86, 0.2)',
						'rgba(75, 192, 192, 0.2)',
						'rgba(153, 102, 255, 0.2)'
					],
					borderColor: [
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)',
						'rgba(255,99,132,1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 86, 1)',
						'rgba(75, 192, 192, 1)',
						'rgba(153, 102, 255, 1)'
					],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});

		</script>

<script>
	function approv(s) {
		if(s==0) {
			if(confirm('คุณต้องการไม่อนุมัติรายการนี้หรือไม่?')) {
				return true;
			} else {
				return false;
			}
		} 

    if(s==1){
			if(confirm('คุณต้องการอนุมัติรายการนี้หรือไม่?')) {
				return true;
			} else {
				return false;
			}
		}
    
  
	}

	function remove_art() {
		if(confirm('คุณต้องลบบทความนี้หรือไม่?')) {
			return true;
		} else {
			return false;
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