<?php

require "../utils/autoload.php";

class PublicacionControlador{


    public static function Nueva($contexto){

        $p = new PublicacionModelo();
        $p -> idAutor = $contexto['session'][''];
        $p -> fechaHora = date('Y-m-d H:i:s');
        $p -> cuerpo; 

    }



    
    
    
    public static function ListarTodos(){

        $p = new PublicacionModelo();
        return $publicaciones = $p -> ObtenerPublicaciones();

    }



 


}
