<?php
$this->assign('title', 'ユーザ情報の編集');
?>

<div class="container mt-5">
  <div class="row no-gutters">
    <div class="col-8 card offset-2">
      <div class="card-header text-center">
        <h2>ユーザ情報の編集</h2>
      </div>
      <div class="card-body">
        <?= $this->Form->create($user); ?>
        <div class="form-row">
          <div class="form-group col-6">
            <?= $this->Form->input('family_name', [
              'label' => '苗字',
              'class' => 'form-control',
              'placeholder' => '例) 田中',
            ]); ?>
          </div>
          <div class="form-group col-6">
            <?= $this->Form->input('given_name', [
              'label' => '名前',
              'class' => 'form-control',
              'placeholder' => '例) 太郎',
            ]); ?>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-8">
            <?= $this->Form->input('phone', [
              'label' => '電話番号',
              'class' => 'form-control',
              'placeholder' => '例) 012-3456-7890',
            ]); ?>
          </div>
          <div class="form-group col-4 pt-5">
            <?= $this->Form->radio('gender', [
              ['value' => '1', 'text' => '男性', 'class' => 'ml-3'],
              ['value' => '2', 'text' => '女性', 'class' => 'ml-3'],
            ], [
              'label' => '性別',
              'type' => 'email',
              'class' => 'form-control ml-3',
            ]); ?>
          </div>
        </div>
        <div class="form-group">
          <?= $this->Form->input('email', [
            'label' => 'Eメール',
            'type' => 'email',
            'class' => 'form-control',
            'placeholder' => '例) tanaka@taro.com',
          ]); ?>
        </div>
        <div class="form-group">
          <?= $this->Form->input('body', [
            'rows'=>'3',
            'label' => '詳細',
            'class' => 'form-control',
            'placeholder' => '(任意) その他ご記載下さい',
          ]); ?>
        </div>
        <?= $this->Form->button('編集', ['class' => 'btn btn-raised btn-warning']); ?>
        <?= $this->Form->end(); ?>
      </div>
    </div>
  </div>
</div>