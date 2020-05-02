<?php

namespace App\Controller;

class UsersController extends AppController
{
  public function index()
  {
    $users = $this->Users->find('all');
    $this->set(compact('users'));
  }
}