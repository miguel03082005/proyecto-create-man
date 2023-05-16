<?php
require_once('conexion.php');
class proyect {
    private $conectar;
    public $id;
    public $nombre;
    public $fecha_ini;
    public $alcance;
    public $fecha_fin;
    public $estado;
    //metodo constructor//
    public function __construct()
    {
        try {
            $this->conectar=conexion::cadena_conexion();
        } catch (exception $e) {
            echo"! Error revise su servidor ¡";
            die($e->getMessage());
        }
    }

    //metodo registrar
    public function registrar_P($nombre,$alcance,$fecha_ini,$fecha_fin,$estado){
        $stm=$this->conectar->prepare("insert into proyecto(nom_proyecto,alcance_proyecto,fecha_inicio,fecha_fin,estado) values ( :nom_proyecto, :alcance_proyecto, :fecha_inicio, :fecha_fin, :estado)");
        $stm->bindParam(':nom_proyecto',$nombre);
        $stm->bindParam(':fecha_inicio',$alcance);
        $stm->bindParam(':alcance_proyecto',$fecha_ini);
        $stm->bindParam(':fecha_fin',$fecha_fin);
        $stm->bindParam(':estado',$estado);
        if ($stm->execute()){
            echo '<script type="text/javascript">alert("usuario registrado con exito"); window.location.href=("../vista/vistainsertar.php");</script>';
        }
        else{
            echo '<script type="text/javascript">alert("no se pudo realizar el registro"); window.location.href=("../vista/vistainsertar.php");</script>';
        }
    }
}
?>