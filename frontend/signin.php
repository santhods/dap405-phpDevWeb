<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
        include('./backend/components/_BootstrapCDN.php');
        include($_SERVER['DOCUMENT_ROOT'] . "/backend/components/webinfo.php");
    ?>

    <title><?php print($WEB_VALUE['siteTitle']); ?></title>

    </head>

	<body id="top">

			<?php
				include("../backend/header.php");

				if (isset($_SESSION['auth'])){
					if ($_SESSION['auth']) {
						header("location: /frontend/memberportal.php");
					}
				}

			?>

			<!-- start header section -->
			<section id="header">
					<header>						
						<?php include('./components/membership-nav-bar.php'); ?>
				</header>
			</section>
			<!-- end header section -->

			<section id="signin">
				<div class="container">
					<div class="row">
							<div class="col-md-12">
								<h3 class="page-header">Sign In</h3>
							</div>
					</div>
					<form class="form-horizontal" method="post" action="../backend/verifylogin.php">
							<div class="form-group">
								<label class="control-label col-sm-3" for="email">Email</label>
								<div class="col-md-7">
									<input class="form-control" placeholder="Email" name="email" required="" data-validation-required-message="Please enter your email." aria-invalid="false" type="email">
								</div>
							</div>
							<div class="form-group">
									<label class="control-label col-sm-3" for="psd">Password</label>
									<div class="col-md-7">
										<input class="form-control" placeholder="Password" name="psd" required="" data-validation-required-message="Please enter your passowrd." aria-invalid="false" type="password">
									</div>
							</div>

							<div class="form-group">
								<div class="col-sm-offset-5 col-sm-5">
									<input class="btn btn-primary" type="submit" name="signin" value="Sign In">
								</div>
							</div>
					</form>
				</div>
		</section>

				<!--  start footer section -->
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
