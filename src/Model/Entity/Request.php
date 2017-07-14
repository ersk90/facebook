<?php 
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class Request extends Entity
{
	protected $_accessible = ['rid'=>false, '*'=>true];

}
 ?>
