<?php

namespace App\Controller;

class UsersController extends AppController
{
  public function index()
  {
    $users = $this->Users->find('all');
    $this->set(compact('users'));
  }

  public function view($id = null)
  {
    $user = $this->Users->get($id);
    $this->set(compact('user'));
  }

  public function add()
  {
    $user = $this->Users->newEntity();
    if ($this->request->is('post')) {
      $user = $this->Users->patchEntity($user, $this->request->data);
      if ($this->Users->save($user)) {
        $this->Flash->success('ユーザを作成しました');
        return $this->redirect(['action'=>'index']);
      } else {
        $this->Flash->error('ユーザの作成に失敗しました');
      }
    }
    $this->set(compact('user'));
  }
}