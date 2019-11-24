<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Education Session Proposal Submissions | Annual Conference | District 96 Toastmasters</title>

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
    ?>
	<!-- Body Start -->
  <div id="main-content" class="bg-yellow faded container-full padding50">
	<div class="container body >
		<div class="col-sm-12">
			<h1 class="page-header text-center">Call for Education Sessions Proposals</h1>

		
			<p class="lead text-center">Please fill out the form below to submit your proposal.</p>
			
			<p class="text-center">PLEASE NOTE: Please download and completed the <a href="document/Education_session_proposal_form.pdf" target=_blank>Education Session Proposal Form</a> before continuing.</p>
			<p class="lead text-warning text-center">The deadline for proposals is <?php echo $EDsession['deadline']; ?>  at 11:59pm (PST).</p>

			<p class="text-center">If you have any questions regarding submissions or the selection process, contact the <?php echo $general['conference']; ?>  <?php echo $EDsession['title']; ?>  <?php echo $EDsession['chair']; ?> at <a href="mailto:<?php echo $EDsession['email']; ?> "><?php echo $EDsession['email']; ?></a>.</p>
		
		
			<form method="post" action="mail/formmail.php" name="ed_session_form" id="edSessionForm" class="form" novalidate enctype="multipart/form-data">	
			<!--<form name="ed_session_form" id="edSessionForm" class="from" enctype="multipart/form-data" nonvalidate>		-->
				<input type="hidden" name="derive_fields" value="realname=name,subject = %' Education Session Proposal: '% + realname" />
        <div class="col-sm-6">
          <h3>Your Proposal</h3>
          
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name *" id="name" name="name" required data-validation-required-message="Please enter your name.">
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Your Email *" id="email" name="email" required data-validation-required-message="Please enter your email address.">
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email again (to check for spelling mistakes)*" data-validation-matches-match="email" data-validation-matches-message="Must match email address entered above" id="emailAgain" name="emailAgain">
          </div>
          <div class="form-group">
            <input type="tel" class="form-control" placeholder="Your Phone" id="phone" name="phone">
            <p class="help-block text-danger"></p>
          </div>
				</div>
        <div class="col-sm-6">
          <h3>Your Information</h3>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Title of your presentation *" id="title" name="title" required data-validation-required-message="Please tell us the title of your presentation.">
            <p class="help-block text-danger"></p>
          </div>

          <div class="form-group">
            <textarea class="form-control" placeholder="Any additional information" id="message" name="message"></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group">
            <p>Your Education Session proposal (please download the <a href="document/Education_session_proposal_form.pdf" target=_blank>Education Session Proposal Form</a> here. <strong>Maximum size:</strong> 450KB.)</p>
            <input type="file" class="form-control" name="proposal" id="proposal" accept=".doc, .pdf, .rtf, .docx, .txt" required data-validation-required-message="Please upload your propsal.">
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group">
            <p>Your photo (<strong>Minimum size:</strong> 530px wide by 600px high. <strong>Maximum size:</strong> 800px wide by 910px high or 350KB).</p>
            <input type="file" class="form-control" name="pic" id="pic" accept=".jpg,.png" required data-validation-required-message="Please upload a photo of yourself.">
            <p class="help-block text-danger"></p>
          </div>
				</div>
				<div class="form-group text-center">
					<input type="checkbox" id="terms" value="agreed" name="terms" required data-validation-required-message="Please agree to the Terms and Conditions."> I agree to the <a href="#" data-toggle="modal" data-target="#myModal">Terms and Conditions</a>.
					<p class="help-block text-danger"></p>
				</div>

					<!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Terms and Conditions</h4>
						  </div>
						  <div class="modal-body">
							<h2>Rules and Procedures</h2>
							<ul>
							  <li>The Deadline for Submission is <?php echo $EDsession['deadline']; ?>  at 11:59pm (PST).</li>
							  <li>Submit your proposal, including any    attachments such as your head shot, using the online submission form. As an alternative, you can submit your    proposal, with attachments, directly to the <a href="mailto:<?php echo $EDsession['email']; ?>"><?php echo $EDsession['title']; ?> </a>  using either Microsoft Word or Adobe PDF.</li>
							  <li>If no acknowledgement is received within 5    days of your transmission, contact the <a href="mailto:<?php echo $EDsession['email']; ?>"><?php echo $EDsession['title']; ?> </a>.</li>
							  <li>The final selection of Education Session Presenters    will be made by the Education Session Selection Committee composed of the D96    Trio, Conference Co-Chairs, and the Education Chair.</li>
							  <li>In the event that all selection criteria are    determined to be equal, according to the Education Session Selection Committee,    then preference in selection will be given to presenters who have also    registered for the District 96 Spring 2016 Conference. Furthermore,    selected presenters will be encouraged to register for the Conference.</li>
							  <li>Final selections will be announced by February    29, 2016. All applicants will be    notified.</li>
							  <li>District 96    Spring 2016 Conference Evaluation Contestants or International    Speech Contestants are not eligible to present Education Sessions during the District 96 Spring 2016 Conference. </li>
							  <li>Education Session Presenters will not be compensated    financially and Conference fees are not waived.</li>
							  <li>Conference Registration is not a    prerequisite for submitting a proposal or delivering an Education Session.</li>
							  <li>Prospective Presenters can submit multiple    proposals, however successful applicants will be allowed to present only one    Education Session.</li>
							  <li>Proposals from previous Conference    presenters are welcome.</li>
							</ul>
							<h2>Mutual Agreement</h2>
							<p align="left"><strong>Education Session presenters must:</strong></p>
							<ul>
							  <li>Provide and allow a color photo (head shot)    to be used for publicity and marketing purposes.</li>
							  <li>Allow their Education Session descriptions    to be used for publicity and marketing purposes.</li>
							  <li>Provide their own visual aids, printed hand-outs,    laptop.</li>
							  <li>Upon selection, provide a short promotional    video, about 1 minute in duration.</li>
							  <li>Agree not to substantially change the topic    or time referenced outline without prior approval of the Education Chair.</li>
							  <li>Refrain from using any copyrighted materials    in your audio visuals and represent to Toastmasters International that the Education    Session is your own original work, does not infringe upon intellectual    property rights of any third party and you agree to indemnify and hold    harmless Toastmasters International, its officers, employees and agents for    any breach of this representation.</li>
							  <li>Give District 96 Toastmasters a    non-exclusive, royalty-free license in the Education Session presented    including but not limited to the spoken/printed words and any accompanying    audio-visual or electronic presentations, and any handout materials. You will    not receive any royalty or other monetary compensation from Toastmasters or    its designees for the license granted. </li>
							  <li>Arrive at the assigned Education Session    room early enough to make any adjustments necessary.</li>
