<?php

require "../utils/autoload.php";


class PublicacionModelo extends Modelo{

    public $idPublicacion;
    public $idAutor;
    public $fechaHora;
    public $cuerpo;

    public function __construct($id=""){

        parent::__construct();
        
        if($id != ""){
            $this -> idPublicacion = $id;
            $this -> Obtener();
        }

    }
    

    public function ObtenerPublicaciones(){


        $sql = "SELECT nombreAutor, apellidoAutor, idPublicacion, fechaHora, cuerpo";
        $sql .= " FROM usuario as u, publicacion as p";
        $sql .= " WHERE u.id = p.idAutor ORDER BY fechaHora";
    
        return $publicaciones = $this -> conexionBaseDeDatos -> query($sql)-> fetch_all(MYSQLI_ASSOC);
    
    }


    public function Guardar(){

        if($this -> idPublicacion == NULL) return $this -> insertar();
        else $this -> actualizar();


    }


    private function insertar(){

        $sql = "INSERT INTO publicacion (idAutor,fechaHora,cuerpo) VALUES (
            '" . $this -> idAutor . "',
            '" . $this -> fechaHora . "',
            '" . $this -> cuerpo . "')";

         if($this -> conexionBaseDeDatos -> query($sql)){
            return true;
         }else return false;

    }


    private function actualizar(){

        $sql = "UPDATE persona SET
        nombre = '" . $this -> Nombre . "',
        apellido = '" . $this -> Apellido . "',
        telefono = '" . $this -> Telefono . "',
        email = '" . $this -> Email . "'
        WHERE (id = " . $this -> Id .")";

        $this -> conexion -> query($sql);

    }


    public function Obtener(){

        $sql = "SELECT * FROM persona WHERE id = " . $this ->Id;
        $fila = $this -> conexion -> query($sql) -> fetch_all(MYSQLI_ASSOC)[0];

        $this -> Id = $fila['id'];
        $this -> nombre = $fila['nombre'];
        $this -> apellido = $fila['apellido'];
        $this -> telefono = $fila['telefono'];
        $this -> email = $fila['email'];
    }



}


