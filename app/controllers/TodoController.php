<?php
// use Phalcon\Mvc\View;
// use Phalcon\Mvc\Model\Query;
//  use Phalcon\Mvc\Model\Manager as ModelsManager;
class TodoController extends ControllerBase
{


    public function indexAction()
    {
        echo "string2";
    }

    public function route404Action()
    {
        echo "error 404";
    }

    public function get2Action(){
        // $data  = new Tbl_todo();
        // $query = $this->modelsManager->excuteQuery("SELECT * FROM tbl_todo");
        $q = "select * from tbl_todo";
$query = $this->modelsManager->executeQuery($q);
        // $cars  = $query->execute();
//         $cars = $manager->createQuery(
//     "SELECT * FROM tbl_todo"
// );
// $cars =
//             $this->modelsManager->createQuery("SELECT * FROM tbl_todo")
//                 ->execute()->toArray();

// Execute the query returning a result if any
// $cars = $query->execute();
        print_r($query);
    }

    public function homeAction()
    {
        // $model = new \Auth\Models\DataModel();
        $model = new Data_mod();

        $this->assets->addCss("css/style.css");
        $this->assets->addCss("css/index.css");

        // And some local JavaScript resources
        $this->assets->addJs("js/jquery.js");
        $this->assets->addJs("js/bootstrap.min.js");

        $data['dataarray'] = 'isi array';
        $data['mod'] = $model->testget();

        $this->view->setVars($data);

        // $this->view->render('includes', 'head');

        $this->view->render('pages', 'home');

        // $this->view->render('includes', 'footer');


        // $content = $this->view->getContent();


    }

    public function halamanAction()
    {
        // $data['list'] = array(
        //     'nama'  => 'riky'
        // );

         $this->view->setLayout("todo_view/home");
    }
}
