<?php
namespace App\Models;

use Phalcon\MVC\Model;
class Tbl_todo extends Model
{
	// public $id;
	// public $list;
	// public $keterangan;
	// public $date_create;
	public static function testget()
	{
		$q = "select * from tbl_todo";
		$query = $this->modelsManager->executeQuery($q);
		return $query;

		// return Tbl_todo::find();
	}

	public static function isi()
	{
		return "ini isi";
	}
}
