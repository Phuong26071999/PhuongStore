<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>

<head>
	<title>Big shope A Ecommerce Category Flat Bootstarp Resposive Website Template | Single :: w3layouts</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!--theme-style-->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/etalage.css" type="text/css" media="all" />
	<link href="css/my.css" rel="stylesheet" type="text/css" media="all" />
	<!--//theme-style-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://getbootstrap.com/examples/offcanvas/offcanvas.css" rel="stylesheet">
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous"></script>
	<script
		type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!--fonts-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	
	<!--//fonts-->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.etalage.min.js"></script>

	<script>
		jQuery(document).ready(function ($) {

			$('#etalage').etalage({
				thumb_image_width: 300,
				thumb_image_height: 400,
				source_image_width: 900,
				source_image_height: 1200,
				show_hint: true,
				click_callback: function (image_anchor, instance_id) {
					alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
				}
			});

		});
	</script>

	<style>
	.rsidebar{
		margin-left: 12px;
	}

</style>

</head>

<body>
	<!--header-->
	<?php
		include './includes/header.php';
	?>

	<!---->

	<div class="container">

		<div class=" single_top">
			<div class="single_grid">
				<div class="grid images_3_of_2">
					<ul id="etalage">
						<li>
							<a href="optionallink.html">
								<img class="etalage_thumb_image" src="images/s4.jpg" class="img-responsive" />
								<img class="etalage_source_image" src="images/si4.jpg" class="img-responsive"
									title="" />
							</a>
						</li>
						<li>
							<img class="etalage_thumb_image" src="images/s2.jpg" class="img-responsive" />
							<img class="etalage_source_image" src="images/si2.jpg" class="img-responsive" title="" />
						</li>
						<li>
							<img class="etalage_thumb_image" src="images/s3.jpg" class="img-responsive" />
							<img class="etalage_source_image" src="images/si3.jpg" class="img-responsive" />
						</li>
						<li>
							<img class="etalage_thumb_image" src="images/s1.jpg" class="img-responsive" />
							<img class="etalage_source_image" src="images/si1.jpg" class="img-responsive" />
						</li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="desc1 span_3_of_2">


					<h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
					<div class="cart-b">
						<div class="left-n ">$329.58</div>
						<a class="now-get get-cart-in" href="#">ADD TO CART</a>
						<div class="clearfix"></div>
					</div>
					<h6>100 items in stock</h6>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
						labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
						laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
						voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					<div class="share">
						<h5>Share Product :</h5>
						<ul class="share_nav">
							<li><a href="#"><img src="images/facebook.png" title="facebook"></a></li>
							<li><a href="#"><img src="images/twitter.png" title="Twiiter"></a></li>
							<li><a href="#"><img src="images/rss.png" title="Rss"></a></li>
							<li><a href="#"><img src="images/gpluse.png" title="Google+"></a></li>
						</ul>
					</div>


				</div>
				<div class="clearfix"> </div>
			</div>
			<ul id="flexiselDemo1">
				<li><img src="images/pi.jpg" />
					<div class="grid-flex"><a href="#">Bloch</a>
						<p>Rs 850</p>
					</div>
				</li>
				<li><img src="images/pi1.jpg" />
					<div class="grid-flex"><a href="#">Capzio</a>
						<p>Rs 850</p>
					</div>
				</li>
				<li><img src="images/pi2.jpg" />
					<div class="grid-flex"><a href="#">Zumba</a>
						<p>Rs 850</p>
					</div>
				</li>
				<li><img src="images/pi3.jpg" />
					<div class="grid-flex"><a href="#">Bloch</a>
						<p>Rs 850</p>
					</div>
				</li>
				<li><img src="images/pi4.jpg" />
					<div class="grid-flex"><a href="#">Capzio</a>
						<p>Rs 850</p>
					</div>
				</li>
			</ul>
			<script type="text/javascript">
				$(window).load(function () {
					$("#flexiselDemo1").flexisel({
						visibleItems: 5,
						animationSpeed: 1000,
						autoPlay: true,
						autoPlaySpeed: 3000,
						pauseOnHover: true,
						enableResponsiveBreakpoints: true,
						responsiveBreakpoints: {
							portrait: {
								changePoint: 480,
								visibleItems: 1
							},
							landscape: {
								changePoint: 640,
								visibleItems: 2
							},
							tablet: {
								changePoint: 768,
								visibleItems: 3
							}
						}
					});

				});
			</script>
			<script type="text/javascript" src="js/jquery.flexisel.js"></script>

			<div class="toogle">
				<h3 class="m_3">Product Details</h3>
				<p class="m_text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
					euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
					nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis
					autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore
					eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent
					luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta
					nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
			</div>
		</div>

		<!--Menu Left-->
		<div class="sub-cate">
			<?php
        	include './includes/menuleft.php'
        	?>


		</div>
		<div class="clearfix"> </div>
	</div>

	<!-- FOOTER-->
	<?php
		include './includes/footer.php';
	?>

</body>

</html>