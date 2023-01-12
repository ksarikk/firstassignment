<?php

namespace App\Model\Table;


use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;



class Showdata extends Table
{
    public function initialize(array $config): void
    {
        $this->setTable("users");
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('firstname')
            ->maxLength('firstname', 30)
            ->allowEmptyString('firstname');

        $validator
            ->scalar('lastname')
            ->maxLength('lastname', 30)
            ->allowEmptyString('lastname');

        $validator
            ->email('email')
            ->allowEmptyString('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

       

        $validator
            ->scalar('password')
            ->maxLength('password', 200)
            ->allowEmptyString('password');
    }


}