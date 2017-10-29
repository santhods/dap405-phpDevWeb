<?php 


    include($_SERVER['DOCUMENT_ROOT'] . "/backend/components/webinfo.php");

#This array will store all directories of all the reusable site components.
#This will prevent each file having an inconsistent way of specifying a 
#relative path when calling include(); functiion to attach a web part into a page.

$WEB_DIRS = array();


$WEB_DIRS['siteRootPath'] = $_SERVER['DOCUMENT_ROOT'];

#Pages
$WEB_DIRS['siteDefaultPage'] = "./index.php";
$WEB_DIRS['siteSigninPage'] = "/frontend/signin.php";
$WEB_DIRS['siteSignupPage'] = "/frontend/signup.php";

#Web Parts
$WEB_DIRS['bootstrapCDN'] = $WEB_DIRS['siteRootPath'] . "/backend/components/_BootstrapCDN.php";
$WEB_DIRS['sitePageFooter'] = $WEB_DIRS['siteRootPath'] . "/frontend/components/sitefooter.php";


#Navigation Bar
$WEB_DIRS['sitePageNavBar'] = $WEB_DIRS['siteRootPath'] . "/frontend/default-nav-bar.php";
$WEB_DIRS['siteMemberNavBar'] = $WEB_DIRS['siteRootPath'] . "/frontend/components/membership-nav-bar.php";
$WEB_DIRS['siteMemberNavBtn'] = $WEB_DIRS['siteRootPath'] . "/frontend/components/default-nav-btn.php";
