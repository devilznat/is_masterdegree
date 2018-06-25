<?php
  session_start();
 define('ROOT',str_replace("\\",'/',dirname(__FILE__)));

require(ROOT.'/../../db/connect.php');

  $headlink = "law_articles";

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
	<title>Justroolaws | Law Consulting Website - Laws Articles </title>

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
		<?php require ('head-page.php');?>
		<!-- End require head  -->


		
<!-- Master Slider -->
	<div class="container content no-padding-bottom blog-ms-v2">
		<div class="master-slider ms-skin-black-2 round-skin" id="masterslider">

<?php
		$SQL = "select * from lawArticle order by article_ID desc limit 0,4";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		while($tmp = mysqli_fetch_array($rst)) {

			$SQL = "select * from lawType where law_ID='".$tmp["law_ID"]."'";
			$rst1 = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
			$tmp1 = mysqli_fetch_array($rst1);

			$SQL = "select * from articleType where type_ID='".$tmp["type_ID"]."'";
			$rst1 = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
			$tmp2 = mysqli_fetch_array($rst1);

?>

			<div class="ms-slide blog-slider">
				
			<?php if($tmp["lawArticlePic"]!="") { ?>
			
				<img src="../../uploadfile/article/<?php print $tmp["lawArticlePic"]?>" data-src="../../uploadfile/article/<?php print $tmp["lawArticlePic"]?>" />
			
			<?php } else { ?>
			<?php } ?>
				<span class="blog-slider-badge"><?php print $tmp2["typeDetail"]?></span>
				<div class="ms-info"></div>
				<div class="blog-slider-title">
					<span class="blog-slider-posted"><?php print date("d m, Y",strtotime($tmp["createdDate"]))?></span>
					<h2><a href="law_articles_page?article_ID=<?php print $tmp["article_ID"]?>"> <?php print $tmp["lawArticleTitle"]?> </a></h2>
				</div>
				<div class="ms-thumb">
					<h3><?php print $tmp1["lawTitle"]?></h3>
					<p><?php print $tmp["lawArticleTitle"]?></p>
				</div>
			</div>
<?php } ?>
<!--
					<div class="ms-slide blog-slider">
				<img src="https://scontent.fbkk2-5.fna.fbcdn.net/v/t1.0-9/29790009_1868705543203607_2960395709038889947_n.jpg?_nc_cat=0&oh=981ac8f866dafc87a5d51d79c208e562&oe=5B67ACAE" data-src="https://scontent.fbkk2-5.fna.fbcdn.net/v/t1.0-9/29790009_1868705543203607_2960395709038889947_n.jpg?_nc_cat=0&oh=981ac8f866dafc87a5d51d79c208e562&oe=5B67ACAE" />
				<span class="blog-slider-badge"> .</span>
				<div class="ms-info"></div>
				<div class="blog-slider-title">
					<span class="blog-slider-posted">04 10, 2018</span>
					<h2><a href="law_articles_page?id="> กลุ่มความผิดเกี่ยวกับชีวิตและร่างกาย</a></h2>
				</div>
				<div class="ms-thumb">
					<h3>ล่าสุด</h3>
					<p>กลุ่มความผิดเกี่ยวกับชีวิตและร่างกาย</p>
				</div>
			</div>


					<div class="ms-slide blog-slider">
				<img src="https://scontent.fbkk2-5.fna.fbcdn.net/v/t1.0-9/29683506_1865891490151679_5754800747187934528_n.jpg?_nc_cat=0&oh=74bc2e45421cec874bda814674e88007&oe=5B656F57" data-src="https://scontent.fbkk2-5.fna.fbcdn.net/v/t1.0-9/29683506_1865891490151679_5754800747187934528_n.jpg?_nc_cat=0&oh=74bc2e45421cec874bda814674e88007&oe=5B656F57" />
				<span class="blog-slider-badge">.</span>
				<div class="ms-info"></div>
				<div class="blog-slider-title">
					<span class="blog-slider-posted">04 10, 2018</span>
					<h2><a href="law_articles_page?id="> คำฟ้องที่ไม่ชอบด้วยกฎหมาย </a></h2>
				</div>
				<div class="ms-thumb">
					<h3>ล่าสุด</h3>
					<p>คำฟ้องที่ไม่ชอบด้วยกฎหมาย </p>
				</div>
			</div>


					<div class="ms-slide blog-slider">
				<img src="https://scontent.fbkk2-5.fna.fbcdn.net/v/t1.0-9/29572439_1865891530151675_4761538243334570752_n.jpg?_nc_cat=0&oh=29bbcf89c92ef6d0e6f0b0a38e823a7a&oe=5B65DC85" data-src="https://scontent.fbkk2-5.fna.fbcdn.net/v/t1.0-9/29572439_1865891530151675_4761538243334570752_n.jpg?_nc_cat=0&oh=29bbcf89c92ef6d0e6f0b0a38e823a7a&oe=5B65DC85" />
				<span class="blog-slider-badge">.</span>
				<div class="ms-info"></div>
				<div class="blog-slider-title">
					<span class="blog-slider-posted">04 10, 2018</span>
					<h2><a href="law_articles_page?id="> การอุทธรณ์ </a></h2>
				</div>
				<div class="ms-thumb">
					<h3>ล่าสุด</h3>
					<p>การอุทธรณ์</p>
				</div>
			</div>
