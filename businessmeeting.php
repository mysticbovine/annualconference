<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Business Meeting | Annual Conference | District 96 Toastmasters</title>

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
			<h1 class="page-header text-center">Business Meeting</h1>

			<p class="lead text-center">The District 96 Business Meeting will be held <?php echo $general['saturady'];?> , at the <?php echo $general['conference'];?>.</p>
			<p>Please make sure you attend the business meeting, especially if you are your club's president or vice president of educaion. 
			If neither proxy holder (President or VP Education) can attend the <?php echo $general['conference'];?> business meeting, they can 
			assign their proxy to either a specific member or ANY member of the club to be the proxy holder. In either case, the credentials 
			chair needs to receive permission from the proxy holder(s) in order to allow another member (specified or otherwise) from the club 
			to hold the proxy.</p>
			<p>Visit <a href="http://www.district96.ca/resources/district/credentials" target=_blank>Credentials Information</a></p>
			
			<p>The District 96 Leadership <?php echo $business['tile'];?> (<?php echo $business['committee'];?>) have approved the nominations of the following candidates:</p>

			<h3>District 96 Leadership Nominations</h3>

			<p><strong>District Director</strong> - <?php echo $business['dd'];?></p>

			<p><strong>Program Quality Director </strong>- <?php echo $business['pqd'];?></p>

			<p><strong>Club Growth Director </strong>- <?php echo $business['cgd'];?></p>

			<p><strong>Public Relations Manager</strong> - <?php echo $business['prm'];?></p>
			<p class="hidden"><strong>Division Directors</strong> - <?php echo $business['prm'];?></p>
			<p class="hidden"><strong>Area Directors</strong> - <?php echo $business['prm'];?></p>
			<p class="hidden"><strong>Other</strong> - <?php echo $business['prm'];?></p>

			<p>The District 96 Business Meeting will be held Saturday <?php echo $general['saturday'];?>, <?php echo $general['year']; ?> at the District 96 Spring Conference. </p>

			<p>The elections for District Director, Program Quality Director, Club Growth Director and all of the Division Directors will be elected during that meeting. </p>

			<p>Nominations from eligible candidates will be accepted from the floor. If you or someone you are nominating is interested in the position, please fill out the forms posted on the District 96 website.</p>

			<p>If you have any questions, please do not hesitate to contact <?php echo $business['name'];?> at <a href="mailto:<?php echo $business['email'];?>" target="_blank"><?php echo $business['email'];?></a>.</p>

			<p>Lastly, the District would like to take a moment to sincerely thank <?php echo $business['name'];?> and all the members of the <?php echo $business['tile'];?> who volunteered many hours to put forward the Leadership Nomination Report to our membership. </p>

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