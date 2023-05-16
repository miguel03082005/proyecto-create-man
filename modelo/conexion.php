<?php
class conexion {
    public static function cadena_conexion() {
        $conectar=new PDO('mysql:host=localhost;dbname=gestion_proyectos;charset=utf8', 'root', '');
        $conectar -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conectar;
    }
}
?>