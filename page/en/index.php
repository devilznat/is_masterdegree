
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

  	.paddingcont{
	padding-top: 60px;
    padding-bottom: 10px;
	} 

	.formselet{
	background: #fff;
    padding: 10px;
    height: 42px;
    border: none;
    color: #3498dc;
    margin: 6px;
    margin-left: 30px;
    width: 90%;
	}

	.formselet2{
	background: #fff;
    padding: 10px;
    height: 42px;
    border: none;
    color: #999ba0;
    margin: 6px;
    width: 80%;
	}

	.formselet-respon{
	background: #fff;
    padding: 10px;
    height: 42px;
    border: none;
    color: #3498dc;
   	margin: 4px;
    margin-left: -6px;
    width: 88%;
	}

	.paddingbtnjob{
	padding-top: 5px;
    /*padding-left: 5px;*/
	}

  </style>
</head>

<body id="body" data-spy="scroll" data-target=".one-page-header" class="demo-lightbox-gallery lawyer-style">
	<main class="wrapper">
		
<?php
	


//** Define Root directory แบบย่อ diectory path **//
define('ROOT',str_replace("\\",'/',dirname(__FILE__)));

require(ROOT.'/../../page/en/header.php');

//** End Define Root directory **//

?>
		<!-- Promo Block -->
		<div class="promo g-theme-bg-color-1">
			<div class="rev_slider_wrapper fullwidthbanner-container" data-alias="image-hero20">
				<!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
				<div id="rev_slider_20_1" class="rev_slider fullwidthabanner" style="display: none;" data-version="5.0.7">
					<ul>
						<!-- SLIDE  -->
						<li data-index="rs-68" data-transition="zoomout" data-slotamount="default" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000"  data-thumb="http://www.piratelaws.com/wp-content/uploads/2016/06/law5.jpg" data-rotate="0" data-saveperformance="off" data-title="Intro" data-description="">

							<!-- MAIN IMAGE -->
							<img src="http://www.piratelaws.com/wp-content/uploads/2016/06/law5.jpg" alt="" data-bgposition="50% 10%" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>

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

								style="z-index: 7; white-space: nowrap; text-align: center; text-transform: uppercase;">กฎหมาย<br> อยู่รอบตัวเรา
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

								style="z-index: 8; white-space: nowrap; text-align: center; text-transform: uppercase; line-height: 25px; letter-spacing: 2px; font-size: 18px;">เว็บไซต์คลังความรู้และให้คำปรึกษา<br> ด้านกฎหมายในชีวิตประจำวัน<br> เข้าใจง่าย สะดวก รวดเร็ว
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

	<section id="search" style="background-color: #bddbef" >
		<div class="container g-pt-100 g-pb-100">
			<div class="row">

				<div class="container">
					<div class="g-heading-v9 text-center g-mb-30">
						<h2 class="text-uppercase"><strong>ค้นหาบทความตรงใจคุณ</strong></h2>
					</div>
					<br /><br />

			<div class="col-sm text-center">
					<form name="f" action="law_articles.php" method="post" class="form-inline">
					<input type="text" name="textsearch" id="textsearch" class="form-control input-lg" placeholder="ค้นหาบทความกฎหมายเลย" size="28" />
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
<!--
					<label>กรอกคำค้น</label>
					<input type="text" name="textsearch" id="textsearch" class="form-control input-lg" placeholder="ค้นหาบทความกฎหมายเลย" />
					<select class="formselet rounded-3x " name="Category" id="Category">
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

					<div class="paddingbtnjob">
					  <a class="btn btn-block btn-lg btn-primary btn-u-lg rounded btn-u-blue-custom ladda-button" onclick="Searchlaw();"> ค้นหา</a>
					</div>
-->
				</div>

			</div>
		</div>
	</section>