-->

		</div>
	</div>

	<br>
	
	<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">


		<form name="f" action="?" method="post" class="form-inline">
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
	</div>
	</div>

	<!--=== Blog Posts ===-->
		<div class="container content-md">
			<div class="row">
				<!-- Blog All Posts -->
				<div class="col-md-9">

					<div class="headline-v2-popular bg-color-light-recents"><h2><i class="fa fa-star"></i>บทความทั้งหมด</h2></div>

<?php
		$SQLf = ($textsearch!="")?" where ( lawArticleTitle like '%$textsearch%' or lawArticleDetail like '%$textsearch%' or description like '%$textsearch%' ) ":"";
		if($law_ID!="") {
			$SQLf .= ($SQLf!="")?" and ":" where ";
			$SQLf .= " law_ID='$law_ID' ";
		}
		$find = "&textsearch=$textsearch&law_ID=$law_ID";

		$SQL = "select * from lawArticle ".$SQLf;
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		$number1 = mysqli_num_rows($rst);

		$page = $_REQUEST["page"];
		if($number1>0) { 		
			$qty = 3;
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
		$SQL = "select * from lawArticle $SQLf order by article_ID desc $limit";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		while($tmp = mysqli_fetch_array($rst)) {
			$SQL = "select u.*, r.roleTitle from user as u, role as r where u.role_ID=r.role_ID and u.user_ID='".$tmp["user_ID"]."'";
			$rst1 = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
			$tmp1 = mysqli_fetch_array($rst1);
?>

					<!-- News v3 -->
					<div class="row margin-bottom-20">
						<div class="col-sm-5 sm-margin-bottom-20">
					<?php if($tmp["lawArticlePic"]!="") { ?>
					<a href="law_articles_page?article_ID=<?php print $tmp["article_ID"]?>">
						<img class="img-responsive" src="../../uploadfile/article/<?php print $tmp["lawArticlePic"]?>" alt="">
					</a>	
					<?php } ?>
						</div>
						<div class="col-sm-7 news-v3">
							<div class="news-v3-in-sm no-padding">
								<ul class="list-inline posted-info">
									<li>By <?php print $tmp1["firstName"]?> <?php print $tmp1["lastName"]?></li>
									<li><?php print $tmp1["roleTitle"]?></li>
									<li>Posted <?php print date("F d, Y", strtotime($tmp["createdDate"]))?></li>
								</ul>
								<h2><a href="law_articles_page.php?article_ID=<?php print $tmp["article_ID"]?>"><?php print $tmp["lawArticleTitle"]?></a></h2>
								<p><?php print $tmp["description"]?>...</p>

								<h5><a href="law_articles_page.php?article_ID=<?php print $tmp["article_ID"]?>">อ่านต่อ..</a></h5>
								<!--
								<ul class="post-shares">
									<li>
										<a href="#">
											<i class="rounded-x icon-speech"></i>
											<span>5</span>
										</a>
									</li>
									<li><a href="#"><i class="rounded-x icon-share"></i></a></li>
									<li><a href="#"><i class="rounded-x icon-heart"></i></a></li>
								</ul>
								-->
							</div>
						</div>
					</div><!--/end row-->
					<!-- End News v3 -->
					<div class="clearfix margin-bottom-20"><hr></div>

			<?php } ?>

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

					<!-- Pager v3 -->
					<!--
					<ul class="pager pager-v3 pager-sm no-margin-bottom">
						<li class="previous"><a href="#">&larr; Older</a></li>
						<li class="page-amount">1 of 7</li>
						<li class="next"><a href="#">Newer &rarr;</a></li>
					</ul>
					-->
					<!-- End Pager v3 -->
				</div>
				<!-- End Blog All Posts -->

				<!-- Blog Sidebar -->
				<div class="col-md-3">
					<div class="headline-v2 bg-color-light"><h2>Trending</h2></div>
					<!-- Trending -->
					<ul class="list-unstyled blog-trending margin-bottom-50">
	<?php
		$SQL = "select a.*, t.lawTitle from lawArticle as a, lawType as t where a.law_ID=t.law_ID order by rand() limit 0,3";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		while($tmp = mysqli_fetch_array($rst)) {
?>
						<li>
							<h3><a href="law_articles_page.php?article_ID=<?php print $tmp["article_ID"]?>"><b><font color="#446cb3"><?php print $tmp["lawArticleTitle"]?></font></b></a></h3>
							<small><?php print date("d M, Y",strtotime($tmp["createdDate"]))?> / <a href="law_articles.php?law_ID=<?php print $tmp["law_ID"]?>"><?php print $tmp["lawTitle"]?></a></small>
							<h5><font color="#a2a1a1"><?print $tmp["description"]?></font></h5>
						</li>
<?php } ?>
					</ul>
					<!-- End Trending -->

					<div class="headline-v2 bg-color-light"><h2>Latest Posts</h2></div>
					<!-- Latest Links -->
					<ul class="list-unstyled blog-latest-posts margin-bottom-50">
	<?php
		$SQL = "select a.*, t.lawTitle from lawArticle as a, lawType as t where a.law_ID=t.law_ID order by article_ID desc limit 0,2";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		while($tmp = mysqli_fetch_array($rst)) {
?>
						<li>
							<h3><a href="law_articles_page.php?article_ID=<?php print $tmp["article_ID"]?>"><b><font color="#446cb3"><?php print $tmp["lawArticleTitle"]?></font></b></a></h3>
							<small><?php print date("d M, Y",strtotime($tmp["createdDate"]))?> / <a href="law_articles.php?law_ID=<?php print $tmp["law_ID"]?>"><?php print $tmp["lawTitle"]?></a></small>
							<h5><font color="#a2a1a1"><?print $tmp["description"]?></font></h5>
						</li>
<?php } ?>
					</ul>
					<!-- End Latest Links -->

					<div class="headline-v2 bg-color-light"><h2>Tags</h2></div>
					<!-- Tags v2 -->
					<ul class="list-inline tags-v2 margin-bottom-50">
	<?php
		$SQL = "select * from lawType order by rand()";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		while($tmp = mysqli_fetch_array($rst)) {
?>

						<li><a href="law_articles.php?law_ID=<?php print $tmp["law_ID"]?>"><?php print $tmp["lawTitle"]?></a></li>
<?php } ?>
					</ul>
					<!-- End Tags v2 -->

				</div>
				<!-- End Blog Sidebar -->
			</div>
		</div>
		<!--=== End Blog Posts ===-->
		
			
			

		<!-- requrie footer -->
		<? require ('footer-homepage.php'); ?>
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