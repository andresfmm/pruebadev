<?php
/**
 * Created by Andresf meza.
 * User: andres230687@misena.edu.co
 * Email: andres230687@hotmail.com
 */
namespace App\Repositories;

 use App\Models\CotizacionModel;
 use Illuminate\Database\Eloquent\Model;

 class CotizacionRepository extends EloquentRepository {
   
       public function __construct(CotizacionModel $modelClass){
              parent::__construct($modelClass);
       }


 }

