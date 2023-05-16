<?php
include "../modelo/modelo_P.php";
$nombre=$_POST["nombre"];
$alcance=$_POST["alcance"];
$fecha_ini=$_POST["fecha_ini"];
$fecha_fin=$_POST["fecha_fin"];
$estado=$_POST["estado"];
 
$objeto=new proyect();
$objeto->registrar_P($nombre,$alcance,$fecha_ini,$fecha_fin,$estado);
?>