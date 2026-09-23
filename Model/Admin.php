<?php

class Admin
{

   public function login($login)
   {
      $pdo = Database::getInstance();
      $smtm = $pdo->prepare("SELECT * FROM admins WHERE login = :login");
      $smtm->execute(["login" => $login]);
      return $smtm->fetch(PDO::FETCH_ASSOC);
   }


}