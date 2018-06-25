
<?php
	session_start();

//** Must use full directory **//
// 	require('/home/a4qmwj6sc7xi/public_html/db/connect.php');



//** Define Root directory แบบย่อ diectory path **//
define('ROOT',str_replace("\\",'/',dirname(__FILE__)));

require(ROOT.'/../../db/connect.php');

//** End Define Root directory **//


//** Test Query data fron DB **//
// $sqlcontactDetail1 = mysqli_query($link,"SELECT * FROM role ");
// $loadcontactDetail1 = mysqli_fetch_array($sqlcontactDetail1);

// echo "<br/>";
// echo $loadcontactDetail1[roleTitle];
// echo "<br/>";
// echo $loadcontactDetail1[roleDetail];

//** END Test Query data fron DB **//
?>
	

<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title> Justroolaws | Law Consulting Website  </title>

	<!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="../favicon.ico">

	<!-- Web Fonts -->
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,800&amp;subset=cyrillic,latin">

	<!-- CSS Global Compulsory -->
  <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/app.css">
  <link rel="stylesheet" href="../assets/css/blocks.css">
  <link rel="stylesheet" href="../assets/css/one.style.css">


	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="../assets/plugins/animate.css">
	<link rel="stylesheet" href="../assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="../assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../assets/plugins/sky-forms-pro/skyforms/css/sky-forms.css">
	<link rel="stylesheet" href="../assets/plugins/owl-carousel2/assets/owl.carousel.css">
	<link rel="stylesheet" href="../assets/plugins/master-slider/masterslider/style/masterslider.css">
	<link rel="stylesheet" href="../assets/plugins/master-slider/u-styles/testimonials-1.css">

	<!-- REVOLUTION STYLE SHEETS -->
	<link rel="stylesheet" href="../assets/plugins/revolution-slider/revolution/css/settings.css">
	<!-- REVOLUTION LAYERS STYLES -->
	<link rel="stylesheet" href="../assets/plugins/revolution-slider/revolution/css/layers.css">
	<!-- REVOLUTION NAVIGATION STYLES -->
	<link rel="stylesheet" href="../assets/plugins/revolution-slider/revolution/css/navigation.css">

  <!-- CSS Theme -->
  <link rel="stylesheet" href="assets/css/lawyer.style.css">

  <!-- CSS Customization -->
  <link rel="stylesheet" href="assets/css/custom.css">

  <style type="text/css">
  	.footerbg {

  	background-color: #78aed3;
  	}

  </style>
</head>

<body id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery lawyer-style">
	<main class="wrapper">
		
<?php
	


//** Define Root directory แบบย่อ diectory path **//
define('ROOT',str_replace("\\",'/',dirname(__FILE__)));

require(ROOT.'/../../page/en/header2.php');

//** End Define Root directory **//

?>