<!-- Blog section -->
		<section id="blog">
			<div class="container g-pt-100 g-pb-10">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="g-heading-v9 text-center g-mb-30">
							<h2 class="text-uppercase"><strong>บทความล่าสุด</strong></h2>
						</div>
						<p class="g-fs-16 text-center g-mb-70"> บทความเกี่ยวกับกฎหมายในชีวิตประจำวัน ที่มีการนำเสนอในหลากหลายรูปแบบ อาทิเช่น บทความทั่วไป ภาพอินโฟรกราฟิกส์ และแนะนำภาพยนตร์ สามารถทำความเข้าใจได้ง่าย และเข้าถึงได้รวดเร็ว </p>
					</div>
				</div>

				<div class="row">
<?php
		
		$cnt = 1; 

		while($cnt <= 3) {
		$SQL = "select * from lawArticle where value='".$cnt."' order by article_ID desc ";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		while(	$tmp = mysqli_fetch_array($rst)) {
			
		
			$SQL = "select * from user where user_ID='".$tmp["user_ID"]."'";
			$rst1 = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
			$tmp1 = mysqli_fetch_array($rst1);
?>
					<div class="col-xs-4 col-3xs-12 lawyer-post g-mb-50">
					<?php if($tmp["lawArticlePic"]!="") { ?>
						<a href="law_articles_page.php?article_ID=<?php print $tmp["article_ID"]?>"><img class="img-responsive" src="../../uploadfile/article/<?php print $tmp["lawArticlePic"]?>" alt=""></a>
					<?php } else { ?>
						<!-- <img class="img-responsive full-width g-mb-25" src="assets/img-temp/blog/flickr.com__photos__ter-burg__9216004446__sizes__k.jpg" alt=""> -->
					<?php } ?>
						<p class="g-fs-10 g-theme-text-color-1"><strong><?php print date("F d, Y",strtotime($tmp["createdDate"]))?></strong></p>
						<h5 class="text-uppercase"><a href="law_articles_page.php?article_ID=<?php print $tmp["article_ID"]?>"><strong><?php print $tmp["lawArticleTitle"]?></strong></a></h5>
						<p class="g-fs-10 text-uppercase">โดย <?php print $tmp1["firstName"]?> <?php print $tmp1["lastName"]?></p>
						<p><?php print $tmp["description"]?></p>
						<p class="g-mt-30"><a class="btn-u btn-u-lg btn-u-red btn-u-upper" href="law_articles_page.php?article_ID=<?php print $tmp["article_ID"]?>">Read more</a></p>
					</div>
<?php   }  
				
						 $cnt++;
							}
						 ?>
<!--
					<div class="col-xs-4 col-3xs-12 lawyer-post g-mb-50">
						<img class="img-responsive full-width g-mb-25" src="assets/img-temp/blog/isorepublic.com___helical-walkway.jpg" alt="">
						<p class="g-fs-10 g-theme-text-color-1"><strong>April 27, 2015</strong></p>
						<h5 class="text-uppercase"><strong>Proin egestas purus eget pulvinar</strong></h5>
						<p class="g-fs-10 text-uppercase">by Dorian Gray for law</p>
						<p>Fusce vel aliquet arcu. Aenean malesuada a sem sed facilisis. Maecenas aliquam faucibus metus, nec auctor est.</p>
						<p class="g-mt-30"><a class="btn-u btn-u-lg btn-u-red btn-u-upper" href="#">Read more</a></p>
					</div>
					<div class="col-xs-4 col-3xs-12 lawyer-post g-mb-50">
						<img class="img-responsive full-width g-mb-25" src="assets/img-temp/blog/tkLOe7nnQ7mnMsiuijBy_hm.jpg" alt="">
						<p class="g-fs-10 g-theme-text-color-1"><strong>April 27, 2015</strong></p>
						<h5 class="text-uppercase"><strong>Proin egestas purus eget pulvinar</strong></h5>
						<p class="g-fs-10 text-uppercase">by Dorian Gray for law</p>
						<p>Fusce vel aliquet arcu. Aenean malesuada a sem sed facilisis. Maecenas aliquam faucibus metus, nec auctor est.</p>
						<p class="g-mt-30"><a class="btn-u btn-u-lg btn-u-red btn-u-upper" href="#">Read more</a></p>
					</div>
