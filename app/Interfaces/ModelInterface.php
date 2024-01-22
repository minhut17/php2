<?php 
namespace app\Interfaces;

interface ModelInterface{
    public function create(array $data);
    public function getOne($id);
    public function getAll();
    public function update($id);
    public function delete($id);

}