<?php


$_LNK = array();

$_LNK['siteView'] = '/view/';  
$_LNK['siteCore'] = '/core/';
 
#Links to Portal Sections
$_LNK['siteSectionBills'] = $_LNK['siteView'] . 'bills/billsPortal.php';
$_LNK['siteSectionDebates'] = $_LNK['siteView'] . 'debates/debatesPortal.php';
$_LNK['siteSectionVotes'] = $_LNK['siteView'] . 'votes/votesPortal.php';
$_LNK['siteSectionMembers'] = $_LNK['siteView'] . 'members/membersPortal.php';
$_LNK['siteSectionCommittees'] = $_LNK['siteView'] . 'committees/committeesPortal.php';
$_LNK['siteSectionSearch'] = $_LNK['siteView'] . 'search/searchPortal.php';

$_LNK['siteItemBills'] = $_LNK['siteView'] . 'bills/bills.php';
$_LNK['siteItemDebates'] = $_LNK['siteView'] . 'debates/debates.php';
$_LNK['siteItemVotes'] = $_LNK['siteView'] . 'votes/votes.php';
$_LNK['siteItemMembers'] = $_LNK['siteView'] . 'members/members.php';
$_LNK['siteItemCommittees'] = $_LNK['siteView'] . 'committees/committees.php';
$_LNK['siteItemSearch'] = $_LNK['siteView'] . 'search/search.php';

#Pages
$_LNK['sitePageHome'] = '/index.php';
$_LNK['sitePageSignin'] = $_LNK['siteView'] . 'accounts/signin.php';
$_LNK['sitePageSubscribe'] = $_LNK['siteView'] . 'accounts/subscribe.php';

$_LNK['siteAdminPortal'] = $_LNK['siteView'] . 'accounts/portal/adminPortal.php';

$_LNK['siteMgrLogin'] = $_LNK['siteCore'] . 'authentication/verifyMgr.php';
$_LNK['siteUsrSubscribe'] = $_LNK['siteCore'] . 'authentication/verifySbcr.php';

#signout
$_LNK['siteSessionSignout'] = $_LNK['siteCore'] . 'sessions/signout.php';
