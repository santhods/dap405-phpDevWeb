<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

        <?php
            include('./backend/components/_BootstrapCDN.php');
            include($_SERVER['DOCUMENT_ROOT'] . "/backend/components/webinfo.php");
        ?>

     <title><?php print($WEB_VALUE['signupPageTitle']); ?></title>

    </head>

	<body id="top">
			<!-- start header section -->
			<section id="header">
					<header>
						<?php include('./components/membership-nav-bar.php'); ?>
				
				</header>
			</section>
			<!-- end header section -->


			<section id="signup">
				<div class="container">
							<div class="row">
       							<div class="col-md-12">
											<h3 class="page-header"><?php print($WEB_VALUE['signupDialogTitle']); ?></h3>
										</div>
       				</div>
								<form class="form-horizontal" method="post" action="../backend/register.php">
									<div class="form-group">
											<label class="control-label col-sm-3" for="membername">Name</label>
											<div class="col-md-7">
												<input class="form-control" placeholder="Name" name="membername" required="" data-validation-required-message="Please enter your name." aria-invalid="false" type="text">
											</div>
									</div>
									<div class="form-group">
											<label class="control-label col-sm-3" for="email">Email</label>
											<div class="col-md-7">
												<input class="form-control" placeholder="Email" name="email" required="" data-validation-required-message="Please enter your email." aria-invalid="false" type="email">
											</div>
									</div>
									<div class="form-group">
											<label class="control-label col-sm-3" for="psd">Password</label>
											<div class="col-md-7">
												<input class="form-control" placeholder="Password" name="psd" required="" data-validation-required-message="Please create a new password." aria-invalid="false" type="password">
											</div>
									</div>
									<div class="form-group" align="center">
											<div class="col-sm-offset-4 col-sm-5">
												<div class="checkbox">
													<label>
													<input name="terms" required="" data-validation-required-message="You have to agree with Terms and Conditions" aria-invalid="false" type="checkbox">
												I agree with <a href="#">Terms and Conditions</a>
													</label>
												</div>
											</div>
									</div>

									<div class="form-group">
										<div class="col-sm-offset-5 col-sm-5">
											<input class="btn btn-success" type="submit" name="register" value="Register">
										</div>
									</div>
								</form>

				</div>
			</section>

				<section id="footer">
					<div class="container-fluid">
						<div class="row">
							<div class"col-lg-12">
								<h4 class="page-header"><?php print($WEB_VALUE['authorInfo']); ?></h4>
								</div>
							</div>
					</div>
				</section>
	</body>
</html>
