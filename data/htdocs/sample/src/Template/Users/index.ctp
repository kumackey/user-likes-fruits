<?php
$this->assign('title', 'ユーザ一覧');
?>

<h1>
  ユーザ一覧
</h1>

<table class="table mt-3 table-striped">
  <thead>
    <tr>
      <th>ID</th>
      <th>氏名</td>
      <th>Eメール</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($users as $user) : ?>
      <tr>
        <th scope="row"><?= h($user->id) ?></th>
        <td>
          <?= $this->Html->link("$user->family_name $user->given_name", ['action'=>'view', $user->id]); ?>
        </td>
        <td>
          <?= h($user->email) ?>
        </td>
        <td>
          <?= $this->Html->link('編集', ['action'=>'edit', $user->id], ['class' => ['btn', 'btn-raised', 'btn-primary']]); ?>
        </td>
        <td>
          <?= $this->Html->link('削除', ['action'=>'delete', $user->id], ['class' => ['btn', 'btn-raised', 'btn-danger']]); ?>
        </td>
      </tr>
    <?php endforeach ?>
  </tbody>
</table>

<?= $this->Html->link('ユーザ作成', ['action'=>'add'], ['class' => ['btn', 'btn-raised', 'btn-primary']]); ?>