<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @method \App\Model\Entity\User newEmptyEntity()
 * @method \App\Model\Entity\User newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class UsersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('user');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Articles', [
            'foreignKey' => 'user_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('firstname')
            ->maxLength('firstname', 15)
            ->requirePresence('firstname', 'create')
            ->notEmptyString('firstname', 'Please enter First Name')
            ->add('firstname', [
                'firstname' => [
                    'rule' => array('custom', '/^[A-Za-z_]*$/'),
                    'message' => ('Please enter Firstname in characters only.'),
                ],
                [
                    'rule' => ['lengthbetween', 3, 15],
                    'message' => ('Length of Firstname should be inbetween 3-15 characters.'),
                ]
            ]);

        $validator
            ->scalar('lastname')
            ->maxLength('lastname', 15)
            ->requirePresence('lastname', 'create')
            ->notEmptyString('lastname', 'Please enter Last Name')
            ->add('lastname', [
                'lastname' => [
                    'rule' => array('custom', '/^[A-Za-z_]*$/'),
                    'message' => __('Please enter Lastname in characters only.'),
                ],
                [
                'rule' => ['lengthbetween',3,15],
                'message' => ('Length of Lastname should be inbetween 3-15 characters.'), 
                ]
            ]);

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email', 'Please enter Email.')
            ->add('email', 'validFormat', [
                'rule' => 'email',
                'message' => 'E-mail must be valid'
            ]);


        $validator
            ->scalar('phone')
            ->integer('phone')
            ->requirePresence('phone', 'create')
            ->maxLength('phone', 12)
            ->notEmptyString('phone', 'Please enter Phone Number.')


            ->add('phone', [
                [
                    'rule' => ['lengthbetween', 10, 12],
                    'message' => 'Length of Phone Number should be between 10 and 12',
                ]
            ]);



        $validator
            ->scalar('password')

            ->maxLength('password', 18)
            ->minLength('password', 8,'Minimum length must be 8')
            ->requirePresence('password', 'create')
            ->notEmptyString('password', 'Please enter Password.')
            ->add('password', [
                 'uppercase' => [
                    'rule' => array('custom', '/[A-Z]/'),
                    'message' => __('Password must contain at least one Uppercase letter.'),
                 ],
                 'lowercase' => [
                    'rule' => array('custom', '/[a-z]/'),
                    'message' => __('Password must contain at least one Lowercase letter.'),
                 ],
                 'specialcharacter' => [
                    'rule' => array('custom', '/[!@#$%^&*_]/'),
                    'message' => __('Password must contain at least one Special character.'),
                 ],
                 'number' => [
                    'rule' => array('custom', '/[0-9]/'),
                    'message' => __('Password must contain at least one Number.'),
                 ],
               
            
            ]);

        $validator
            ->scalar('confirmpassword')
            ->requirePresence('confirmpassword', 'create')
            ->notEmptyString('confirmpassword', 'Please Re-enter Password to Confirm.')
            ->add('confirmpassword', [
                'match' => [
                    'rule' => ['compareWith', 'password'],
                    'message' => 'The passwords does not match!',
                ]
            ]);



            $validator
            ->allowEmptyFile('image_file')
            ->add( 'image_file', [
            'mimeType' => [
                'rule' => [ 'mimeType', [ 'image/jpg', 'image/png', 'image/jpeg' ] ],
                'message' => 'Please upload file in jpg,jpeg or png format.',
            ],
            'fileSize' => [
                'rule' => [ 'fileSize', '<=', '1MB' ],
                'message' => 'Image file size must be less than 1MB.',
            ],
        ] );
        
            



        // $validator
        // ->scalar('gender')
        // ->maxLength('gender', 255)
        // ->requirePresence('gender', 'create')
        // ->notEmptyString('gender','Please select Gender');

        return $validator;


    }


    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['email']), ['errorField' => 'email']);

        return $rules;
    }
}