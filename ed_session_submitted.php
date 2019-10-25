<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Call for Education Session Presenters | Annual Conference | District 96 Toastmasters</title>

	<meta name="author" content="Rob Evans DTM, Rocky Coast Creative, www.rockycoastcreative.ca"
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
  <body class="bg-yellow faded container-full padding50">
    <?php 
      include("nav.php");
      include("banner-internal.php");
      require_once("data/data.php");
    ?>
	<!-- Body Start -->
	<div class="container body">
		<div class="col-sm-12">
			<h1 class="page-header text-center">Call for Education Session Presenters</h1>

		
			<p class="lead text-center">Thank you! Your submission has been sent.</p>
			
			<p class="">If no acknowledgement is received within 5 days of your transmission, contact the <a href="mailto:<?php echo $EDsession['email']; ?> "><?php echo $EDsession['email']; ?></a>.</p>

			<p class="">The final selection of Education Session Presenters will be made by the Education Session Selection Committee composed of the D96 Trio, Conference Co-Chairs, and the Education Chair. All applicants will be notified of the results.</p>

		</div>
		
	</div>
	<!-- Body End -->
	<!-- Footer Start -->
	<!-- Contact Section -->
    <?php include("contact.php");?>
	<!-- Footer End -->

    <?php include("scripts.php");?>
	 <script src="js/educationsession.js"></script>
  </body>
</html>