</ul>
<p align="left"><strong>The Conference Committee will:</strong></p>
<ul>
  <li>Communicate to keep you aware of related Conference    details.</li>
  <li>Answer any questions that you might have in    a timely manner.</li>
  <li>Promote your Education Session to Toastmasters.</li>
  <li>Provide you with a suitable room, and - if    required and requested - a projector, screen, flip chart etc. by prior    agreement.</li>
  <li>Provide a room supervisor to introduce you    and help were needed.</li>
  <li>Provide an audience of enthusiastic    Toastmasters to participate in your presentation.</li>
  <li>Request written evaluations from each    audience participant, and will share those evaluations with you.</li>
</ul>
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							
						  </div>
						</div>
					  </div>
					</div>
	
				<div class="clearfix"></div>
				<div class="text-center">
					<div id="success"></div>
					<button type="submit" class="btn btn-xl">Send your Proposal</button>
				</div>
				
				<input type="hidden" id="recipients" name="recipients" value="mysticbovine_*_gmail.com,<?php echo $EDsession['email_mask']; ?>">
				<input type="hidden" name="good_url" value="../ed_session_submitted.php" />
				<input type="hidden" name="bad_url" value="../ed_session_error.php" />
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
		$(function () { $("#edSessionForm input,#edSessionForm select,#edSessionForm textarea").not("[type=submit]").jqBootstrapValidation(); } );
	</script>
  </body>
</html>