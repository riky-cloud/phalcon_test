<?php

class IsiController extends ControllerBase
{
    public function IniAction()
    {
        $data = new Tbl_todo();
        $query = $data->testget();
        foreach ($query as $row) {
            echo "nama isi : ".$row->list.'<br>';
        }
    }
}

?>
