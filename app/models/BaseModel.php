<?php 
namespace app\models;

use app\Interfaces\ModelInterface ;
abstract class BaseModel implements ModelInterface{
    protected $table;
    public function __construct($table){
        $this->table = $table;
        echo $table;

    }
   public function create(array $data){

   }
   public function getOne($id){

   } 
   public function getAll(){
    echo "this is getAll";
   }
   public function update($id){

   }
   public function delete($id){}
  
}