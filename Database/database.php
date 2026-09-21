<?php 

class Database {
    private static $instance;
    private function __construct() {
    }

    public static function getInstance() {
      $config = require __DIR__ . '/../config.php';
      $host  = $config['host'];
      $db_name  = $config['db_name'];
      $username = $config['username'];
      $password = $config['password'];
      try{
      if (!self::$instance) {
        self::$instance = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8mb4", $username, $password);
        self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }

      return self::$instance;
      } catch (PDOException $e) {
        die("Database connection failed: " . $e->getMessage());
      }

    }

}


