<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register to CS Society</title>

	<script
  src="https://code.jquery.com/jquery-3.2.1.slim.js"
  integrity="sha256-tA8y0XqiwnpwmOIl3SGAcFl2RvxHjA8qp0+1uCGmRmg="
  crossorigin="anonymous"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!--  custom CSS -->
<link rel="stylesheet" href="../css/index.css">

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
											<h3 class="page-header">Sign Up to CS Society Membership</h3>
										</div>
       				</div>
								<form class="form-horizontal" method="post" action="/backend/register.php">
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
								<h4 class="page-header">DAP405 - Assignment, Student Number: 1707260</h4>
								</div>
							</div>
					</div>
				</section>
	</body>
</html>