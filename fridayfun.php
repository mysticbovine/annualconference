<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Call for Friday Fun Speakers | Annual Conference | District 96 Toastmasters</title>

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
			<h1 class="page-header text-center">Call for Friday Fun Night Speakers</h1>

		</div>
		<div class="col-sm-8 col-sm-offset-2">
		
			<p class="lead">Are you a dynamic presenter known to dazzle large audiences? Can you speak eloquently and expertly on a topic that is entertaining, informative and fun? Are you ready to shoot for the moon?</p>

    <p>District 96 Toastmasters is inviting qualified speakers to submit an application to present in the style of "TedX" at our upcoming Annual Conference. We are looking for four to six speakers who can present an 18-22 minute session on Friday evening, April 17, 2020 at the Executive Hotel Vancouver Airport in Richmond, BC. </p>
    <p>Non-Toastmasters may also apply. Many speakers consider it an honour and a privilege to be invited to present at a Toastmasters Conference. After all, Toastmasters International is the world leader in Communication and Leadership development.</p>
  <p>The Selection Committee will evaluate applications based on the following criteria:</p>
  <ul>
    <li>Applicant's qualifications and experience</li>
    <li>Content: Completeness, clarity, and audience appeal</li>
    <li>Level of audience engagement</li>
    <li>Relevance to the Conference theme"<em>Shoot for the moon. It's your time to shine! "</em></li>
    <li>Speech may be humourous, informational or any style that appeals to you and your message</li>
    <li>Take-away benefits for the audience</li>
  </ul>

  <p><strong>Please note:</strong></p>
  <ol>
    <li>You are responsible for any handouts. All audio/visual requirements must meet with what the conference is supplying. </li>
    <li>No hard selling, pitching or promoting yourself or your products or services is allowed during or after your presentation, and no financial compensation or reimbursement of any expenses will be given. Instead, we will post the profiles of or otherwise reference the selected presenters on our Conference website, District 96"s Facebook and other social media channels, at promotional events and in our printed Conference Program (received by 200+ Conference attendees). Presenters will also be featured in at least one email sent to our entire D96 membership (2,500+).</li>
    <li>Presenters must purchase Friday night registration at a minimum (includes dinner). If the applicant wishes to attend portions of the conference other than Friday night, they are welcome to do so by purchasing the appropriate registration package.</li>
    <li>Contestants at the District 96 Evaluation and International Speech contests that will take place at the Conference are ineligible to participate. Thus, you should not apply if you are planning to compete in either contest.</li>
    <li>This speech qualifies for a Level 5 Pathways presentation, Prepare to Speak Professionally. You will be responsible for finding your own evaluator.</li>
  </ol>
 
  
 
  <p class="text-center">To submit your proposal, download and fill out the form below and send it to the <?php echo $general['conference']; ?>  <?php echo $EDsession['title']; ?>  <?php echo $EDsession['chair']; ?> at <a href="mailto:<?php echo $EDsession['email']; ?> "><?php echo $EDsession['email']; ?></a>.</p>
  <p class="text-center">
    <a href="document/Friday_Fun_Proposal_form.pdf" target=_blank" class="btn btn-lg btn-register">Friday Fun Form</a>
  </p>
 <p class="lead text-warning text-center">The deadline for proposals is <?php echo $EDsession['deadline']; ?>  at 11:59pm (PST).</p>  
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