<?php
  session_start();
 define('ROOT',str_replace("\\",'/',dirname(__FILE__)));

require(ROOT.'/../../db/connect.php');

  $headlink = "law_articles";

  $status = 0;
  $status = $_GET['search'];

  $gettext = $_GET['textsearch'];
  $getcategory = $_GET['category'];

  $status = 0;
  $status = $_GET['search'];

  $textsearch = $_REQUEST['textsearch'];
  $law_ID = $_REQUEST['law_ID'];

	if($textsearch!="") {
		$SQL = "select max(search_ID) as m from search_index";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		$tmp = mysqli_fetch_array($rst);

		$SQL = "insert into search_index (search_ID, searchKeyword, score, law_ID) values('".($tmp["m"]+1)."', '$textsearch','".rand(1,10)."','".(($law_ID!="")?$law_ID:0)."') ";
		mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
	}

?>


<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>JustRooLaws | Download Resource </title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Web Fonts -->
	<!-- <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'> -->
	<!-- Web Fonts solomon-->
	<link rel="stylesheet" href="../../assets/css/font/solomon2/solomon-font.css">


	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="../../assets/plugins/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="../../assets/css/headers/header-v6.css">
	<link rel="stylesheet" href="../../assets/css/footers/footer-v6.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="../../assets/plugins/animate.css">
	<link rel="stylesheet" href="../../assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="../../assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../../assets/plugins/fancybox/source/jquery.fancybox.css">
	<link rel="stylesheet" href="../../assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">

	<!-- <link rel="stylesheet" href="../../assets/blogtheme/plugins/revolution-slider/revolution/css/settings.css">
	<link rel="stylesheet" href="../../assets/blogtheme/plugins/revolution-slider/revolution/css/layers.css">
	<link rel="stylesheet" href="../../assets/blogtheme/plugins/revolution-slider/revolution/css/navigation.css"> -->
	<!-- SLIDE MASTER -->
	<link rel="stylesheet" href="../../assets/blogtheme/plugins/master-slider/masterslider/style/masterslider.css">
	<link rel="stylesheet" href="../../assets/blogtheme/plugins/master-slider/masterslider/skins/black-2/style.css">
	<link rel="stylesheet" href="../../assets/blogtheme/css/blog.style.css">


	<link rel='stylesheet' href="../../assets/plugins/ladda-buttons/css/custom-lada-btn.css">
	


	<!-- CSS Pages Style -->
	<link rel="stylesheet" href="../../assets/css/pages/page_one.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="../../assets/css/theme-colors/blue.css" id="style_color">
	<link rel="stylesheet" href="../../assets/css/theme-skins/dark.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="../../assets/css/custom.css">
	<script type="text/javascript" async src="https://mc.yandex.ru/metrika/watch.js"></script>

	<style type="text/css">
		.content {
    padding-top: 10px;
    padding-bottom: 40px;
		}
		.content-md {
    padding-top: 40px;
    padding-bottom: 80px;
		}
		.block-lastnew{
			padding-left: 0;
			width: 23.5%;
		}
		.margin{
			margin-bottom: 20px;
		}
		}
	</style>




