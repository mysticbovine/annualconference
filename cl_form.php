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
	<div class="container body">
		<div class="col-sm-12">
			<h1 class="page-header text-center">Communication & Leadership Award Nomination</h1>

			<p class="lead text-center">Please fill out the form below to submit your proposal.</p>

			<p class="text-center">If you have any questions regarding your submission or the selection process, please contact the <?php echo $general['conference']; ?>  <?php echo $CLaward['title']; ?>  <?php echo $CLaward['chair']; ?> at <a href="mailto:<?php echo $CLaward['email']; ?> "><?php echo $CLaward['email']; ?> </a>.</p>
			
			<form method="post" action="mail/formmail.php" name="clForm" id="clForm" class="form" novalidate enctype="multipart/form-data">	
			<!--<form name="ed_session_form" id="edSessionForm" class="from" enctype="multipart/form-data" nonvalidate>		-->
				<input type="hidden" name="derive_fields" value="realname=name,subject = %' Communication & Leadership Award Nomination: '% + nominee-name" />
				<div class="row">
          <div class="col-md-6">
            <h3>Your Information</h3>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name *" id="name" name="name" required data-validation-required-message="Please enter your name.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Your Email *" id="email" name="email" required data-validation-required-message="Please enter your email address.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="Email again, to check for spelling mistakes. *" data-validation-matches-match="email" data-validation-matches-message="Must match email address entered above" id="emailAgain" name="emailAgain">
              
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" placeholder="Your Phone number" id="phone" name="phone">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Club name" id="title" name="club">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <h3>Nominee Information</h3>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Name *" id="name" name="nominee-name" required data-validation-required-message="Please enter your nominee's name.">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Company or Business Affiliation" id="name" name="nominee-company">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Phone number" id="name" name="nominee-phone">
              <p class="help-block text-danger"></p>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Email *" id="name" name="nominee-email" required data-validation-required-message="Please enter your nominee's email address.">
              <p class="help-block text-danger"></p>
				</div>
          </div>
        </div>
        
				
				
				<div class="form-group">
					<h3>Why are you nominating this person?</h3>
					<p class="help-block">Please provide up to one page of information about the nominee that explains
					why you believe that he/she is a worthy candidate for the award. Please include
					specifics about what the individual has accomplished and why you feel that they
					merit the District 96 Communication & Leadership Award.</p>
					<p class="help-block text-info">Please do not exceed one page for this explanation.</p>
					<p class="help-block text-info">Please upload one of the following file formats: doc, .pdf, .rtf, .docx, .txt</p>
					<input type="file" class="form-control" name="proposal" id="proposal" accept=".doc, .pdf, .rtf, .docx, .txt" required data-validation-required-message="Please upload your nomination reason.">
					<p class="help-block text-danger"></p>
				</div>
				
				<div class="clearfix"></div>
				<div class="text-center">
					<div id="success"></div>
					<button type="submit" class="btn btn-xl">Submit your Nomination</button>
				</div>
				
				<input type="hidden" id="recipients" name="recipients" value="mysticbovine_*_gmail.com, <?php echo $CLaward['email_mask']; ?>">
				<input type="hidden" name="good_url" value="../cl_submitted.php" />
				<input type="hidden" name="bad_url" value="../cl_error.php" />
			</form>
		
 
		</div>
	</div>
	</div>
	<!-- Body End -->
	<!-- Footer Start -->
	<!-- Contact Section -->
    <?php include("contact.php");?>
	<!-- Footer End -->

    <?php include("scripts.php");?>
	<script>
		$(function () { $("#clForm input,#clForm select,#clForm textarea").not("[type=submit]").jqBootstrapValidation(); } );
	</script>
  </body>
</html>
