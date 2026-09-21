<?php

class UserController
{

   public function list()
   {
      require __DIR__ . '/../Model/User.php';

      $userModel = new User();
      $users = $userModel->users();
      require __DIR__ . '/../View/user/user-list.php';
   }

   public function create()
   {
      require __DIR__ . '/../View/user/user-create.php';
   }

   public function store()
   {
      $data = $_POST;
      $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
      try {
         require __DIR__ . '/../Model/User.php';
         $userModel = new User();
         $userModel->create($data);
         header('Location: /');
         exit;
      } catch (PDOException $e) {
         die("Database error: " . $e->getMessage());
      }
   }

   public function edit($id)
   {
      require __DIR__ . '/../Model/User.php';
      $userModel = new User();
      $user = $userModel->single($id);
      require __DIR__ . '/../View/user/user-edit.php';
   }

   public function delete($id)
   {
      // Implement the delete functionality here
   }

}