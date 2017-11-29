<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

        <?php
            include($_SERVER['DOCUMENT_ROOT'] . "/config.php");
        	include($WEB_DIRS['bootstrapCDN']);
        ?>

     <title><?php print($WEB_VALUE['subscribeTitle']); ?></title>

    </head>

	<body>
		<div id="wrapper">
				<?php

				if (Admin::check() == true){
						header("Location: " . $_LNK['siteAdminPortal']);
				}

				?>
			<!-- start header section -->
			<div id="header">
				<header>
					<?php include($WEB_DIRS['sitePageNavBar']); ?>
				</header>
			</div>
			<!-- end header section -->

			<!-- Start Main Content on sign up page -->
			<div id="main-content">
				<div class="container">
							<div class="row">
       							<div class="col-md-12">
											<h3 class="page-header"><?php print($WEB_VALUE['sectionSubscribeTitle']); ?></h3>
								</div>
       						</div>
							
							<form class="form-horizontal" method="post" action="<?php echo $_LNK['siteUsrSubscribe']; ?>">
									<?php 
									if (isset($_SESSION['subscribe-status'])){
										
										if ($_SESSION['subscribe-status'] == true){
											echo MsgLabels::success($_SESSION['subscribe-info']);
										} else {
											echo MsgLabels::err($_SESSION['subscribe-info']);
										}
										unset($_SESSION['subscribe-status'], $_SESSION['subscribe-info']);
									}
									?>
							
									<div class="form-group">
											<label class="control-label col-sm-3" for="subscribe-name">Name</label>
											<div class="col-md-7">
												<input class="form-control" placeholder="Name" name="subscribe-name" required="true" aria-invalid="false" type="text">
											</div>
									</div>
									<div class="form-group">
											<label class="control-label col-sm-3" for="subscribe-email">Email</label>
											<div class="col-md-7">
												<input class="form-control" placeholder="Email" name="subscribe-email" required="true" aria-invalid="false" type="email">
											</div>
									</div>
									<div class="form-group">
											<label class="control-label col-sm-3" for="subscribe-localmp">Your local MP (leave blank if don't know)</label>
											<div class="col-md-7">
												<input class="form-control" placeholder="My local MP" name="subscribe-localmp" aria-invalid="false" type="text">
											</div>
									</div>
									<!--
									<div class="form-group" align="center">
											<div class="col-sm-offset-4 col-sm-5">
												<div class="checkbox">
													<label>
													<input name="terms" required="true" data-validation-required-message="You have to agree with Terms and Conditions" aria-invalid="false" type="checkbox">
												I agree with <a href="#">Terms and Conditions</a>
													</label>
												</div>
											</div>
									</div>
									
									-->

									<div class="form-group">
										<div class="col-sm-offset-5 col-sm-5">
											<input class="btn btn-success" type="submit" name="subscribe-submit" value="Register">
										</div>
									</div>
							</form>

				</div>
			</div>
			<!-- End Main Content on sign up page -->
			
			<!-- Start Footer -->
			<?php
            	include($WEB_DIRS['sitePageFooter']);
            ?>
            <!-- End Footer -->
            
        </div>
	</body>
</html>
