<?php

class User
{

   public function users($page = 1, $perPage = 10, $search = "")
   {
      $count = $perPage;
      $offset = $perPage * ($page - 1);
      $pdo = Database::getInstance();
      $sql = "SELECT * FROM users";

      if (!empty($search)) {
         $sql .= " WHERE login LIKE :search";
      }

      $sql .= " LIMIT :limit OFFSET :offset";

      $stmt = $pdo->prepare($sql);

     if (!empty($search)) {
         $stmt->bindValue(':search', "%$search%", PDO::PARAM_STR);
      }
      $stmt->bindValue(':limit', $count, PDO::PARAM_INT);
      $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
 
      $stmt->execute();
      $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $users;
   }

   public function countAll()
   {
      $pdo = Database::getInstance();
      $stmt = $pdo->query("SELECT COUNT(*) FROM users");
      return $stmt->fetchColumn();
   }

   public function create($data)
   {
      $pdo = Database::getInstance();
      $stmt = $pdo->prepare("INSERT INTO users (login, password, first_name, last_name, gender, birth_date) VALUES (:login, :password, :first_name, :last_name, :gender, :birth_date)");
      $stmt->execute($data);
   }

   public function single($id)
   {
      $pdo = Database::getInstance();
      $stmt = $pdo->prepare("SELECT * FROM users WHERE id = :id");
      $stmt->execute(['id' => $id]);
      return $stmt->fetch(PDO::FETCH_ASSOC);
   }

   public function update($id, $data)
   {
      $pdo = Database::getInstance();
      $setParts = [];
      foreach ($data as $key => $value) {
         $setParts[] = "$key = :$key";
      }
      $setString = implode(", ", $setParts);
      $data['id'] = $id;
      $stmt = $pdo->prepare("UPDATE users SET $setString WHERE id = :id");
      $stmt->execute($data);

   }

   public function delete($id)
   {
      $pdo = Database::getInstance();
      $stmt = $pdo->prepare("DELETE FROM users WHERE id = :id");
      $stmt->execute(['id' => $id]);
   }




}