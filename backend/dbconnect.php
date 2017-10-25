<?php
$SERVER  = 'localhost';
$SVR_USR = 'root';
$SVR_PSD = 'ChiDap406';

$DB = 'Members';
$TBL_MAIN = 'Member Details';
$TBL_NAME = 'Name';
$TBL_EMAIL = 'Email';
$TBL_PSD = 'Password';
$TBL_PAIDMEMBER = 'Paidmember';

$response;
$link;
$buttonColour;

unset($response);
unset($link);
unset($buttonColour);

$connector = mysqli_connect($SERVER, $SVR_USR, $SVR_PSD, $DB);

if (!$connector) {
  echo "Database Error";
  die("Connection to Database has encontered the following problem\n" . mysqli_error($connector));
}

?>