-->
				</div>
			</div>
		</section>
		<!-- End Blog section -->
		<!-- About section -->
		<!-- <section id="about" class="arrow-section">
			<div class="container-fluid no-column-space">
				<div class="row equal-height-columns">
					<div class="col-sm-4 g-text-color-1">
						<div class="arrow-section-block arrow-bottom text-center equal-height-column">
							<h3 class="text-uppercase g-mb-30"><strong>We Know Our Job</strong></h3>
							<p>Sed feugiat porttitor nunc, non dignissim ipsum vestibulum in. Donec in blandit dolor. Vivamus a fringilla lorem, vel faucibus ante. Nunc ullamcorper, justo a iaculis elementum, enim orci viverra eros, fringilla porttitor lorem eros vel odio. In rutrum tellus vitae blandit lacinia.</p>
						</div>
						<div class="arrow-section-img"><img class="full-width" src="http://jclao.com/wp-content/uploads/2017/11/NA-Seeks-Radical-Changes-To-Law-On-Criminal-Procedure.jpg" alt=""></div>
					</div>
					<div class="col-sm-4 g-text-color-2 g-theme-bg-color-1">
						<div class="arrow-section-img"><img class="full-width" src="http://jclao.com/wp-content/uploads/2017/11/NA-Seeks-Radical-Changes-To-Law-On-Criminal-Procedure.jpg" alt=""></div>
						<div class="arrow-section-block arrow-top text-center equal-height-column">
							<h3 class="text-uppercase g-mb-30"><strong>We Are The Best</strong></h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae est lorem. Aenean imperdiet nisi a dolor condimentum, id ullamcorper lacus vestibulum. Praesent pulvinar gravida efficitur. Aenean bibendum purus eu nisi pulvinar venenatis vitae non velit.</p>
						</div>
					</div>
					<div class="col-sm-4 g-text-color-1">
						<div class="arrow-section-block arrow-bottom text-center equal-height-column">
							<h3 class="text-uppercase g-mb-30"><strong>We Are Winners</strong></h3>
							<p>Aenean lobortis ante ac porttitor eleifend. Morbi massa justo, gravida sollicitudin tortor vel, dignissim viverra lectus. In varius blandit condimentum. Pellentesque rutrum mauris ornare libero imperdiet pellentesque. Ut porta consequat mi, non malesuada.</p>
						</div>
						<div class="arrow-section-img"><img class="full-width" src="http://jclao.com/wp-content/uploads/2017/11/NA-Seeks-Radical-Changes-To-Law-On-Criminal-Procedure.jpg" alt=""></div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- End About section -->

		<!-- Services section -->
		<!-- <section id="services">
			<div class="container g-pt-100 g-pb-40">
				<div class="row">
					<div class="col-sm-8 col-sm-offset-2">
						<div class="g-heading-v9 text-center g-mb-30">
							<h2><strong>What We Do</strong></h2>
						</div>
						<p class="text-center g-fs-16 g-mb-60">Sed feugiat porttitor nunc, non dignissim ipsum vestibulum in. Donec in blandit dolor. Vivamus a fringilla lorem, vel faucibus ante. Nunc ullamcorper, justo a iaculis elementum, enim orci viverra eros, fringilla porttitor lorem eros vel</p>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 content-boxes-v7">
						<i class="fa fa-user-secret pull-left g-theme-text-color-1"></i>
						<div class="content-boxes-in-v7">
							<h4 class="text-uppercase"><strong>Criminal Law</strong></h4>
							<p>Proin dignissim eget enim id aliquam. Proin ornare dictum leo, non elementum tellus molestie et. Vivamus sit amet scelerisque leo. In eu commodo est. Sed bibendum a metus ac sollicitudin. Curabitur elementum placerat elit vel accumsan.</p>
						</div>
					</div>
					<div class="col-sm-6 content-boxes-v7">
						<i class="fa fa-institution pull-left g-theme-text-color-1"></i>
						<div class="content-boxes-in-v7">
							<h4 class="text-uppercase"><strong>Civil Law</strong></h4>
							<p>nteger commodo est id erat bibendum, eu convallis dolor tempus. Fusce mollis blandit eros. Nunc quis sapien in massa varius convallis at sed justo. Praesent nec consectetur nibh, sed lobortis turpis.</p>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6 content-boxes-v7">
						<i class="fa fa-suitcase pull-left g-theme-text-color-1"></i>
						<div class="content-boxes-in-v7">
							<h4 class="text-uppercase"><strong>Business Law</strong></h4>
							<p>Aenean lobortis ante ac porttitor eleifend. Morbi massa justo, gravida sollicitudin tortor vel, dignissim viverra lectus. In varius blandit condimentum. Pellentesque rutrum mauris ornare libero imperdiet pellentesque.</p>
						</div>
					</div>
					<div class="col-sm-6 content-boxes-v7">
						<i class="fa fa-money pull-left g-theme-text-color-1"></i>
						<div class="content-boxes-in-v7">
							<h4 class="text-uppercase"><strong>Tax Law</strong></h4>
							<p>Nam et nulla rutrum, dignissim eros quis, dictum eros. In ullamcorper molestie neque, ac faucibus felis efficitur sed. Nam et tristique nisi. Cras iaculis venenatis libero. Suspendisse fermentum, ipsum ac facilisis elementu.</p>
						</div>
					</div>
				</div>


			</div>
		</section> -->
		<!-- End Services section -->

		<!-- Why we section -->
		<section id="why-we" class="g-theme-bg-color-1 g-text-color-2 no-column-space">
			<div class="container-fluid">
				<div class="row equal-height-columns">
					<div class="col-sm-6 equal-height-column g-dp-table g-va-middle">
						<div class="g-pl-80 g-pr-80 g-pl-15--xs g-pr-15--xs g-dp-table-cell g-va-middle">
							<div class="g-pt-100 g-pb-50">
								<div class="g-heading-v9 g-mb-30">
									<h2><strong>ทำไมถึงควรเลือกเรา ? </strong></h2>
								</div>
								<p class="g-fs-16 g-mb-50"> เราคือเว็บไซต์คลังความรู้และให้คำปรึกษาด้านกฎหมายในชีวิตประจำวัน ที่ทันสมัย สะดวกรวดเร็วที่สุดในยุค 4.0</p>
								<ul class="list-unstyled marked-list-v1">
									<li data-mark="+">
										<h5 class="text-uppercase"><strong> ทันสมัย</strong></h5>
										<p>เต็มไปด้วยบทความ และ กรณีตัวอย่าง ด้านกฎหมายในชีวิตประจำวัน ที่มีคุณภาพและทันสมัย </p>
									</li>
									<li data-mark="+">
										<h5 class="text-uppercase"><strong> เข้าใจง่าย </strong></h5>
										<p> คลังความรู้ด้านกฎหมายของเรา ใช้ภาษาที่เข้าใจได้ง่าย ไม่ซับซ้อนหรือเป็นทางการเกินไป เพื่ออรรธรสในการอ่านที่ดีขึ้น</p>
									</li>
									<li data-mark="+">
										<h5 class="text-uppercase"><strong> สะดวกรวดเร็ว</strong></h5>
										<p>มีระบบให้คำรปรึกษากับนักกฎหมายผ่านทาง Live Chat และ มีระบบค้นหาบทความด้านกฎหมายที่คุณต้องการได้อย่างรวดเร็ว </p>
									</li>
									
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<img class="equal-height-column" src="http://wsjlaw.com/wp-content/uploads/2012/12/wsjlaw-business-strategy.jpg" alt="" height="500">
					</div>
				</div>
			</div>
		</section>
		<!-- End Why we section -->

		<!-- Benefits section -->
		<!-- <section id="benefits" class="g-theme-bg-color-1 g-text-color-2 no-column-space">
			<div class="container-fluid">
				<div class="row equal-height-columns">
					<div class="col-sm-6">
						<img class="equal-height-column hidden-xs" src="https://dailytimes.com.pk/static/uploads/original/d0b6c0c27c96b4dccdc0669e28d88d97.jpg" alt="" height="500">
					</div>
					<div class="col-sm-6 g-dp-table g-va-middle">
						<div class="g-pl-80 g-pr-80 g-pl-15--xs g-pr-15--xs g-dp-table-cell g-va-middle equal-height-column">
							<div class="g-pt-100 g-pb-30">
								<div class="g-heading-v9 g-mb-30">
									<h2><strong>Our Benefits</strong></h2>
								</div>
								<p>Aenean lobortis ante ac porttitor eleifend. Morbi massa justo, gravida sollicitudin tortor vel, dignissim viverra lectus. In varius blandit condimentum. Pellentesque rutrum mauris ornare libero imperdiet pellentesque.</p>
								<ul class="list-unstyled standart-column-space row">
									<li class="col-md-6 g-mb-20">
										<h5 class="text-uppercase"><strong>Free Advice</strong></h5>
										<p>Praesent pulvinar gravida efficitur. Aenean bibendum purus eu nisi pulvinar venenatis vitae non velit. Sed et eleifend mi. Fusce dictum orci libero.</p>
									</li>
									<li class="col-md-6 g-mb-20">
										<h5 class="text-uppercase"><strong>Documentation Support</strong></h5>
										<p>Suspendisse pulvinar facilisis ligula vel pharetra. Vestibulum volutpat porttitor ex a rutrum. Aenean consectetur risus ultricies enim finibus lobortis non at ipsum.</p>
									</li>
									<li class="col-md-6 g-mb-20">
										<h5 class="text-uppercase"><strong>Professional Teams</strong></h5>
										<p>Integer commodo est id erat bibendum, eu convallis dolor tempus. Fusce mollis blandit eros. Nunc quis sapien in massa varius convallis at sed justo.</p>
									</li>
									<li class="col-md-6 g-mb-20">
										<h5 class="text-uppercase"><strong>60 Years Experience</strong></h5>
										<p>Ut a libero magna. Aenean sagittis nisi non ex venenatis, vel commodo tortor eleifend. Nunc feugiat, est quis rutrum sodales, nunc nibh pharetra nibh</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- End Benefits section -->

		<!-- Our cases section -->
		<section id="our-cases">
			<div class="container g-pt-100 g-pb-100">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<div class="g-heading-v9 text-center g-mb-30">
							<h2><strong>กรณีศึกษา</strong></h2>
						</div>
						<p class="g-fs-16 g-mb-60">กรณีศึกษา จากประสบการณ์ด้านกฎหมายในชีวิตประจำวัน ของ นักกฎหมาย และ สมาชิกของเว็บไซต์ได้มาร่วมแบ่งปันกันเพื่อเป็นความรู้ให้แก่ผู้อื่น</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<ul class="owl-lawyer list-unstyled g-text-color-2 equal-height-columns">

