<?php
include 'functions.php';
?>

<!DOCTYPE html><head>
		
		<meta name="description" content="cmsmasters responsive html5 website template" />
		
<meta name="keywords" content="html5,scriptgates.com, css3, template, responsive, adaptive" />
		<meta name=
"viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link rel=
"shortcut icon" href="images/favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" href=
"css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href=
"css/styles/fonts.css" type="text/css" media="screen" />
		<link rel="stylesheet" href=
"http://fonts.googleapis.com/css?family=Headland+One:regular" type="text/css" />
		<link rel=
"stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic" type="text/css"
>
		<link rel="stylesheet" href="css/styles/jquery.prettyPhoto.css" type="text/css" media="screen" 
/>
		<link rel="stylesheet" type="text/css" href="css/styles/jquery.cmsmsRevolutionSlider.css" 
media="screen" />
		

<script src="js/modernizr.custom.all.js" type="text/javascript"></script>

		

<script src="js/respond.js" type="text/javascript"></script>

<script src="js/jquery.min.js" type="text/javascript"></script>

<script src="js/jquery.easing.js" type="text/javascript"></script>

<script type="text/javascript" src="js/jquery.cmsmsRevolutionSlider.plugin.min.js"></script>

			
		

<script type="text/javascript" src="js/jquery.cmsmsRevolutionSlider.min.js"></script>

		<!--
[if lt IE 9]>
			<link rel="stylesheet" href="css/styles/ie.css" type="text/css" />
			<link rel="st
ylesheet" href="css/styles/ie_css3.css" type="text/css" media="screen" />
		<![endif]-->
		
<title>Bus Route Finder</title>
	</head>

<body>

<!-- __________________________________________________ Start Page -->

		<section id="page"
>
			<a href="#" id="slide_top"></a>
<!--
 __________________________________________________ Start Header -->

			<div class="social_block">

				<ul>
					<li>
						<a href="#" target="_blank">
							<img src=
"images/socicons/facebook.png" alt="" width="32" height="32"/>
							<span>Facebook</span>
						
</a>
					</li>
					<li>
						<a href="#" target="_blank">
							<img src="images/socicons/flickr.png" alt="" width="32" height="32"/>
							<span>Flickr</span>
						</a>

					</li>
					<li>
						<a href="#" target="_blank">
							<img src="images/socicons/twitter.png" alt="" width="32" height="32"/>
							<span>Twitter</span>
						</a>

					</li>
					<li>
						<a href="#" target="_blank">
							<img src="images/socicons/vimeo.png" alt="" width="32" height="32"/>
							<span>Vimeo</span>
						</a>
					</li>
				</ul>
				<a 
class="social_toggle" href="#"><span></span></a>
			</div>
			<header id="header">
				<div class="header_inner">
					<a class="logo" href="index.html"><img src="images/logo.png" alt="" width="146" height="30"/></a>
					<a class="resp_navigation" href="javascript:void(0);"><span></span></a>

					<nav>
						<ul id="navigation">
							<li class="drop current_page_item"><a href="javascript:void(0);"><span>Home</span></a></li>
							
<li class="drop"><a href="javascript:void(0);"><span>Features</span></a>
								
							</li>
							<li class="drop"><a href="javascript:void(0);"><span>Portfolio</span></a></li>
							<li class="drop"><a href="javascript:void(0);"><span>Blog</span></a></li>
							<li><a href="contacts.html"><span>Contacts</span></a></li>
						
</ul>
					</nav>
					<div class="cl"></div>
				</div>
			</header>
<!--
 __________________________________________________ Finish Header -->


			<div class="container">
	
				
<!--
 __________________________________________________ Start Middle -->				
				<section id="middle">

					<div class="middle_inner">
<!--
 __________________________________________________ Start Top Sidebar -->

						<section id="top_sidebar">
							<div class="one_first">
								<aside class="widget widget_text">
									
<div class="textwidget">
										<h1 style="text-align:center"><a href="#">
Dive into the ocean of possibilities</a></h1>
										<h2 style="text-align:center">
Multi-purpose. Layout variety. Handy shortcodes. Cool widgets. Customization. Great SEO.</h2>

									</div>
								</aside>
							</div>
							
</section>

<?php
if(isset($_REQUEST['form2']))
{

$id = $_POST['routes'];
echo $id;		
$sql="select * FROM route WHERE RouteId='$id' ";
$result=mysql_query($sql);

$row=mysql_fetch_array($result);
echo $row['Route'];
}


?>

<section id="middle_content">
<div class="entry">
								<h2>Service Overview</h2>
								<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean quis arcu vitae magna egestas pulvin
ar vitae sed lectus psum quia dolor sit amet, consectetur, adipisci velit. Morbi fringilla, lorem id
 laoreet faucibus, erat ligula susc augue, quis bibendum eros nisi vel lorem. Donec faucibus iaculis
 mauris vitae tint. Lorem ipsum dolor sit amet, consectetuer sum quia dolor sit amet,  adipiscing el
it. Phasellus hendrerit. Pelletesque aliquet nibh nec urna. In nisi, dapibus id, mattis vel, si. Sed
 pretium, ligula sollicitudin laoreet viverra, tortor libero sodales leo, eget bland nunc tortor. Ne
que porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit. Sed quia
 non numquam eius modi tempora incidunt ut labor et dolore magnam voluptatem.</p>
								<br />

								
								<br />
								<br />
</div>

</section>
						
<!-- __________________________________________________ Finish Top Sidebar -->



<!-- __________________________________________________ Start Content -->

						
<!-- __________________________________________________ Finish Content -->

					</div>
				
</section>
<!-- __________________________________________________ Finish Middle -->



			</div>
		</section>
<!--
 __________________________________________________ Finish Page -->


<!--
 __________________________________________________ Start Footer -->
		<footer id="footer">
			<div 
class="footer_inner">
				<span>Bigfish &copy; 2012 All rights reserved</span>
			</div>
		</footer>

<!-- __________________________________________________ Finish Footer -->

		

<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>

<script src="js/jquery.script.js" type="text/javascript"></script>

<script src="js/jquery.validationEngine.js" type="text/javascript"></script>

<script src="js/jquery.validationEngine-lang.js" type="text/javascript"></script>

<script src="js/jquery.jtweetsanywhere.js" type="text/javascript"></script>

<script type="text/javascript">jQuery(document).ready(function (){
  if (jQuery.fn.cssOriginal != undefined){
    jQuery.fn.css = jQuery.fn.cssOriginal;
  }
  jQuery('.fullwidthbanner').revolution({
    delay : 7000, startwidth : 1240, startheight : 810, onHoverStop : 'on', hideThumbs : 0
    , navigationType : 'bullet', navigationArrows : 'verticalcentered', navigationStyle : 
    'round', touchenabled : 'on', navOffsetHorizontal : 0, navOffsetVertical : 20, 
    fullWidth : 'on', shadow : 0
  }
  );
}
);
</script>

	</body>

</html>

