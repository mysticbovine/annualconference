<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sponsorship | Annual Conference | District 96 Toastmasters</title>

    <meta name="author" content="Rob Evans DTM, Rocky Coast Creative, www.rockycoastcreative.ca">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/d96conference.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/images/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="/images/favicons/ms-icon-144x144.png">
  </head>
  <body>
    <?php 
      include("nav.php");
      include("banner-internal.php");
      require_once("data/data.php"); 
      /*
        <?php echo $CLaward['']; ?> 
        <?php echo $general['']; ?> */
    ?>
	<!-- Body Start -->
  <div id="main-content" class="bg-yellow faded container-full padding50">
	<div class="container body">
		<div class="col-sm-12">
			<h1 class="page-header">Sponsorship</h1> 
			<p class="lead">Do you want to raise the profile of your organization? </p>
			<p>We offer a unique and effective way to do so, in conjunction with the <?php echo $general['conference']; ?>.  This three-day event will take place from Friday, <?php echo $general['friday']; ?> to Sunday, <?php echo $general['sunday']; ?>, <?php echo $general['year']; ?> at the <?php echo $general['location']; ?>.  We anticipate 200 attendees from throughout British Columbia.</p>
			<p>Toastmasters International is a 92-year old educational organization, dedicated to helping its members become capable, confident leaders and speakers.
			<p>There are several different ways for you to raise the profile of your business or community group…</p>
		
			
				<p><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Promote your business’ services and products through in-kind donations to our Silent Auction.<br />
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Advertise in our Conference Program.<br />
				<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Sponsor someone from your organization to attend the Conference.</p>
	
			

			<p>If you wish to make an in-kind donation, gift cards/certificates, specific items and creative gift baskets are all welcome.</p>  
			<p>In return, your generous donation will be recognized via logo and acknowledgement in the Conference Program; logo and acknowledgement on the Conference website and in-Conference promotions; and both verbal and signage recognition at main meals.</p>

			<h3>Any questions?</h3>  
			<p>Please contact the <?php echo $sponsors['title']; ?> directly:<br />
				<b><?php echo $sponsors['name1']; ?></b>, <a href="mailto:<?php echo $sponsors['email1']; ?>"><?php echo $sponsors['email1']; ?></a><br />
				<b><?php echo $sponsors['name2']; ?></b>, <a href="mailto:<?php echo $sponsors['email2']; ?>"><?php echo $sponsors['email2']; ?></a>
			</p>
			
			<p class="hidden hidden-xs"><a href="advertising.php"class="btn btn-register btn-lg">Click here for advertising opportunities</a></p>
			<p class="hidden visible-xs"><a href="advertising.php"class="btn btn-register btn-lg">Intersted in advertising?</a></p>

			
		</div>
	</div>
	</div>
	<!-- Body End -->
	<!-- Footer Start -->
	<!-- Contact Section -->
    <?php include("contact.php");?>
	<!-- Footer End -->

    <?php include("scripts.php");?>
  </body>
</html>