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

  public function edit($id = null)
  {
    $user = $this->Users->get($id);
    if ($this->request->is(['post', 'patch', 'put'])) {
      $user = $this->Users->patchEntity($user, $this->request->data);
      if ($this->Users->save($user)) {
        $this->Flash->success('ユーザ情報を編集しました');
        return $this->redirect(['action'=>'index']);
      } else {
        $this->Flash->error('ユーザ情報の編集に失敗しました');
      }
    }
    $this->set(compact('user'));
  }

  public function delete($id = null)
  {
    $user = $this->Users->get($id);
    if ($this->request->is(['post', 'delete'])) {
      if ($this->Users->delete($user)) {
        $this->Flash->success('ユーザを削除しました');
        return $this->redirect(['action'=>'index']);
      } else {
        $this->Flash->error('ユーザの削除に失敗しました');
      }
    }
    $this->set(compact('user'));
  }
}