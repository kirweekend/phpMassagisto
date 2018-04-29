<?php
//require_once "config.php";

class connection {

  private $connection;
  private static $instance;

  //Make sure only 1 connection is made
  public static function get_instance(){
    if(!self::$instance){
      self::$instance = new self();
    }
    return self::$instance;
  }

  private function __construct(){
    require_once "config.php";
    $this->connection = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    if ($this->connection->connect_error){
      die("Connection error: " . $mysqli->connect_error);
    }
  }

  //private function __clone(){}   <- could use this to prevent duplication of connection

  public function get_connection(){
    return $this->connection;
  }
}
?>
