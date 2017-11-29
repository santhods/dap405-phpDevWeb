<?php
/*
Instructions
1. check the presence of the $_POST['submmit'] value
2. if so go to next step, else throw an error
3. Then check 

*/
include_once($_SERVER['DOCUMENT_ROOT'] . "/config.php");

abstract class Authenticator{
    
    private $usr = null; #user name
    private $remoteCred;
    private $isAuthenticated = false;
    private $pdoInstance;

    abstract protected function run();
    abstract protected function getIsAuthenticated();
}


class SubscribeAuthenticator extends Authenticator{
    
    private $email; #user input credential
    private $localmp; #database-stored credential
    
    public function __construct($pdoInstance, $usr, $email, $localmp){
        $this->pdoInstance = $pdoInstance;
        $this->usr = $usr;
        $this->email = $email;
        $this->localmp = $localmp;
    }
    
    private function getRemoteCred(){ #only return the cred value or null
        if (isset($this->usr, $this->email))
        {
        $sbcrSetter = $this->pdoInstance->prepare("INSERT INTO `extTblSubscribers-List`(`accountName`, `email`, `localMP`) VALUES (:usr, :email, :localmp)");
        $sbcrSetter->bindValue(':usr', $this->usr, PDO::PARAM_STR);
        $sbcrSetter->bindValue(':email', $this->email, PDO::PARAM_STR);
        
        if (isset($this->localmp)) {
            $sbcrSetter->bindValue(':localmp', $this->localmp, PDO::PARAM_STR);
        } else {
            $sbcrSetter->bindValue(':localmp', NULL, PDO::PARAM_NULL);
        }
        
        try {
            if ($sbcrSetter->execute()) {
                return true;
            }
        } catch (PDOException $e){
                echo "Error : $e";
                return false;
            }
        
        } else {
            return false;
        }
    }
    
    private function verifySubscription($cred){
        if (isset($cred) && ($cred == true)){ 
            return true;
        } else {
            return false; 
        }
    }
    
    public function getIsAuthenticated(){
        return $this->isAuthenticated;
    }
    
    public function run(){
        $this->remoteCred = $this->getRemoteCred();
        $this->isAuthenticated = $this->verifySubscription($this->remoteCred);
    }
    
    
}

class LoginAuthenticator extends Authenticator{
    
    private $plainCred; #user input credential
    
    public function __construct($pdoInstance, $usr, $cred){
        $this->pdoInstance = $pdoInstance;
        $this->usr = $usr;
        $this->plainCred = $cred;
    }
    
    private function getRemoteCred(){ #only return the cred value or null
        if (isset($this->usr, $this->plainCred))
        {
        $credGetter = $this->pdoInstance->prepare("SELECT `cred` from `extTblMgr` WHERE `user` = :usr");
        $credGetter->bindValue(':usr', $this->usr, PDO::PARAM_STR);

            try {
                $credGetter->execute();
                $credArr = $credGetter->fetch(PDO::FETCH_ASSOC);
                
                #var_dump($credArr['cred']);
                
                return $credArr['cred'];
                
            } catch (PDOException $e){
                echo "Error : $e";
                return null;
            }
        
        } else {
            return null;
        }
    }
    
    private function verifyAccess($pwd, $cred){
        if (isset($cred)){ #if empty, means the password from the user does not exist.
            
            if(password_verify($pwd, $cred))
            {
                return true;
            } else {
                return false;
                }
        } else {
            return false; 
        }
    }
    
    public function getIsAuthenticated(){
        return $this->isAuthenticated;
    }
    
    public function run(){
        $this->remoteCred = $this->getRemoteCred();
        $this->isAuthenticated = $this->verifyAccess($this->plainCred, $this->remoteCred);
    }
    
}

