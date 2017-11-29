<?php 


#This array will store all directories of all the reusable site components.
#This will prevent each file having an inconsistent way of specifying a 
#relative path when calling include(); function to attach a web part into a page.

$WEB_DIRS = array();


$WEB_DIRS['siteRootPath'] = $_SERVER['DOCUMENT_ROOT'] . '/';

    #include webinfo - string of words for this site
    include_once($WEB_DIRS['siteRootPath'] . "core/config/webinfo.php");
    #include links - hyperlinks for site parts
    include_once($WEB_DIRS['siteRootPath'] . "core/config/links.php");
    #include database connector object instance
    include_once($WEB_DIRS['siteRootPath'] . "dbs/dbconnect.php");
    #include session starter
    include_once($WEB_DIRS['siteRootPath'] . "core/sessions/start.php");
    #include admin session checker
    include_once($WEB_DIRS['siteRootPath'] . "core/sessions/admin.php");
    #include error labels directive
    include_once($WEB_DIRS['siteRootPath'] . "view/templates/partials/MsgLabels.php");

#Directories
$WEB_DIRS['siteDirView'] = $WEB_DIRS['siteRootPath'] . "view/" ;
$WEB_DIRS['siteDirCore'] = $WEB_DIRS['siteRootPath'] . "core/";
$WEB_DIRS['siteDirDbs']  = $WEB_DIRS['siteRootPath'] . "dbs/";

#Web Parts
$WEB_DIRS['bootstrapCDN'] = $WEB_DIRS['siteDirView'] . 'templates/_BootstrapCDN.php';
$WEB_DIRS['sitePageFooter'] = $WEB_DIRS['siteDirView'] . 'templates/partials/sitefooter.php';


#Navigation Bar
$WEB_DIRS['sitePageNavBar'] = $WEB_DIRS['siteDirView'] . "templates/partials/siteMainNavBar.php";

#core dirs
$WEB_DIRS['siteAuthenticator'] = $WEB_DIRS['siteRootPath'] . "core/authentication/authenticator.php";

$WEB_DIRS['siteDbsQuery'] = $WEB_DIRS['siteDirDbs'] . 'query/';
$WEB_DIRS['siteDbsUpdate'] = $WEB_DIRS['siteDirDbs'] . 'update/';

