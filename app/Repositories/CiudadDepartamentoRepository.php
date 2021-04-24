<?php
/**
 * Created by Andresf meza.
 * User: andres230687@misena.edu.co
 * Email: andres230687@hotmail.com
 * Date: 01/03/2021
 */
namespace App\Repositories;

 use App\Models\DepartamentoModel;
 use App\Models\Ciudad;
 use Illuminate\Database\Eloquent\Model;

 class CiudadDepartamentoRepository extends EloquentRepository {
   
       public function __construct(DepartamentoModel $modelClass){
              parent::__construct($modelClass);
       }

       public function getDepartamentos(){
          $result =  $this->model->all();
          return $result;
       }

       public function save(array $params){
        $model =  $this->model->fill($params);
        $model->save();
        return $model;
       }


 }

