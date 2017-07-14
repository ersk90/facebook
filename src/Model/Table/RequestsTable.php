<?php 
namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\ORM\Query;

class RequestsTable extends Table
{
	public function initialize(array $config)
	{
		parent::initialize($config);
		$this->setTable('requests');
		$this->setPrimaryKey('rid');
		$this->setDisplayField('rid');
	}
}

 ?>