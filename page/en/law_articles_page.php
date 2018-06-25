<?php
  session_start();
 define('ROOT',str_replace("\\",'/',dirname(__FILE__)));

require(ROOT.'/../../db/connect.php');

  $headlink = "law_articles";

  $status = 0;
  $status = $_GET['search'];

  $gettext = $_GET['textsearch'];
  $getcategory = $_GET['category'];

  $id = $_GET["article_ID"]

	

?>


<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<title>Justroolaws | Law Consulting Website - Laws Articles Page </title>

<?
$SQL3 = "select * from lawArticle where article_ID= '$id'";
		$rst3 = mysqli_query($link, $SQL3) or die(mysqli_error($link).$SQL3);
		$tmp3 = mysqli_fetch_array($rst3);
?>
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<meta property="og:url" content="http://justroolaws.com/page/en/law_articles_page?article_ID=<?echo $id;?>"/>
<meta property="og:title" content="<?print $tmp3["lawArticleTitle"];?>"/>
<meta property="og:image" content="http://justroolaws.com/uploadfile/article/<? print $tmp3["lawArticlePic"]; ?>"/>
<meta property="og:description" content="<?print $tmp3["description"];?>" />
<meta property="og:type" content="website"/>

<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@justroolaws" />
<meta name="twitter:title" content="<?print $tmp3["lawArticleTitle"];?>" />
<meta name="twitter:description" content="<?print $tmp3["description"];?>" />
<meta name="twitter:image" content="http://justroolaws.com/uploadfile/article/<? print $tmp3["lawArticlePic"]; ?>" />

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
		

		
	</style>




<body class="header-fixed header-fixed-space">



	<div class="wrapper">

		<!-- require head  -->
		<?php require ('head-page.php');?>
		<!-- End require head  -->


	<?php
		$SQL = "select * from lawArticle where article_ID='".$_GET["article_ID"]."'";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		$tmp = mysqli_fetch_array($rst);

		$SQL = "select u.*, r.roleTitle from user as u, role as r where u.role_ID=r.role_ID and u.user_ID='".$tmp["user_ID"]."'";
		$rst1 = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		$tmp1 = mysqli_fetch_array($rst1);

	?>	

<!--=== Blog Posts ===-->
		<div class="bg-color-light">
			<div class="container content-sm">
				<div class="row">
					<!-- Blog All Posts -->
					<div class="col-md-9">
						<!-- News v3 -->
						<div class="news-v3 bg-color-white margin-bottom-30">
					<?php if($tmp["lawArticlePic"]!="") { ?>
						<img class="img-responsive full-width" src="http://justroolaws.com/uploadfile/article/<?php print $tmp["lawArticlePic"]?>" alt="">
					<?php } ?>
							<div class="news-v3-in">
								<ul class="list-inline posted-info">
									<li>By <a href="#"><?php print $tmp1["firstName"]?> <?php print $tmp1["lastName"]?></a></li>
									<li><?php print $tmp1["roleTitle"]?></a></li>
									<li>Posted <?php print date("F d, Y", strtotime($tmp["createdDate"]))?></li>
								</ul>
								<h2><?php print $tmp["lawArticleTitle"]?></h2>
								<h4><?php print $tmp["description"]?></h4>
								<p><?php print $tmp["lawArticleDetail"]?></p>

								 <ul class="post-shares post-shares-lg">
                                   

                                    <!-- Sharingbutton Facebook -->
<a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=http://justroolaws.com/page/en/law_articles_page?article_ID=<?print $tmp["article_ID"]?>" target="_blank" aria-label="Share on Facebook">
  <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
    <svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
        <g>
            <path d="M18.768,7.465H14.5V5.56c0-0.896,0.594-1.105,1.012-1.105s2.988,0,2.988,0V0.513L14.171,0.5C10.244,0.5,9.5,3.438,9.5,5.32 v2.145h-3v4h3c0,5.212,0,12,0,12h5c0,0,0-6.85,0-12h3.851L18.768,7.465z"/>
        </g>
    </svg>
    </div></div>
</a>

<!-- Sharingbutton Twitter -->
<a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=<?print $tmp["lawArticleTitle"]?>.&amp;url=http%3A%2F%2Fjustroolaws.com%2Fpage%2Fen%2Flaw_articles_page?id=<?print $tmp["article_ID"]?>" target="_blank" aria-label="Share on Twitter">
  <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
    <svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
        <g>
            <path d="M23.444,4.834c-0.814,0.363-1.5,0.375-2.228,0.016c0.938-0.562,0.981-0.957,1.32-2.019c-0.878,0.521-1.851,0.9-2.886,1.104 C18.823,3.053,17.642,2.5,16.335,2.5c-2.51,0-4.544,2.036-4.544,4.544c0,0.356,0.04,0.703,0.117,1.036 C8.132,7.891,4.783,6.082,2.542,3.332C2.151,4.003,1.927,4.784,1.927,5.617c0,1.577,0.803,2.967,2.021,3.782 C3.203,9.375,2.503,9.171,1.891,8.831C1.89,8.85,1.89,8.868,1.89,8.888c0,2.202,1.566,4.038,3.646,4.456 c-0.666,0.181-1.368,0.209-2.053,0.079c0.579,1.804,2.257,3.118,4.245,3.155C5.783,18.102,3.372,18.737,1,18.459 C3.012,19.748,5.399,20.5,7.966,20.5c8.358,0,12.928-6.924,12.928-12.929c0-0.198-0.003-0.393-0.012-0.588 C21.769,6.343,22.835,5.746,23.444,4.834z"/>
        </g>
    </svg>
    </div></div>
