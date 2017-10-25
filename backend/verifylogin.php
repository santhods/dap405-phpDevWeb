<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ice Cream</title>

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

  <?php

  try {
      require("dbconnect.php");

      $email = $_POST['email'];
      $password = $_POST['psd'];

      $verify_member = "SELECT * FROM `$TBL_MAIN` WHERE `$TBL_EMAIL` = '$email' AND `$TBL_PSD` = '$password'";

      $run = mysqli_query($connector, $verify_member);

  } catch (Exception $e){
      echo $e;
  }

if (mysqli_num_rows($run) > 0) {
	$temp_row = mysqli_fetch_row($run);
	$name = $temp_row[0];
	$response = "Welcome $name";
	$link = "../backend/initialisePortal.php";
	$buttonColour = "btn-success"; #successful login

	require("header.php");
	$_SESSION['auth'] = true;
	$_SESSION['usr'] = $email;
}
else {
	$response = "Sign In Error, please try again.";
	$link = "../frontend/signin.php";
	$buttonColour = "btn-danger"; #failed login
	#echo mysqli_error($connector); - uncomment to debug only
}
echo '<div class="container">
					<div class="row">
						<div class="col-md-12">
								<h4 class="page-header">' . $response . '</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-5 col-md-5">
							<a href="' . $link . '" class="btn ' . $buttonColour . ' btn-lg">Continue</a>
						</div>
				</div>
			</div>
		</div>';
mysqli_close($connector);
?>
  </body>
</html>
