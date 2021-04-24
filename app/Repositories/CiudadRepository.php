<?php
/**
 * Created by Andresf meza.
 * User: andres230687@misena.edu.co
 * Email: andres230687@hotmail.com
 */
namespace App\Repositories;


 use App\Models\Ciudad;
 use Illuminate\Database\Eloquent\Model;

 class CiudadRepository extends EloquentRepository {
   
       public function __construct(Ciudad $modelClass){
              parent::__construct($modelClass);
       }


       public function getCiudades($id){
            $result =  $this->model->where('fk_departamento', $id)->get();
            return $result;
         }


 }

