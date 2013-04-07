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
					<a class="logo" href="index.html"><img src="images/logo1.png" alt="" width="146" height="30"/></a>
					<a class="resp_navigation" href="javascript:void(0);"><span></span></a>

					<nav>
						<ul id="navigation">
							<li class="drop current_page_item"><a href="javascript:void(0);"><span>Home</span></a></li>
							
							<li class="drop"><a href="#"><span>Features</span></a></li>
							<li><a href="#"><span>Contacts</span></a></li>
						
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
										<h1 style="text-align:center"><a href="#">Know Karachi</a></h1>
										<h2 style="text-align:center">Get Public Transport Routes On Web,Mobile and SMS.</h2>

									</div>
								</aside>
							</div>
							
							<div class="cl"></div>
							
							<form action="index.php" method="post" id="contactform">
							<div class="form_info cmsms_input">
						<label for="contact_name">Location <span class="color_2">*</span></label>
						<div class="form_info cmsms_select">
											
											<select name='source'>
													<option>Select Location </option>

													<?php
															
													$sql="select * from location ";
													$result=mysql_query($sql);

													
													while($row=mysql_fetch_array($result))
													{
													$name=$row['LocationName'];
													$id=$row['LocationId'];
													//$co_id=$row['comp_id'];
													echo "<option value='$id'>{$name}";
													}

													
													?>
													
													
											</select>
												<span class="db">Starting Point</span>

											<select name='destination'>
													<option>Select Location</option>

													<?php
															
													$sql="select * from location ";
													$result=mysql_query($sql);

													
													while($row=mysql_fetch_array($result))
													{
													$name=$row['LocationName'];
													$id=$row['LocationId'];
													//$co_id=$row['comp_id'];
													echo "<option value='$id'>{$name}";
													}

													
													?>
													
													</select>
												<span class="db">Ending Point</span>
										
											</div>
										<br/>
										<input class="medium button" type='submit' name='form1' value="Search">
						</div>
						</form>
											
<div class="cl"></div>
											<form action="index.php" method="post" id="contactform1">
							
											<div class="form_info cmsms_input">
												<br/><br/><label for="contact_email">Search Routes <span class="color_2">*</span></label>
												
											<select name='routes'>
													<option>Select Routes</option>

													<?php
															
													$sql="select * from route order by RouteName ";
													$result=mysql_query($sql);

													
													while($row=mysql_fetch_array($result))
													{
													$name=$row['RouteName'];
													$id=$row['RouteId'];
													//$co_id=$row['comp_id'];
													echo "<option value='$id'>{$name}";
													}

													
													?>
													
													</select>
											
											
											</div><br />
												<input class="medium button" type='submit' name='form2' value="Search">
											<div class="cl"></div>
											
											
											
																					</form>
									
							
							
		
<section id="middle_content">
<div class="entry">

<?php
if(isset($_REQUEST['form2']))
{
//$check=1;
$id = $_POST['routes'];
//echo $id;		
$sql="select * FROM route WHERE RouteId='$id' ";
$result=mysql_query($sql);

$row=mysql_fetch_array($result);
//echo $row['Route'];
}

else if(isset($_REQUEST['form1']))
{
//$check=1;
$id = $_POST['source'];
$id1 = $_POST['destination'];
//echo $id;		
if($id==1 & $id1==2)
{
echo '<h2>'.'W18'.'<h2>';
}
else if($id==1 & $id1==3)
{
echo '<h2>'.'W22'.'<h2>';
}
else if($id==1 & $id1==4)
{
echo '<h2>'.'W21'.'<h2>';
}
else if($id==1 & $id1==5)
{
echo '<h2>'.'Shama Coach '.'<h2>';
}
else if($id==1 & $id1==6)
{
echo '<h2>'.'W18'.'<h2>';
}
else if($id==2 & $id1==3)
{
echo '<h2>'.'W18'.'<h2>';
}
else if($id==2 & $id1==4)
{
echo '<h2>'.'W21'.'<h2>';
}
else if($id==2 & $id1==5)
{
echo '<h2>'.'W22'.'<h2>';
}
else if($id==2 & $id1==6)
{
echo '<h2>'.'W18'.'<h2>';
}
else if($id==3 & $id1==4)
{
echo '<h2>'.'W18'.'<h2>';
}
else if($id==3 & $id1==5)
{
echo '<h2>'.'W18'.'<h2>';
}
else if($id==3 & $id1==6)
{
echo '<h2>'.'W18'.'<h2>';
}
else if($id==4 & $id1==5)
{
echo '<h2>'.'W18'.'<h2>';
}
else if($id==4 & $id1==6)
{
echo '<h2>'.'W18'.'<h2>';
}
else if($id==5 & $id1==6)
{
echo '<h2>'.'W18'.'<h2>';
}

//$sql="SELECT * FROM  'route-location'  ";
//$sql="SELECT * FROM route-location as RL INNER JOIN location as L ON L.LocationId = RL.LocationId";
//$sql="SELECT * FROM route-location WHERE RouteId='$id'";
//$result=mysql_query($sql);
//if (!$result) echo "NO";
//$row=mysql_fetch_array($result);
//echo $row['Route'];
}


?>

								<h2><?php echo $row['RouteName']?></h2>
								<p><?php echo $row['Route1']?></p>
								<br />

								
								<br />
								<br />
</div>

</section>		

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

