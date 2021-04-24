<?php
/**
 * Created by Andresf meza.
 * User: andres230687@misena.edu.co
 * Email: andres230687@hotmail.com
 */
namespace App\Factories;
use App\Repositories\CiudadDepartamentoRepository;
use App\Repositories\CiudadRepository;

 class DepartamentosCiudadFactory{
      
        public function getDepartamento(){
            try {
                
                 $result = app(CiudadDepartamentoRepository::class)->getDepartamentos();
                 return $result;
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        public function getCiudades($request){
            try {
                
                 $id = $request->id_dep;
                 $result = app(CiudadRepository::class)->getCiudades($id);
                 return $result;
            } catch (\Throwable $th) {
                throw $th;
            }
        }
 }