<?php 
  include_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");
  include_once($WEB_DIRS['siteAuthenticator']);

if (isset($_POST['subscribe-submit'], $_POST['subscribe-name'], $_POST['subscribe-email'])){
    
    $user = $_POST['subscribe-name'];
    $email = $_POST['subscribe-email'];
    $localmp = (empty($_POST['subscribe-localmp']) ? NULL : $_POST['subscribe-localmp']);
    
    
    $detailchecker = new SubscribeAuthenticator($dap406DB, $user, $email, $localmp);
    $detailchecker->run();
    
    if ($detailchecker->getIsAuthenticated()){
        $_SESSION['subscribe-status'] = true;
        $_SESSION['subscribe-info'] = "Thank you for subscribing";
    
    } else {
        $_SESSION['subscribe-status'] = false;
        $_SESSION['subscribe-info'] = "There is an error on your details, please try again.";
    
    }
    header("Location: " . $_LNK['sitePageSubscribe']);
    
} else {
    $_SESSION['subscribe-status'] = false;
    $_SESSION['subscribe-info'] = "Please enter your details.";
}
