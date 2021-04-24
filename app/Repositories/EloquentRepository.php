<?php
/**
 * Created by Andresf meza.
 * User: andres230687@misena.edu.co
 * Email: andres230687@hotmail.com
 */
namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

 class EloquentRepository{
     protected $model;

      /**
     * EloquentRepository constructor.
     * @param Model $modelClass
     */

     public function __construct(Model $modelCLass){
        $this->model = $modelCLass;
     }


     public function findById($id){
         $model =  $this->model->find($id);
         return $model;
     }

     public function save(array $params){
        try {
              
              $model = $this->model->fill($params);
              $model->save();

              return $model;
              
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getByField($field, $param){
        $model = $this->model->where($field, $param)->first();
        return $model;
    }
 }