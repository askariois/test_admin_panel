<?php

class User
{

   public function users($page = 1)
   {
      $count = 10;
      $offset = 10 * ($page - 1);
      $pdo = Database::getInstance();
      $stmt = $pdo->prepare("SELECT * FROM users LIMIT :count OFFSET :offset");
      $stmt->bindValue(':count', $count, PDO::PARAM_INT);
      $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
      $stmt->execute();
      $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $users;
   }
}