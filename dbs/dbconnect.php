<?php

$_DB = array();

$_DB['siteDBServer'] = 'localhost'; #Change this value as neccessary
$_DB['siteDBDefaultSchema'] = 'dap406-tahi';
$_DB['siteDBUsername'] = 'santhods'; #Change this value as neccessary
$_DB['siteDBCred'] = 'PrrHDwbfAc7ccPbA'; #Change this value as neccessary


class DBConnector{
  
  private $connectorName;
  
  private $connector; #connection instance
  private $status; #connection instance status
  
  private $_server, $_dbschema, $_user, $_cred; #connection credentials
  private $pdo_header = ''; #header for the PDO
  
  private static $_PDOMode = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, #To raise E_WARNING an error occured.
              	    PDO::ATTR_ORACLE_NULLS => PDO::NULL_EMPTY_STRING]; #To convert all NULLS to empty Strings.
  
  public function __construct($connectorName){
    $this->status = false;
    $this->connectorName = $connectorName;
  }
  
  public function getConnectorName(){
      return $this->connectorName;
  }
  
  public function setConnection($server, $dbschema, $user, $cred){ #Assign database values into the members in this class
    if (isset($server, $dbschema, $user, $cred))
    
      {
        $this->status = true;
        $this->_server = $server;
        $this->_dbschema = $dbschema;
        $this->_user = $user;
        $this->_cred = $cred;
      
        $this->pdo_header = 'mysql:host=' . $this->_server . ';dbname='.  $this->_dbschema;
    }
    else
    {
      echo 'Your database connection is not correct, please try again.';
    }
    
  }
  
  public function getConnection(){  
      if (!$this->status){
        echo 'You have not set a database connection or have not set them correctly, please try again';
        return NULL;
      }
      else 
      {
        try {
          $this->connector = new PDO($this->pdo_header, $this->_user, $this->_cred, self::$_PDOMode);
          #echo 'Connector - ' . $this->getConnectorName() . ': Database Connection successful.' . "\n";
          return $this->connector;
          
        } catch (PDOException $e) {
          echo 'You have a Database connection error: '. $e;
          return NULL;
          }
      }
  }

}


$cloud9 = new DBConnector('Cloud 9 Database');
$cloud9->setConnection($_DB['siteDBServer'], $_DB['siteDBDefaultSchema'], $_DB['siteDBUsername'], $_DB['siteDBCred']);


$dap406DB = $cloud9->getConnection();


/* ChiUni DB
$chiuni = new DBConnector('Chichester Uni Database');
$chiuni->setConnection('localhost', 'BTHUMMA1', 'BTHUMMA1', 'eyMcUuX4');

$dap406DB = $chiuni->getConnection();
*/

/*
$azure = new DBConnector('Azure DB Web Service');
$azure->setConnection('localhost', 'dap406-tahi', 'azure', '6#vWHD_$');

$dap406DB = $azure->getConnectiob();

*/