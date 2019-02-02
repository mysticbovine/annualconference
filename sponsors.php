<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Sponsors | Annual Conference | District 96 Toastmasters</title>
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
     require_once("data/sponsors.php");
    ?>
	<!-- Body Start -->
	<div class="container body">
		<div class="col-sm-12">
			<h1 class="page-header">Thank you to our sponsors</h1>
				<div class="row">
					<div class="sponsor-levels">
            <?php 
               $count = count($gold);
               if ($count != 0){
            ?>
              <div class="gold">
              <h2>Royal Flush Sponsor</h2> 
                <div class="sponsor-list">
                  <?php 
                  sort($gold);
                  for ($row = 0; $row < count($gold); $row++) {
                    echo "<div class=\"sponsor\">";
                    echo "<a href=\"".$gold[$row]['url']."\" class=\"\" target=\"_blank\"><img src=\"images/sponsors/".$gold[$row]['logo']."\" class=\"img-responsive\" alt=\"".$gold[$row]['name']."\"></a>";
                    echo "<p class=\"text-center\"><strong>".$gold[$row]['name']."</strong></p>";
                    echo "<p class=\"text-center\"><a href=\"".$gold[$row]['url']."\" class=\"\" target=\"_blank\">website</a></p>";
                    echo "</div>";
                  }
                  ?>
                </div>
              </div>
            <?php } ?>
            
             <?php 
               $count = count($silver);
               if ($count != 0){
            ?>
            <div class="silver">
              <h2>Straight Flush Sponsor</h2> 
              <div class="sponsor-list">
                <?php 
                $count = count($silver);
                sort($silver);
                for ($row = 0; $row < count($silver); $row++) {
                  echo "<div class=\"sponsor\">";
                  echo "<a href=\"".$silver[$row]['url']."\" class=\"\" target=\"_blank\"><img src=\"images/sponsors/".$silver[$row]['logo']."\" class=\"img-responsive\" alt=\"".$silver[$row]['name']."\"></a>";
                  echo "<p class=\"text-center\"><strong>".$silver[$row]['name']."</strong></p>";
                  echo "<p class=\"text-center\"><a href=\"".$silver[$row]['url']."\" class=\"\" target=\"_blank\">website</a></p>";
                  echo "</div>";
                } 
                ?>
              </div>
						</div>
            <?php } ?>
            
            <?php 
              $count = count($bronze);
              if ($count != 0){
            ?>
            <div class="bronze">
              <h2>Four of a Kind Sponsor</h2> 
              <div class="sponsor-list">
              <?php 
                $count = count($bronze);
                sort($bronze);
                for ($row = 0; $row < count($bronze); $row++) {
                  echo "<div class=\"sponsor\">";
                  echo "<a href=\"".$bronze[$row]['url']."\" class=\"\" target=\"_blank\"><img src=\"images/sponsors/".$bronze[$row]['logo']."\" class=\"img-responsive\" alt=\"".$bronze[$row]['name']."\"></a>";
                  echo "<p class=\"text-center\"><strong>".$bronze[$row]['name']."</strong></p>";
                  echo "<p class=\"text-center\"><a href=\"".$bronze[$row]['url']."\" class=\"\" target=\"_blank\">website</a></p>";
                  echo "</div>";
                }
                ?>
              </div>
						</div>
            <?php } ?>
            
            <?php 
              $count = count($additional);
              if ($count != 0){
            ?>
            <div class="additional">
              <h2>Full House Sponsor</h2> 
              <div class="sponsor-list">
                <?php 
                $count = count($additional);
                 sort($additional);
                for ($row = 0; $row < count($additional); $row++) {
                  echo "<div class=\"sponsor\">";
                  echo "<a href=\"".$additional[$row]['url']."\" class=\"\" target=\"_blank\"><img src=\"images/sponsors/".$additional[$row]['logo']."\" class=\"img-responsive\" alt=\"".$additional[$row]['name']."\"></a>";
                  echo "<p class=\"text-center\"><strong>".$additional[$row]['name']."</strong></p>";
                  echo "<p class=\"text-center\"><a href=\"".$additional[$row]['url']."\" class=\"\" target=\"_blank\">website</a></p>";
                  echo "</div>";
                }
                ?>
              </div>
						</div>
            <?php } ?>
            
            <?php 
              $count = count($inkind);
              if ($count != 0){
            ?>
            <div class="additional">
              <h2>In Kind Sponsors</h2> 
              <div class="sponsor-list">
                <?php 
                $count = count($inkind);
                for ($row = 0; $row < count($inkind); $row++) {
                  echo "<div class=\"sponsor\">";
                  echo "<a href=\"".$inkind[$row]['url']."\" class=\"\" target=\"_blank\"><img src=\"images/sponsors/".$inkind[$row]['logo']."\" class=\"img-responsive\" alt=\"".$inkind[$row]['name']."\"></a>";
                  echo "<p class=\"text-center\"><strong>".$inkind[$row]['name']."</strong></p>";
                  echo "<p class=\"text-center\"><a href=\"".$inkind[$row]['url']."\" class=\"\" target=\"_blank\">website</a></p>";
                  echo "</div>";
                }
                ?>
              </div>
						</div>
            <?php } ?>
					</div>
					<div class="well hidden">
						<h2>Interested in being a sponsor?</h2>
						<p class=""><a href="sponsor_levels.php">Click here our Sponsorship Opportunities.</a></p>
						<h2>Interested in placing an ad in our conference program?</h2>
						<p class=""><a href="advertising.php">Click here our Advertising Rates.</a></p>
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