<?php
		$SQL = "select * from lawArticle where cate_ID=1 order by article_ID desc limit 0,6";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		while($tmp = mysqli_fetch_array($rst)) {
			if($tmp["lawArticleTitle"]!="") {
?>

							<li class="item">
							<a href="law_articles_page.php?article_ID=<?php print $tmp["article_ID"]?>">
								<div class="col-sm-6">
									<div class="caption-outer">
					<?php if($tmp["lawArticlePic"]!="") { ?>
						<img class="img-responsive" src="../../uploadfile/article/<?php print $tmp["lawArticlePic"]?>" alt="">
					<?php } else { ?>
										<img class="img-responsive" src="assets/img-temp/cases/PeopleImages.com-ID46357.jpg" alt="">
					<?php } ?>
										<div class="caption g-theme-bg-color-transparent-1 g-va-middle g-padding-25">
											<div class="valign__middle">
												<h5 class="text-uppercase"><strong><?php print $tmp["lawArticleTitle"]?></strong></h5>
												<p><?php print $tmp["description"]?></p>
											</div>
										</div>
									</div>
								</div>
								</a>
		<?php } ?>
		<?php $tmp = mysqli_fetch_array($rst);	?>
		<?php if($tmp["lawArticleTitle"]!="") {	?>
							<a href="law_articles_page.php?article_ID=<?php print $tmp["article_ID"]?>">
								<div class="col-sm-6">
									<div class="caption-outer">
					<?php if($tmp["lawArticlePic"]!="") { ?>
						<img class="img-responsive" src="../../uploadfile/article/<?php print $tmp["lawArticlePic"]?>" alt="">
					<?php } else { ?>
										<img class="img-responsive" src="assets/img-temp/cases/PeopleImages.com-ID1265766.jpg" alt="">
					<?php } ?>
										<div class="caption g-theme-bg-color-transparent-1 g-va-middle g-padding-25">
											<div class="valign__middle">
												<h5 class="text-uppercase"><strong><?php print $tmp["lawArticleTitle"]?></strong></h5>
												<p><?php print $tmp["description"]?></p>
											</div>
										</div>
									</div>
								</div>
								</a>
						</li>
		<?php } ?>
<?php } ?>
<!--
							<li class="item">
								<div class="col-sm-6">
									<div class="caption-outer">
										<img class="img-responsive" src="assets/img-temp/cases/PeopleImages.com-ID32142.jpg" alt="">
										<div class="caption g-theme-bg-color-transparent-1 g-va-middle g-padding-25">
											<div class="valign__middle">
												<h5 class="text-uppercase"><strong>Fusce Dictum Orci Libero</strong></h5>
												<p>Quisque rhoncus euismod pulvinar. Nulla non arcu at lectus.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="caption-outer">
										<img class="img-responsive" src="assets/img-temp/cases/PeopleImages.com-ID375436.jpg" alt="">
										<div class="caption g-theme-bg-color-transparent-1 g-va-middle g-padding-25">
											<div class="valign__middle">
												<h5 class="text-uppercase"><strong>Integer Commodo</strong></h5>
												<p>Quisque rhoncus euismod pulvinar. Nulla non arcu at lectus.</p>
											</div>
										</div>
									</div>
								</div>
							</li>

							<li class="item">
								<div class="col-sm-6">
									<div class="caption-outer">
										<img class="img-responsive" src="assets/img-temp/cases/flickr.com___photos___highwaysagency___5998133376___sizes___o.jpg" alt="">
										<div class="caption g-theme-bg-color-transparent-1 g-va-middle g-padding-25">
											<div class="valign__middle">
												<h5 class="text-uppercase"><strong>Fusce Dictum Orci Libero</strong></h5>
												<p>Quisque rhoncus euismod pulvinar. Nulla non arcu at lectus.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="caption-outer">
										<img class="img-responsive" src="assets/img-temp/cases/PeopleImages.com-ID48289.jpg" alt="">
										<div class="caption g-theme-bg-color-transparent-1 g-va-middle g-padding-25">
											<div class="valign__middle">
												<h5 class="text-uppercase"><strong>Integer Commodo</strong></h5>
												<p>Quisque rhoncus euismod pulvinar. Nulla non arcu at lectus.</p>
											</div>
										</div>
									</div>
								</div>
							</li>