</a>

<!-- Sharingbutton Google+ -->
<a class="resp-sharing-button__link" href="https://plus.google.com/share?url=http%3A%2F%2Fjustroolaws.com%2Fpage%2Fen%2Flaw_articles_page?article_ID=<?print $tmp["article_ID"]?>" target="_blank" aria-label="Share on Google+">
  <div class="resp-sharing-button resp-sharing-button--google resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
    <svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
        <g>
            <path d="M11.366,12.928c-0.729-0.516-1.393-1.273-1.404-1.505c0-0.425,0.038-0.627,0.988-1.368 c1.229-0.962,1.906-2.228,1.906-3.564c0-1.212-0.37-2.289-1.001-3.044h0.488c0.102,0,0.2-0.033,0.282-0.091l1.364-0.989 c0.169-0.121,0.24-0.338,0.176-0.536C14.102,1.635,13.918,1.5,13.709,1.5H7.608c-0.667,0-1.345,0.118-2.011,0.347 c-2.225,0.766-3.778,2.66-3.778,4.605c0,2.755,2.134,4.845,4.987,4.91c-0.056,0.22-0.084,0.434-0.084,0.645 c0,0.425,0.108,0.827,0.33,1.216c-0.026,0-0.051,0-0.079,0c-2.72,0-5.175,1.334-6.107,3.32C0.623,17.06,0.5,17.582,0.5,18.098 c0,0.501,0.129,0.984,0.382,1.438c0.585,1.046,1.843,1.861,3.544,2.289c0.877,0.223,1.82,0.335,2.8,0.335 c0.88,0,1.718-0.114,2.494-0.338c2.419-0.702,3.981-2.482,3.981-4.538C13.701,15.312,13.068,14.132,11.366,12.928z M3.66,17.443 c0-1.435,1.823-2.693,3.899-2.693h0.057c0.451,0.005,0.892,0.072,1.309,0.2c0.142,0.098,0.28,0.192,0.412,0.282 c0.962,0.656,1.597,1.088,1.774,1.783c0.041,0.175,0.063,0.35,0.063,0.519c0,1.787-1.333,2.693-3.961,2.693 C5.221,20.225,3.66,19.002,3.66,17.443z M5.551,3.89c0.324-0.371,0.75-0.566,1.227-0.566l0.055,0 c1.349,0.041,2.639,1.543,2.876,3.349c0.133,1.013-0.092,1.964-0.601,2.544C8.782,9.589,8.363,9.783,7.866,9.783H7.865H7.844 c-1.321-0.04-2.639-1.6-2.875-3.405C4.836,5.37,5.049,4.462,5.551,3.89z"/>
            <polygon points="23.5,9.5 20.5,9.5 20.5,6.5 18.5,6.5 18.5,9.5 15.5,9.5 15.5,11.5 18.5,11.5 18.5,14.5 20.5,14.5 20.5,11.5  23.5,11.5     "/>
        </g>
    </svg>
    </div></div>
</a>

<!-- Sharingbutton E-Mail -->
<a class="resp-sharing-button__link" href="mailto:?subject=<?print $tmp["lawArticleTitle"]?>.&amp;body=http%3A%2F%2Fjustroolaws.com%2Fpage%2Fen%2Flaw_articles_page?id=<?print $tmp["article_ID"]?>" target="_blank" aria-label="Share on E-Mail">
  <div class="resp-sharing-button resp-sharing-button--email resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
    <svg version="1.1" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
        <path d="M22,4H2C0.897,4,0,4.897,0,6v12c0,1.103,0.897,2,2,2h20c1.103,0,2-0.897,2-2V6C24,4.897,23.103,4,22,4z M7.248,14.434 l-3.5,2C3.67,16.479,3.584,16.5,3.5,16.5c-0.174,0-0.342-0.09-0.435-0.252c-0.137-0.239-0.054-0.545,0.186-0.682l3.5-2 c0.24-0.137,0.545-0.054,0.682,0.186C7.571,13.992,7.488,14.297,7.248,14.434z M12,14.5c-0.094,0-0.189-0.026-0.271-0.08l-8.5-5.5 C2.997,8.77,2.93,8.46,3.081,8.229c0.15-0.23,0.459-0.298,0.691-0.147L12,13.405l8.229-5.324c0.232-0.15,0.542-0.084,0.691,0.147 c0.15,0.232,0.083,0.542-0.148,0.691l-8.5,5.5C12.189,14.474,12.095,14.5,12,14.5z M20.934,16.248 C20.842,16.41,20.673,16.5,20.5,16.5c-0.084,0-0.169-0.021-0.248-0.065l-3.5-2c-0.24-0.137-0.323-0.442-0.186-0.682 s0.443-0.322,0.682-0.186l3.5,2C20.988,15.703,21.071,16.009,20.934,16.248z"/>
    </svg>
    </div></div>
