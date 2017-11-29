<?php
/*
    The author recommends the camelCase to specify the key of the $WEB_TITLE Array.
    camelCase follows this convention: first word all lowercase, the rest begins with an uppercase.
    Also, the first word must specify the page type for which the key will be used e.g. site, signup, signin, portal.
    Similarly, the second word must specify the component for which the key will be named after e.g. Title,
    Examples: siteTitle, headingTitle
*/
$WEB_VALUE = array();
$d = " - ";

# Components usable for all pages under this site

#Site Title 
$WEB_VALUE['sitePageTitle'] = "The Ayes Have It!";
#Site Motto
$WEB_VALUE['sitePageJumbotron'] = "Your Parliamentarian Records in the UK Houses of Parliament";
#Site Author
$WEB_VALUE['sitePageAuthorInfo'] = "DAP406 - Assignment, Student Number: 1707260";



#Home Page Titles
$WEB_VALUE['homeIntroTitle'] = 'Welcome!';
$WEB_VALUE['homeAboutTitle'] = 'About Us';
$WEB_VALUE['homeContactTitle'] = 'Contact Us';


#Section Titles
$WEB_VALUE['billsTitle'] = "Bills";
$WEB_VALUE['debatesTitle'] = "Debates";
$WEB_VALUE['votesTitle'] = "Votes";
$WEB_VALUE['membersTitle'] = "Members";
$WEB_VALUE['committeesTitle'] = "Committees";
$WEB_VALUE['searchTitle'] = "Search";


$WEB_VALUE['sectionBillsTitle']  = $WEB_VALUE['billsTitle'] . $d . $WEB_VALUE['sitePageTitle'];
$WEB_VALUE['sectionDebatesTitle']  = $WEB_VALUE['debatesTitle'] . $d . $WEB_VALUE['sitePageTitle'];
$WEB_VALUE['sectionVotesTitle']  = $WEB_VALUE['votesTitle'] . $d . $WEB_VALUE['sitePageTitle'];
$WEB_VALUE['sectionMembersTitle']  = $WEB_VALUE['membersTitle'] . $d . $WEB_VALUE['sitePageTitle'];
$WEB_VALUE['sectionCommitteesTitle']  = $WEB_VALUE['committeesTitle'] . $d . $WEB_VALUE['sitePageTitle'];
$WEB_VALUE['sectionSearchTitle'] = $WEB_VALUE['searchTitle'] . $d. $WEB_VALUE['sitePageTitle'];


#Sign in page
$WEB_VALUE['signinTitle'] = "Sign In";
$WEB_VALUE['sectionSigninTitle'] = $WEB_VALUE['signinTitle'] . $d . $WEB_VALUE['sitePageTitle'];

#Subscribe Page
$WEB_VALUE['subscribeTitle'] = "Subscribe" . $d . $WEB_VALUE['sitePageTitle'];
$WEB_VALUE['sectionSubscribeTitle'] = "Subscribe to the weekly newsletter from " . $WEB_VALUE['sitePageTitle'] ;