<!-- Promo Block -->
		<div class="promo g-theme-bg-color-1">
			<div class="rev_slider_wrapper fullwidthbanner-container" data-alias="image-hero20">
				<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
				<div id="rev_slider_20_1" class="rev_slider fullwidthabanner" style="display: none;" data-version="5.0.7">
					<ul>
						<!-- SLIDE  -->
						<li data-index="rs-68" data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="http://thelens.news/wp-content/uploads/2017/12/Criminal-Justice-email.jpg" data-rotate="0" data-saveperformance="off" data-title="Intro" data-description="">

							<!-- MAIN IMAGE -->
							<img src="http://thelens.news/wp-content/uploads/2017/12/Criminal-Justice-email.jpg" alt="" data-bgposition="50% 10%" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

							<!-- LAYERS -->

							<!-- LAYER NR. 1 -->
							<div class="tp-caption tp-shape tp-shapewrapper rs-parallaxlevel-0"
								id="slide-68-layer-10"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
								data-width="full"
								data-height="full"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"

								data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;"
								data-transform_out="s:300;s:300;"
								data-start="750"
								data-basealign="slide"
								data-responsive_offset="on"
								data-responsive="off"

								style="z-index: 5; background-color: rgba(78,67,83,.4); border-color: rgba(78,67,83,.5);">
							</div>

							<!-- LAYER NR. 3 -->
							<div class="tp-caption NotGeneric-Title tp-resizeme rs-parallaxlevel-0"
								id="slide-68-layer-1"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['-60','-60','-22','-29']"
								data-fontsize="['60','60','60','40']"
								data-lineheight="['64','64','64','44']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"

								data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
								data-mask_in="x:0px;y:0px;"
								data-mask_out="x:inherit;y:inherit;"
								data-start="1000"
								data-splitin="none"
								data-splitout="none"
								data-responsive_offset="on"

								style="z-index: 7; white-space: nowrap; text-align: center; text-transform: uppercase;">เกี่ยวกับเรา<br> 
							</div>

							<!-- LAYER NR. 4 -->
							<div class="tp-caption NotGeneric-SubTitle tp-resizeme rs-parallaxlevel-0"
								id="slide-68-layer-4"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['52','52','28','13']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"

								data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeInOut;"
								data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
								data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;"
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
								data-start="1000"
								data-splitin="none"
								data-splitout="none"
								data-responsive_offset="on"

								style="z-index: 8; white-space: nowrap; text-align: center; text-transform: uppercase; letter-spacing: 1px; font-size: 24px; margin: 2px; line-height: 28px; ">เว็บไซต์ที่เข้ามาช่วยให้คุณ <br>เข้าถึงกฎหมายต่างๆ ในชีวิตประจำวันได้มากขึ้น<br> เข้าใจง่าย ค้นหารวดเร็ว และ แบ่งปันประสบการณ์ ร่วมกัน <br> 
							</div>

							<!-- LAYER NR. 5 -->
							<div class="tp-caption NotGeneric-CallToAction rev-btn rs-parallaxlevel-0"
								id="slide-68-layer-7"
								data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
								data-y="['middle','middle','middle','middle']" data-voffset="['134','134','80','65']"
								data-width="none"
								data-height="none"
								data-whitespace="nowrap"
								data-transform_idle="o:1;"
								data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
								data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"

								data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
								data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
								data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
								data-start="1250"
								data-splitin="none"
								data-splitout="none"
								data-actions='[{"event":"click","action":"scrollbelow","offset":"0px"}]'
								data-responsive_offset="on"
								data-responsive="off"

								style="z-index: 9; font-weight: bold; white-space: nowrap; outline: none; box-shadow: none; box-sizing: border-box; text-transform: uppercase; border-width: 2px; letter-spacing: 1px; font-size: 17px;">เพิ่มเติม
							</div>
						</li>
					</ul>
					<div class="tp-static-layers"></div>
					<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
				</div>
			</div><!-- END REVOLUTION SLIDER -->


		</div>
		<!-- End Promo Block -->
		<!-- Services section -->
		<section id="services">
			<div class="container g-pt-100 g-pb-40">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="g-heading-v9 text-center g-mb-30">
							<h2><strong>บริการของเรา</strong></h2>
						</div>
						<p class="text-center g-fs-16 g-mb-60">JustRooLaws เป็นเว็บไซต์ที่ให้บริการข้อมูลเกี่ยวกับกฎหมายในชีวิตประจำวัน รวมถึงการให้คำปรึกษาจากนักกฎหมาย มีฟังก์ชั่นที่จะมารองรับความต้องการ และเสริมสร้างความสะดวกสบายให้แก่ผู้ใช้งานอย่างมากมาย </p>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 content-boxes-v7">
						<i class="fa fa-user-secret pull-left g-theme-text-color-1"></i>
						<div class="content-boxes-in-v7">
							<h4 class="text-uppercase"><strong>บทความเกี่ยวกับกฎหมายในชีวิตประจำวัน</strong></h4>
							<p>รวบรวมบทความเกี่ยวกับกฎหมายในชีวิตประจำวัน ที่น่ารู้ น่าสนใจ สดใหม่ และมีคุณภาพมาเพื่อประชาชนคนไทยทุกคน</p>
						</div>
					</div>
					<div class="col-sm-6 content-boxes-v7">
						<i class="fa fa-institution pull-left g-theme-text-color-1"></i>
						<div class="content-boxes-in-v7">
							<h4 class="text-uppercase"><strong>ให้คำปรึกษาเกี่ยวกับกฎหมายในชีวิตประจำวัน</strong></h4>
							<p>ให้คำปรึกษาเกี่ยวกับกฎหมายในชีวิตประจำวันผ่าน Live Chat โดยนักกฎหมายที่ม่ีความสามารถ และประสบการณ์</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 content-boxes-v7">
						<i class="fa fa-suitcase pull-left g-theme-text-color-1"></i>
						<div class="content-boxes-in-v7">
							<h4 class="text-uppercase"><strong>ค้นหาบทความกฎหมายได้รวดเร็ว</strong></h4>
							<p>ทำการค้นหาบทความกฎหมายที่คุณต้องการได้อย่างรวดเร็ว ทันใจ </p>
						</div>
					</div>
					<div class="col-sm-6 content-boxes-v7">
						<i class="fa fa-money pull-left g-theme-text-color-1"></i>
						<div class="content-boxes-in-v7">
							<h4 class="text-uppercase"><strong>ระบบ CMS สำหรับสมาชิกและนักกฎหมาย</strong></h4>
							<p>ระบบ CMS จัดการข้อมูลเนื้อหาบทความเกี่ยวกับ ประสบการณ์ และข้อกฎหมายในชีวิตประจำวัน โดย สมาชิก และ นักกฎหมาย ภายในเว็บไซต์ของเรา </p>
						</div>
					</div>
				</div>


			</div>
		</section>
		<!-- End Services section -->




		<!-- About section -->
		<section id="about" class="arrow-section">
			<div class="container-fluid no-column-space">
				<div class="row equal-height-columns">
					<div class="col-sm-4 g-text-color-1">
						<div class="arrow-section-block arrow-bottom text-center equal-height-column">
							<h3 class="text-uppercase g-mb-30"><strong>พวกเราคือความทันสมัย</strong></h3>
							<p>พวกเราทำการพัฒนาเว็บไซต์อย่างต่อเนื่อง สามารถใช้งานผ่าน Mobile หรือ Desktop ก็ได้อย่างสะดวกสบาย และพวกเรายังคงมุ่งมั่นที่จะพัฒนาให้ดียิ่งขึ้นต่อไปในอนาคต </p>
						</div>
						<div class="arrow-section-img"><img class="full-width" src="http://jclao.com/wp-content/uploads/2017/11/NA-Seeks-Radical-Changes-To-Law-On-Criminal-Procedure.jpg" alt=""></div>
					</div>
					<div class="col-sm-4 g-text-color-2 g-theme-bg-color-1">
						<div class="arrow-section-img"><img class="full-width" src="http://jclao.com/wp-content/uploads/2017/11/NA-Seeks-Radical-Changes-To-Law-On-Criminal-Procedure.jpg" alt=""></div>
						<div class="arrow-section-block arrow-top text-center equal-height-column">
							<h3 class="text-uppercase g-mb-30"><strong>พวกเราคือความห่วงใย</strong></h3>
							<p>เราห่วงใยที่จะรับฟังปัญหาด้านกฎหมายที่เกิดคุณกับคุณ เพียงแค่บอกพวกเราผ่าน Live Chat หรือ Offline Message ไม่นานทีมนักกฎหมายที่มีประสบการณ์จะเข้ามาช่วยเหลือ และให้คำแนะนำคุณอย่างสุดความสามารถ</p>
						</div>
					</div>
					<div class="col-sm-4 g-text-color-1">
						<div class="arrow-section-block arrow-bottom text-center equal-height-column">
							<h3 class="text-uppercase g-mb-30"><strong>พวกเราคือผู้ช่วยของคุณ</strong></h3>
							<p>เราคือผู้ช่วยให้คุณเข้าถึงข้อมูล และความรู้เกี่ยวกับกฎหมายในชีวิตประจำวันได้มากขึ้น โดยนำเสนอบทความที่เข้าใจง่าย และ ระบบการใช้งานเว็บไซต์ที่ไม่ซับซ้อน.</p>
						</div>
						<div class="arrow-section-img"><img class="full-width" src="http://jclao.com/wp-content/uploads/2017/11/NA-Seeks-Radical-Changes-To-Law-On-Criminal-Procedure.jpg" alt=""></div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About section -->

		

			