</a>


                                </ul>
								
							</div>
						</div>
						<!-- End News v3 -->


<?php
		$SQL = "select * from lawArticle where user_ID='".$tmp["user_ID"]."' order by article_ID desc limit 0,2";
		$rst = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
		
?>


						<!-- News v2 -->
						<div class="row news-v2 margin-bottom-50">
<?php
		$tmp = mysqli_fetch_array($rst);
		if($tmp["article_ID"]!="") {

			$SQL = "select u.*, r.roleTitle from user as u, role as r where u.role_ID=r.role_ID and u.user_ID='".$tmp["user_ID"]."'";
			$rst1 = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
			$tmp1 = mysqli_fetch_array($rst1);

			$SQL = "select * from lawType where law_ID='".$tmp["law_ID"]."'";
			$rst1 = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
			$tmp2 = mysqli_fetch_array($rst1);

?>							
						


								 <div class="col-sm-6 sm-margin-bottom-30" >
                                <div class="news-v2-badge">
                                <a href="law_articles.php?law_ID=<?php print $tmp2["law_ID"]?>">
                                	
                                    <img style="    width: 100%;" src="http://justroolaws.com/uploadfile/article/<?php print $tmp["lawArticlePic"]?>" alt=""  />
                                    </a>
                                    <p>
                                        <span><?php print date("d", strtotime($tmp["createdDate"]))?></span>
                                    <small><?php print date("M", strtotime($tmp["createdDate"]))?></small>
                                    </p>
                                 
                                </div>

								<div class="news-v2-desc">
									<p><a href="law_articles_page.php?article_ID=<?php print $tmp["article_ID"]?>"><?php print $tmp["lawArticleTitle"]?></a></p>
									<h3><a href="law_articles.php?law_ID=<?php print $tmp2["law_ID"]?>"><?php print $tmp2["lawTitle"]?></a></h3>
									<small>By <?php print $tmp1["firstName"]?> <?php print $tmp1["lastName"]?> | <?php print $tmp1["roleTitle"]?></small>
									
								</div>
							</div>

<?php } 
		$tmp = mysqli_fetch_array($rst);
		if($tmp["article_ID"]!="") {
			$SQL = "select u.*, r.roleTitle from user as u, role as r where u.role_ID=r.role_ID and u.user_ID='".$tmp["user_ID"]."'";
			$rst1 = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
			$tmp1 = mysqli_fetch_array($rst1);

			$SQL = "select * from lawType where law_ID='".$tmp["law_ID"]."'";
			$rst1 = mysqli_query($link, $SQL) or die(mysqli_error($link).$SQL);
			$tmp2 = mysqli_fetch_array($rst1);

?>
							

								 <div class="col-sm-6 sm-margin-bottom-30" >
                                <div class="news-v2-badge">
                                <a href="law_articles.php?law_ID=<?php print $tmp2["law_ID"]?>">
                                    <img style=" width: 100%;"  src="http://justroolaws.com/uploadfile/article/<?php print $tmp["lawArticlePic"]?>" alt="" />
                                    </a>
                                    <p>
                                        <span><?php print date("d", strtotime($tmp["createdDate"]))?></span>
                                    <small><?php print date("M", strtotime($tmp["createdDate"]))?></small>
                                    </p>
                                </div>

								<div class="news-v2-desc">
									<p><a href="law_articles_page.php?article_ID=<?php print $tmp["article_ID"]?>"><?php print $tmp["lawArticleTitle"]?></a></p>
									<h3><a href="law_articles.php?law_ID=<?php print $tmp2["law_ID"]?>"><?php print $tmp2["lawTitle"]?></a></h3>
									<small>By <?php print $tmp1["firstName"]?> <?php print $tmp1["lastName"]?> | <?php print $tmp1["roleTitle"]?></small>
									
								</div>
							</div>
<?php } ?>
						</div>
						<!-- End News v2 -->

						
					</div>
					<!-- End Blog All Posts -->

					<!-- Blog Sidebar -->
					<div class="col-md-3">
						<div class="headline-v2"><h2>Trending</h2></div>
						<!-- Trending -->
						<ul class="list-unstyled blog-trending margin-bottom-50">
	<?php
		$SQL = "select a.*, t.lawTitle from lawArticle as a, lawType as t where a.law_ID=t.law_ID order by rand() limit 0,5";
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

						<div class="headline-v2"><h2>Latest Posts</h2></div>
						<!-- Latest Links -->
						<ul class="list-unstyled blog-latest-posts margin-bottom-50">
	<?php
		$SQL = "select a.*, t.lawTitle from lawArticle as a, lawType as t where a.law_ID=t.law_ID order by article_ID desc limit 0,4";
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

						<div class="headline-v2"><h2>Tags</h2></div>
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
			</div><!--/end container-->
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