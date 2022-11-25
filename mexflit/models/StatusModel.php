<?php
class StatusModel extends Model{

    public function set($status_data=array()){
        foreach($status_data as $key=>$value){
            $$key=$value; //Aqui creamos variables con el mismo nombre de key
        }
        $this->query="REPLACE INTO status (status_id, status) VALUES ($status_id,'$status')";
        $this->set_query();
    }
    public function get($status_id=''){
        $this->query=($status_id == ''
        ?"SELECT * FROM status"
        :"SELECT * FROM status WHERE status_id = $status_id");
        $this->get_query();
        return $this->rows;
    }
    public function del($status_id=''){
        $this->query="DELETE FROM status WHERE status_id = $status_id";
        $this->set_query();
    }
    function __destruct(){
        $this;
    }

}

?>