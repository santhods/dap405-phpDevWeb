<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	 <?php
        include($_SERVER['DOCUMENT_ROOT'] . "/config.php");
        include($WEB_DIRS['bootstrapCDN']);
     ?>
	
	<title>Admin Portal</title>
</head>

	<body id="top">

		<?php

		if (Admin::check() == false) {
			header("Location: " . $_LNK['sitePageSignin']);
		}

		?>
		<!-- end header section -->

	<div id="wrapper"> <!-- start wrapper -->
			<!-- start header section -->
			<div id="header">
				<header>
				    <?php
                        include_once($WEB_DIRS['sitePageNavBar']);
                    ?>
				</header> <!-- end header -->
			</div>
			<!-- end header section -->
			
			<!-- start main content section -->
			<div id="main-content">
				<!-- Put main content here -->
				<section id="headerPortal">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-5">
							<h2>ADMIN PORTAL</h2>
						</div>
						<div class="col-md-offset-3 col-md-4">
							<a href="<?php echo $_LNK['siteSessionSignout']; ?>" class="btn btn-danger pull-right">Sign Out</a>
						</div>
					</div>
				</div>
				</section>
			</div>
			<!-- end main content section -->
			
			<!--  start footer section -->
			<div id="footer">
            <?php
        	    include_once($WEB_DIRS['sitePageFooter']);
           	?>
			</div>
			<!-- end footer section -->
    </div> <!-- end wrapper -->
	</body>
</html>
