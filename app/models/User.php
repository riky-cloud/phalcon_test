<?php
use Phalcon\MVC\Model;
class User extends Model
{
	// public $id;
	// public $list;
	// public $keterangan;
	// public $date_create;
	public function testget()
	{
		$q = "select * from user";
		$query = $this->modelsManager->executeQuery($q);
		// return 'dari model';
		// $user = User::find();
		// return  "There are ". count($user). "\n";
		return $query;
	}
}
