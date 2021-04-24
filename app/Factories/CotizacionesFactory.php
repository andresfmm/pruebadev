<?php
/**
 * Created by Andresf meza.
 * User: andres230687@misena.edu.co
 * Email: andres230687@hotmail.com
 */
namespace App\Factories;

use Mail;
use Carbon\Carbon;
use App\Mail\CotizacionMail;
use App\Repositories\CotizacionRepository;

 class CotizacionesFactory{
      
        public function guardarCotizacion($request){
            try {
                 
                $email = strtolower($request->email);
                $existe_cotizacion = app(CotizacionRepository::class)->getByField('email', $email);

                if ($existe_cotizacion) {
                    
                     $date = $existe_cotizacion->created_at;
                     $now = Carbon::now();

                     if ( $now->isSameDay($date) ) {
                        $obj = new \stdClass;
                        $obj->ok = false;
                        return json_encode($obj);
                     }else{
                        $datos = $this->guardarDatos($request);
                        
                        return $datos;
                     }

                } else {
                    
                    $datos = $this->guardarDatos($request);
                    return $datos;
                }
                
                
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        protected function guardarDatos($request){
            try {
                
                $email = strtolower($request->email);
                $dataSave = [
                    'modelo'       => $request->modelo,
                    'nombre'       => $request->nombre,
                    'email'        => $email,
                    'celular'      => $request->celular,
                    'departamento' => $request->departamento,
                    'ciudad'       =>  $request->ciudad
                ];
                $result = app(CotizacionRepository::class)->save($dataSave);
                $obj = new \stdClass;
                $obj->ok = true;
                $this->sendEmailCotizacion($dataSave);
                return json_encode($obj);
            } catch (\Throwable $th) {
                throw $th;
            }
        }

        protected function sendEmailCotizacion($request){

            try {
                
                // Mail::to('andres230687@hotmail.com')
                // ->cc('andres230687@misena.edu.co')->send(new CotizacionMail($request));

                Mail::to('nleon@processoft.com.co')
                ->cc('ocalero@processoft.com.co')->send(new CotizacionMail($request));
            } catch (\Throwable $th) {
                throw $th;
            }
            
            
        }

        
 }






