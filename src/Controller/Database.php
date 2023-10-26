<?php 
namespace tekllin\Controller;
class Database {
    private $table = "contact";
    private $method;
    private $data;
    private $format;
    private function __construct(){
        
    }

    public function table($tablename){
        //Verfif si la table existe
        $this->table = $tablename;
        return $this;

    }

    public function getData(){
        return $this->data;
    }
    public function getMethod(){
        return $this->method;
    }
    public function setMethod($method){
         $this->method = $method;
         return $this;
    }
    public function getTable(){
        return $this->method;
    }
    public function get($data = []){
        $this->makeQuery($data);
        $this->setMethod("get");
        return $this;
    }
    public function post($data = []){
        $this->makeQuery($data);
        $this->setMethod("post");
        return $this;
    }
    public function update($data = []){
        $this->makeQuery($data);
        $this->setMethod("update");
        return $this;
    }
    public function delete($data = [],$force = false){
        if($force){
            $this->setMethod("delete");
        } else {
            $this->setMethod("softdelete");
        }
        $this->makeQuery($data);
        return $this;
    }

    private function makeQuery($data){
        $this->data = $data;
        $this->setFormat();
    }

    public function setFormat(){
        $format = "";
        switch($this->getMethod()){
            case 'post':
                $format  = "INSERT INTO %s %s VALUES %s ;";
                break;
            case 'soft-delete':
            case 'update':
                $format  = "UPDATE %s SET %s WHERE %s ;";
                break;
            case 'delete':
                $format = "DELETE FROM %s WHERE %s ;";
                break;
            case 'get':
            default:
                $format = "SELECT %s FROM %s WHERE %s ;";
                break;
        }
        $this->format = $format;

       
    }
     public function getFormat(){
            return $this->format;
        }
  
}
