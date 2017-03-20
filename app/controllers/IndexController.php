<?php
namespace App\Controllers;

use App\Models\Tbl_todo;
class IndexController extends ControllerBase
{

    public function indexAction()
    {
        echo "string";
    }

    public function dataAction()
    {
        echo Tbl_todo::testget();
    }

}
