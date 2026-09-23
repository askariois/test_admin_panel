<?php

class UserController
{

   public function list()
   {
      require __DIR__ . '/../Model/User.php';
      require __DIR__ . '/../Model/Admin.php';
      $perPage = 10;

      $page = $_GET['page'] ?? 1;
      $search = $_GET['search'] ?? "";
      $userModel = new User();
      $users = $userModel->users($page, $perPage, $search);
      $total = $userModel->countAll();


      $admin = new Admin();
      $adminData = $admin->login($_SESSION['admin_login']);

      $totalPages = ceil($total / $perPage);


      require __DIR__ . '/../View/user/user-list.php';
   }

   public function create()
   {
      require __DIR__ . '/../View/user/user-create.php';
   }

   public function show($id)
   {
      require __DIR__ . '/../Model/User.php';
      $userModel = new User();
      $user = $userModel->single($id);
      require __DIR__ . '/../View/user/user-single.php';
   }


   public function store()
   {
      $data = $_POST;
      $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
      try {
         require __DIR__ . '/../Model/User.php';
         $userModel = new User();
         $userModel->create($data);
         header('Location: /home');
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

   public function update($id)
   {
      $data = $_POST;

      if (!empty($data['password'])) {
         $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
      } else {
         unset($data['password']);
      }
      try {
         require __DIR__ . '/../Model/User.php';
         $userModel = new User();
         $userModel->update($id, $data);
         header('Location: /home');
         exit;
      } catch (PDOException $e) {
         die("Database error: " . $e->getMessage());
      }
   }

   public function delete($id)
   {
      require __DIR__ . '/../Model/User.php';
      $userModel = new User();
      $user = $userModel->delete($id);
      header('Location: /home');
      exit;
   }




}