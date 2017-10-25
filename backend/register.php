<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Thank you</title>

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
  require("dbconnect.php");

$name = $_POST['membername'];
$email = $_POST['email'];
$password = $_POST['psd'];
$ispaidmember = 0;

$register_member = "INSERT INTO `$TBL_MAIN` (`$TBL_NAME`, `$TBL_EMAIL`, `$TBL_PSD`, `$TBL_PAIDMEMBER`) VALUES ('$name', '$email', '$password', $ispaidmember)";
$run = mysqli_query($connector, $register_member);

if (false===$run) {
	$response = "Your email may have already been registered, please try again";
	$link = "/frontend/signup.php";
	$buttonColour = "btn-danger"; #failed login
  echo mysqli_error($connector); #uncomment to debug only
}
else {
	$response = "Thank you for registering, you can now login..";
	$link = "/frontend/signin.php";
	$buttonColour = "btn-success"; #green button
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