-->
						</ul>
					</div>
				</div>
			</div>
		</section>
		<!-- End Our cases section -->

		<!-- Team section -->
		<!-- <section id="team">
			<div class="container g-pt-100 g-pb-40">
				<div class="row">
					<div class="col-md-3 col-sm-12">
						<div class="g-heading-v9 g-mb-30">
							<h2><strong>Meet Our Attorneys</strong></h2>
						</div>
						<p>Proin dignissim eget enim id aliquam. Proin ornare dictum leo, non elementum tellus molestie et. Vivamus sit amet scelerisque leo. In eu commodo est. Sed bibendum a metus ac sollicitudin.</p>
						<p>Curabitur elementum placerat elit vel accumsan. Quisque fermentum libero sit amet condimentum tincidunt. Proin hendrerit nec turpis sit amet aliquet. Integer libero velit, molestie et sagittis non, maximus nec turpis.</p>
						<p><a class="btn-u btn-u-lg btn-u-red btn-u-upper" href="#">Contact Us</a></p>
					</div>
					<div class="col-md-3 col-xs-4 col-3xs-12">
						<div class="team-v-8">
							<img class="img-responsive" src="assets/img-temp/team/team1.jpg" alt="">
							<p class="post text-uppercase g-theme-text-color-1 g-mb-15"><strong>Partner</strong></p>
							<h4 class="text-uppercase"><strong>eric pyton</strong></h4>
							<p class="g-mb-15">civil and criminal law</p>
							<hr>
							<p class="g-mb-5"><i class="fa fa-envelope"></i> eric@unify.com</p>
							<p><i class="fa fa-phone-square"></i> +48 555 2566 112</p>
						</div>
					</div>
					<div class="col-md-3 col-xs-4 col-3xs-12">
						<div class="team-v-8">
							<img class="img-responsive" src="assets/img-temp/team/team3.jpg" alt="">
							<p class="post text-uppercase g-theme-text-color-1 g-mb-15"><strong>Partner</strong></p>
							<h4 class="text-uppercase"><strong>sam king</strong></h4>
							<p class="g-mb-15">business and criminal law</p>
							<hr>
							<p class="g-mb-5"><i class="fa fa-envelope"></i> sam@unify.com</p>
							<p><i class="fa fa-phone-square"></i> +48 555 2566 114</p>
						</div>
					</div>
					<div class="col-md-3 col-xs-4 col-3xs-12">
						<div class="team-v-8">
							<img class="img-responsive" src="assets/img-temp/team/team2.jpg" alt="">
							<p class="post text-uppercase g-theme-text-color-1 g-mb-15"><strong>Partner</strong></p>
							<h4 class="text-uppercase"><strong>tomas klepton</strong></h4>
							<p class="g-mb-15">criminal law</p>
							<hr>
							<p class="g-mb-5"><i class="fa fa-envelope"></i> tomas@unify.com</p>
							<p><i class="fa fa-phone-square"></i> +48 555 2566 115</p>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!-- End Team section -->

		<!-- Testimonials section -->
		<!-- <section id="testimonials" class="g-theme-bg-color-1 g-text-color-2 text-center g-pt-100 g-pb-40">
			<div class="container"> -->

				<!-- Testimonials Info -->
				<!-- <div class="row g-mb-70">
					<div class="col-sm-8 col-sm-offset-2 g-heading-v9 text-center">
						<h2><strong>From Our Clients</strong></h2>
					</div>
				</div> -->
				<!-- End Testimonials Info -->

				<!-- <div class="ms-staff-carousel"> -->
					<!-- MasterSlider -->
					<!-- <div class="master-slider" id="masterslider"> -->
						<!-- Item 1 -->
						<!-- <div class="ms-slide">
							<img src="assets/plugins/master-slider/masterslider/style/blank.gif" data-src="assets/img-temp/testimonials/t1.jpg" alt="">
							<div class="ms-info">
								<h3 class="ms-info-name">Julia B. Mcraflane</h3>
								<h4 class="ms-info-position">Spencet Group</h4>
								<p><em>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt."</em></p>
							</div>
						</div> -->
						<!-- End Item 1 -->

						<!-- Item 2 -->
					<!-- 	<div class="ms-slide">
							<img src="assets/plugins/master-slider/masterslider/style/blank.gif" data-src="assets/img-temp/testimonials/t2.jpg" alt="">
							<div class="ms-info">
								<h3 class="ms-info-name">Amy Clayton</h3>
								<h4 class="ms-info-position">Abibas</h4>
								<p><em>Ut augue diam, lacinia fringilla erat eu, vehicula commodo quam. Aliquam eget accumsan ligula. Maecenas sit amet consectetur lectus. Suspendisse commodo et magna non pulvinar. Quisque</em> et ul"tricies sem, et vulputate dui. Morbi aliquam leo id ipsum tempus mo"llis.</p>
							</div>
						</div> -->
						<!-- End Item 2 -->

						<!-- Item 3 -->
						<!-- <div class="ms-slide">
							<img src="assets/plugins/master-slider/masterslider/style/blank.gif" data-src="assets/img-temp/testimonials/t3.jpg" alt="">
							<div class="ms-info">
								<h3 class="ms-info-name">Fred Penner</h3>
								<h4 class="ms-info-position">Ruma</h4>
								<p><em>"Ut augue diam, lacinia fringilla erat eu, vehicula commodo quam. Aliquam eget accumsan ligula. Maecenas sit amet consectetur lectus. Suspendisse commodo et magna non pulvinar."</em></p>
							</div>
						</div> -->
						<!-- End Item 3 -->

						<!-- Item 4 -->
						<!-- <div class="ms-slide">
							<img src="assets/plugins/master-slider/masterslider/style/blank.gif" data-src="assets/img-temp/testimonials/t4.jpg" alt="">
							<div class="ms-info">
								<h3 class="ms-info-name">Martina Saiz</h3>
								<h4 class="ms-info-position">Jonda</h4>
								<p><em>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt."</em></p>
							</div>
						</div> -->
						<!-- End Item 4 -->

						<!-- Item 5 -->
						<!-- <div class="ms-slide">
							<img src="assets/plugins/master-slider/masterslider/style/blank.gif" data-src="assets/img-temp/testimonials/t5.jpg" alt="">
							<div class="ms-info">
								<h3 class="ms-info-name">Joseph B. Seward</h3>
								<h4 class="ms-info-position">Aodi</h4>
								<p><em>"Maecenas sit amet consectetur lectus. Suspendisse commodo et magna non pulvinar. Quisque et ultricies sem, et vulputate dui. Morbi aliquam leo id ipsum tempus mollis."</em></p>
							</div>
						</div> -->
						<!-- End Item 5 -->
					<!-- </div>

					<div class="row">
						<div class="col-sm-8 col-sm-offset-2">
							<div class="ms-staff-info" id="staff-info"></div>
						</div>
					</div>
				</div> -->
				<!-- End of MasterSlider -->

				<!-- <div class="row">
						<ul class="sponsors list-unstyled equal-height-columns g-dp-table g-va-middle">
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="assets/img-temp/clients/1.png" alt="1"></a></div></li>
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="assets/img-temp/clients/2.png" alt="2"></a></div></li>
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="assets/img-temp/clients/3.png" alt="3"></a></div></li>
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="assets/img-temp/clients/4.png" alt="4"></a></div></li>
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="assets/img-temp/clients/5.png" alt="5"></a></div></li>
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="assets/img-temp/clients/6.png" alt="6"></a></div></li>
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="assets/img-temp/clients/7.png" alt="7"></a></div></li>
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="assets/img-temp/clients/8.png" alt="8"></a></div></li>
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="assets/img-temp/clients/9.png" alt="9"></a></div></li>
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="assets/img-temp/clients/10.png" alt="10"></a></div></li>
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="assets/img-temp/clients/11.png" alt="11"></a></div></li>
							<li class="equal-height-column g-dp-table g-va-middle"><div class="g-dp-table-cell g-va-middle"><a href="#"><img class="img-responsive" src="assets/img-temp/clients/12.png" alt="12"></a></div></li>
						</ul>

					</div> -->
				<!-- </div>
			</div>
		</section> -->
		<!-- End Testimonials section -->

		

		<!-- Footer -->
		
			
		<!-- Footer -->
			
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

	<script type="text/javascript">
			
			function Searchlaw(event, form){

				textsearch = $("#textsearch").val();
				category = $("#Category").val();
				

				search ="1";

				url = "law_articles?search="+search+"&textsearch="+textsearch+"&law_ID="+category;
				 window.location.assign(url);

        }

			//   $(document).ready(function(){
			//   $("form").submit(function(){
			//         alert("Submitted");
			//         Searchjob();
			//     });
			// });

		</script>


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

