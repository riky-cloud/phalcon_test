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
		return Tbl_todo::find();
		return $query;
	}

	public static function isi()
	{
		return "ini isi";
	}
}