<body class="header-fixed header-fixed-space">



	<div class="wrapper">

		<!-- require head  -->
		<?php require_once ('head-page.php');?>
		<!-- End require head  -->

			<div class="container content-sm">

			<div class="row">
				<div class="col-sm-12">
		  <?php
				$SQL = "select * from download_resource";
				$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
				$number1 = mysqli_num_rows($rst);
		  ?>

		  <div class="container">
	<div class="row">
		<div class="col-md-12 text-center">


		<form name="f" action="?" method="post" class="form-inline">
		<input type="text" name="textsearch" id="textsearch" class="form-control input-lg" placeholder="ค้นหาแบบฟอร์มกฎหมายเลย" size="28" />
		<select class="form-control input-lg" name="law_ID" id="law_ID">
			<option value="">เลือกประเภทกฎหมาย (ทั้งหมด)</option>
			<option value="1">กฎหมายทะเบียนราษฎร</option>
			<option value="2">กฎหมายว่าด้วยบัตรประจำตัวประชาชน</option>
			<option value="3">กฎหมายบุคคล (แพ่ง และพาณิชย์)</option>
			<option value="4">กฎหมายครอบครัว (แพ่ง และพาณิชย์)</option>
			<option value="5">กฎหมายเรื่องมรดก (แพ่ง และพาณิชย์)</option>
			<option value="6">กฎหมายทรัพย์ และทรัพย์สิน (แพ่ง และพาณิชย์)</option>
			<option value="7">นิติกรรมและสัญญา (แพ่ง และพาณิชย์)</option>
			<option value="8">กฎหมายอาญาเบื้องต้น</option>
		</select>
		<button class="btn btn-lg btn-primary" type="submit"> ค้นหา</button>
		</form>

		</div>
	</div>
	</div>

	<br>
				  <center>ทรัพยากรให้ดาวน์โหลด <span class="label label-danger"><?php print $number1?></span></center>
				<br>
				  <table class="table table-dic table-hover " id="data-tb">
					<tbody>

		<?php

		$SQLf = ($textsearch!="")?" where ( dwTitle like '%$textsearch%' or dwFile like '%$textsearch%') ":"";
		if($law_ID!="") {
			$SQLf .= ($SQLf!="")?" and ":" where ";
			$SQLf .= " law_ID='$law_ID' ";
		}
		$find = "&textsearch=$textsearch&law_ID=$law_ID";

		$SQL = "select * from download_resource ".$SQLf;
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		$number1 = mysqli_num_rows($rst);
				

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
					

				$SQL = "select * from download_resource $SQLf order by dw_ID desc $limit";
				$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
				while(	$tmp = mysqli_fetch_array($rst)) {
					$arr = explode(".", $tmp["dwFile"]);

					$SQL = "select * from lawType where law_ID='".$tmp["law_ID"]."'";
					$rst1 = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
					$tmp2 = mysqli_fetch_array($rst1);

		?>
			  <tr>
						<td><i class="fa fa-file" style="color:blue"></i> <?php print $tmp["dwTitle"]?></td>
						<td><?php print strtoupper(end($arr))?></td>
						<td><?php print $tmp2["lawTitle"]?></td>
						<td class="text-r"><?php print date ("F d Y H:i:s", filemtime("../../uploadfile/resources/".$tmp["dwFile"]))?></td>
						<td class="text-r"> 

						  <div class="btn-group" role="group" aria-label="...">
						  <a type="button" class="btn btn-default" href="download.php?filepath=<?php print $tmp["dwFile"]?>&filename=<?php print $tmp["dwTitle"]?>">โหลด</a> 
				  
						</div>

					  </td>
					  </tr>
		<?php } ?>
					 
					 
					</tbody>
				  </table>          


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
			</div>


		</div>

			

		<!-- requrie footer -->
		<?php require_once ('footer-homepage.php'); ?>
		<!-- End reurie footer  -->
		
		</div><!--/wrapper-->



		<!-- JS Global Compulsory -->
		<script type="text/javascript" src="../../assets/plugins/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="../../assets/plugins/jquery/jquery-migrate.min.js"></script>
		<script type="text/javascript" src="../../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
		<!-- JS Implementing Plugins -->
		<script type="text/javascript" src="../../assets/plugins/back-to-top.js"></script>
		<script type="text/javascript" src="../../assets/plugins/smoothScroll.js"></script>
		<script type="text/javascript" src="../../assets/plugins/jquery.parallax.js"></script>
		<script type="text/javascript" src="../../assets/plugins/counter/waypoints.min.js"></script>
		<script type="text/javascript" src="../../assets/plugins/counter/jquery.counterup.min.js"></script>
		<script type="text/javascript" src="../../assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
		<script type="text/javascript" src="../../assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
		<script type="text/javascript" src="../../assets/plugins/wow-animations/js/wow.min.js"></script>
		<script src="../../assets/plugins/ladda-buttons/js/spin.min.js"></script>
		<script src="../../assets/plugins/ladda-buttons/js/ladda.min.js"></script>

	<!-- 	<script src="../../assets/blogtheme/plugins/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
		<script src="../../assets/blogtheme/plugins/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>
		<script src="../../assets/blogtheme/plugins/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
		<script src="../../assets/blogtheme/plugins/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
		<script src="../../assets/blogtheme/plugins/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
		<script src="../../assets/blogtheme/plugins/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
 -->
 		<!-- Slide Master  -->
 		<script src="../../assets/blogtheme/plugins/master-slider/masterslider/masterslider.js"></script>
		<script src="../../assets/blogtheme/plugins/master-slider/masterslider/jquery.easing.min.js"></script>
		<script src="../../assets/blogtheme/plugins/modernizr.js"></script>

		<!-- JS Customization -->
		<script type="text/javascript" src="../../assets/js/custom.js"></script>
		<!-- JS Page Level -->
		<script type="text/javascript" src="../../assets/js/app.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/fancy-box.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/owl-carousel.js"></script>
		<!-- <script type="text/javascript" src="../../assets/js/plugins/master-slider-fw.js"></script> -->
		<script type="text/javascript" src="../../assets/js/plugins/style-switcher.js"></script>
		<script type="text/javascript" src="../../assets/js/plugins/ladda-buttons.js"></script>
		
		<!-- <script src="../../assets/blogtheme/js/plugins/blog-masonry.js"></script>
		<script src="../../assets/blogtheme/js/plugins/revo-slider.js"></script> -->

		<!-- Slide Master  -->
		<script src="../../assets/blogtheme/js/plugins/master-slider-showcase3.js"></script>


		
		
		<script type="text/javascript">
			jQuery(document).ready(function() {
				App.init();
				App.initCounter();
				App.initParallaxBg();
				FancyBox.initFancybox();
				// MSfullWidth.initMSfullWidth();
				OwlCarousel.initOwlCarousel();
				StyleSwitcher.initStyleSwitcher();

				MasterSliderShowcase3.initMasterSliderShowcase3();



			});

			//ANMAINT
			jQuery(document).ready(function() {
			App.init();
			StyleSwitcher.initStyleSwitcher();
			new WOW().init();
			});


		</script>
		<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ad74ad2227d3d7edc24125b/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<!--[if lt IE 9]>
	<script src="../../assets/plugins/respond.js"></script>
	<script src="../../assets/plugins/html5shiv.js"></script>
	<script src="../../assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->
<div id="topcontrol" title="Scroll Back to Top" style="position: fixed; bottom: 1px; right: 5px; opacity: 1; cursor: pointer;"></div>
</body>
</html>