<?php
	
//** Define Root directory แบบย่อ diectory path **//


require(ROOT.'/../../page/en/footer.php');

//** End Define Root directory **//

?>
		<!-- End Footer -->
	</main>

	<!-- JS Global Compulsory -->
	<script src="../assets/plugins/jquery/jquery.min.js"></script>
	<script src="../assets/plugins/jquery/jquery-migrate.min.js"></script>
	<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- JS Implementing Plugins -->
	<script src="../assets/plugins/smoothScroll.js"></script>
	<script src="../assets/plugins/jquery.easing.min.js"></script>
	<script src="../assets/plugins/owl-carousel2/owl.carousel.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?signed_in=true&amp;callback=initMap" async defer></script><script src="assets/js/plugins/gmaps-ini.js"></script>
	<script src="../assets/plugins/master-slider/masterslider/masterslider.min.js"></script>

	<script src="../assets/plugins/revolution-slider/revolution/js/jquery.themepunch.tools.min.js"></script>
	<script src="../assets/plugins/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js"></script>

	<!-- SLIDER REVOLUTION 5.0 EXTENSIONS (Load Extensions only on Local File Systems! The following part can be removed on Server for On Demand Loading) -->
	<script src="../assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="../assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="../assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="../assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="../assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="../assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="../assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="../assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="../assets/plugins/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js"></script>

	<!-- JS Page Level-->
	<script src="../assets/js/one.app.js"></script>
	<script src="assets/js/plugins/owl-carousel2.js"></script>
	<script src="assets/js/plugins/promo.js"></script>
	<script src="assets/js/plugins/testimonials.js"></script>

	<script>
	$(function() {
		App.init();
		OwlCarousel.initOwlCarousel();
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

	<!--[if lt IE 10]>
		<script src="../assets/plugins/sky-forms-pro/skyforms/js/jquery.placeholder.min.js"></script>
	<![endif]-->
</body>
</html>
