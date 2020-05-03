<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
  public function initialize(array $config)
  {
    $this->addBehavior('Timestamp');
  }

  public function validationDefault(Validator $validator)
  {
    $validator
      ->notEmpty('family_name')
      ->requirePresence('family_name')
      ->notEmpty('family_name')
      ->requirePresence('family_name')
      ->notEmpty('gender')
      ->requirePresence('gender')
      ->notEmpty('phone')
      ->requirePresence('phone')
      ->notEmpty('email')
      ->requirePresence('email')
      ->add('email',[ 'email_unique' => [
            'rule' => 'validateUnique',
            'provider' => 'table',
            'message' => 'そのEメールはすでに使用されています'
        ]]);
    return $validator;
  }
}