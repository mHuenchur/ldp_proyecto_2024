<?php

namespace app\core\middleware;

use app\core\middleware\base\Middleware;
use app\core\middleware\base\MiddlewareInterface;
use app\libs\request\Request;
use app\libs\response\Response;

final class AuthorizationMiddleware extends Middleware implements MiddlewareInterface{

    public function handler(Request $request, Response $response):void{
        //print_r($request->getController());
        if(isset($_SESSION["token"]) && $_SESSION["token"] === APP_TOKEN){
            //print_r($request->getController());
            $contAdmitidosOperador = ["inicio", "cliente", "autenticacion"];

            if($_SESSION["perfil"] !== "Administrador" && !in_array($request->getController(), $contAdmitidosOperador)){
                //print_r($request->getController());
                throw new \Exception("ACCESO DENEGADO PARA OPERADOR");
            }
        }
        
        $this->next($request, $response);
    }
}