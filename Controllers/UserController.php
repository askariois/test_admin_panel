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
   }
}