<?php
/*
Only run this file when first launching the site to enable the Admin Login.

include_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");

function addMgrCred($pdo, $usr, $cred){
##Creating user credentials
$hashedCred = password_hash($cred, PASSWORD_DEFAULT);

$addMgrObj = $pdo->prepare('INSERT INTO extTblMgr (user, cred) VALUES (:usr, :cred)');
$addMgrObj->bindValue(':usr', $usr, PDO::PARAM_STR);
$addMgrObj->bindValue(':cred', $hashedCred, PDO::PARAM_STR);

try {
    if ($addMgrObj->execute()){
        echo "Add Default Cred successful <br>";
    }
} catch (PDOException $e){
    echo "There is an error adding the default cred: $e";
}

}
 
#Credential 1 (created for the moderator): this manager login credential is now in the database;
$usr = 'MS0032-mgr';
$cred = '$DAP0845';
#############################################


addMgrCred($dap406DB, $usr, $cred);

*/