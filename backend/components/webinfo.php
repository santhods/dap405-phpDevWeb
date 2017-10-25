<?php
/*
    The author recommends the camelCase to specify the key of the $WEB_TITLE Array.
    camelCase follows this convention: first word all lowercase, the rest begins with an uppercase.
    Also, the first word must specify the page type for which the key will be used e.g. site, signup, signin, portal.
    Similarly, the second word must specify the component for which the key will be named after e.g. Title,
    Examples: siteTitle, headingTitle
*/
include('tempfile.php');


$WEB_VALUE = array();

# Components usable for all pages under this site
$WEB_VALUE['siteRootPath'] = $_SERVER['DOCUMENT_ROOT'];
$WEB_VALUE['sitePageTitle'] = "The Noes Have It!";
$WEB_VALUE['sitePageJumbotron'] = "Your Parliamentarians Voting Records in the UK Houses of Parliament";
$WEB_VALUE['sitePageAuthorInfo'] = "DAP406 - Assignment, Student Number: 1707260";

$WEB_VALUE['signinPageTitle'] = "Sign In - " + $WEB_VALUE['sitePageTitle'];
$WEB_VALUE['signinDialogTitle'] = "Sign In";
$WEB_VALUE['signupPageTitle'] = "Register to " + $WEB_VALUE['siteTitle'];
$WEB_VALUE['signupDialogTitle'] = "Create your Account";



