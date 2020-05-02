<?php
$this->assign('title', 'ユーザ一覧');
?>

<h1>
  ユーザ一覧
</h1>

<ul>
  <?php foreach ($users as $user) : ?>
    <li>
      <?= h($user->family_name) ?>
      <?= h($user->given_name) ?>
      <?= h($user->email) ?>
      <?= h($user->phone) ?>
      <?= h($user->body) ?>
    </li>
  <?php endforeach ?>
</ul>