<?php 
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\ORM\RulesChecker;
use Cake\ORM\Query;
use Cake\Validation\Validator;

class UsersTable extends Table{

	public function initialize(array $config)
	{
		parent::initialize($config);
		$this->setTable('users');
		$this->setPrimaryKey('uid');
		$this->setDisplayField('uid');
		$this->addBehavior('Timestamp');

	}

	public function validationDefault(Validator $validator)
	{
		$validator 
				->integer('uid')
				->allowEmpty('uid','create');
		$validator
				->requirePresence('firstname')
				->notEmpty('firstname','Please fill this field');
		$validator
				->requirePresence('sirname')
				->notEmpty('sirname','Please fill this fields');
		$validator
				->requirePresence('email')
				->notEmpty('email','Please fill this fields');
		$validator
				->requirePresence('password')
				->notEmpty('password');	
		$validator
				->requirePresence('birthday')
				->notEmpty('birthday');
		$validator
				->requirePresence('gender')
				->notEmpty('gender');
		return $validator;
	}

	public function buildRules(RulesChecker $rules)
	{
		$rules->add($rules->isUnique(['email']));
		return $rules;
	}
}

 ?>