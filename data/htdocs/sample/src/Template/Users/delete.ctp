<?php
$this->assign('title', "$user->family_name $user->given_name さん");
?>

<h1>
  ユーザー情報削除画面
</h1>
<table class="table mt-3">
  <tbody>
    <tr>
      <th scope="row">ID</th>
      <td><?= h($user->id) ?></td>
    </tr>
    <tr>
      <th scope="row">苗字</th>
      <td><?= h($user->family_name) ?></td>
    </tr>
    <tr>
      <th scope="row">名前</th>
      <td><?= h($user->given_name) ?></td>
    </tr>
    <tr>
      <th scope="row">性別</th>
      <td><?= h($this->Gender->convertToManOrWomanFrom($user->gender)) ?></td>
    </tr>
    <tr>
      <th scope="row">Eメール</th>
      <td><?= h($user->email) ?></td>
    </tr>
    <tr>
      <th scope="row">電話番号</th>
      <td><?= h($user->phone) ?></td>
    </tr>
    <tr>
      <th scope="row">詳細</th>
      <td><?= h($user->body) ?></td>
    </tr>
  </tbody>
</table>
<div class="alert alert-danger" role="alert"><strong>[注意]</strong>一度削除したデータは元に戻すことができません</div>
<?= $this->Form->postLink('削除する', ['action'=>'delete', $user->id], [
  'class' => ['btn', 'btn-raised', 'btn-danger'],
  'confirm'=>'本当に削除しますか？',
]); ?>
<div class="mt-5">
  <?= $this->Html->link('ユーザ一覧', ['action'=>'index'], ['class' => ['btn', 'btn-raised', 'btn-primary']]); ?>
  <?= $this->Html->link('編集', ['action'=>'edit', $user->id], ['class' => ['btn', 'btn-raised', 'btn-warning']]); ?>
</div>