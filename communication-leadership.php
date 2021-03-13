<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Communication & Leadership Award | Annual Conference | District 96 Toastmasters</title>

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
  <body>
    <?php 
    include("nav.php");
    include("banner-internal.php");
     require_once("data/data.php");
    ?>
	<!-- Body Start -->
  <div id="main-content" class="bg-yellow faded container-full padding50">
	<div class="container body ">
		<div class="col-sm-12">
			<h1 class="page-header text-center">Communication & Leadership Award Nominations</h1>
		</div>
		<div class="col-sm-8 col-sm-offset-2">
		 <!-- <div class="well">
        <h3>Submissions are now closed.</h3>
        <p>Please keep an eye on this space for furhter information.</p>
      </div> -->
			<p class="lead text-center">The purpose of the Communication and Leadership award is to honour a non-Toastmaster who has made substantial contributions in the areas of communication and leadership.</p>
      
      <p>The criteria used to select the recipient for this award includes the following:</p>
      <ul>
        <li>Must be a resident of the geographical area covered by District 96.</li>

        <li>Must be a non-Toastmaster or a former Toastmaster.</li>

        <li>Should have distinguished himself/herself as a leader or spokesperson for a worthy cause or purpose, especially as it exemplified their communication and leadership skills.</li>

        <li>Should have made a significant contribution to the communities within the District. The impact of this contribution must not be limited to one organization, but must be community/district wide.</li>

        <li>Should support the Toastmasters organization.</li>

        <li>Must not be presented to a recipient a second time.</li>

        <li>Must be able to personally accept the award and give an acceptance address at the <?php echo $general['conference'] ?></li>
      </ul>
    
      <h3 class="text-center">How do you nominate someone for the 
      Communication & Leadership Award?<br /></h3>
      <p class="text-center lead">Simple!  Fill out the <br />
      <a class="btn btn-lg btn-register" href="cl_form.php">Nomination form</a>
      </p>
      
		</div>
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