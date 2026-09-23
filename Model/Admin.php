<?php

class Admin
{

   public function login($login)
   {
      $pdo = Database::getInstance();
      $stmt = $pdo->prepare("SELECT * FROM admins WHERE login = :login");
      $stmt->execute(["login" => $login]);
      return $stmt->fetch(PDO::FETCH_ASSOC);
   }



}