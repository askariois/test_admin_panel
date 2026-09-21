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

   public function create($data)
   {
      $pdo = Database::getInstance();
      $stmt = $pdo->prepare("INSERT INTO users (login, password, first_name, last_name, gender, birth_date) VALUES (:login, :password, :first_name, :last_name, :gender, :birth_date)");
      $stmt->execute($data);
   }

   public function single($id){
      $pdo = Database::getInstance();
      $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
      $stmt->execute(['id' => $id]);
      return $stmt->fetch(PDO::FETCH_ASSOC);
   }
}