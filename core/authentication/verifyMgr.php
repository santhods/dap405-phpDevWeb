<?php
  
  include_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");
  include_once($WEB_DIRS['siteAuthenticator']);

if (isset($_POST['signin-submit'], $_POST['signin-user'], $_POST['signin-cred'])){
    
    $user = $_POST['signin-user'];
    $cred = $_POST['signin-cred'];
  
    $passwordchecker = new LoginAuthenticator($dap406DB, $user, $cred);
    $passwordchecker->run();
    
    if ($passwordchecker->getIsAuthenticated()){
        $_SESSION['auth'] = true;
        $_SESSION['err'] = null;
        header("location: " . $_LNK['siteAdminPortal']);
      
    } else {
        $_SESSION['err'] = "The password is incorrect, please try again.";
        header("location: ". $_LNK['sitePageSignin']);
      
    }
    
} else {
    header($_LNK['sitePageSignin']);
    echo "Please check your login details.";
}

?>