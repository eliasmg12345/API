<?php
    
    header('Access-Control-Allow-Origin: *'); 
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

   

    require("conexion.php"); //Importa el archivo de la conexion a la BD
    $conexion=conexion();

    $registros=mysqli_query($conexion, "SELECT * FROM historial WHERE idhistorial=$_GET[idhistorial]");
    
    
    // recorre el resultado y lo guarda en un array
    if($resultado =mysqli_fetch_array($registros)){
        $datos[]=$resultado;
    }
   
    $json=json_encode($datos);//genera el json con los datos obtenidos
    //Envio de informacion del JSON
    header('Content-Type: application/json;charset=utf-8');
    echo $json;
?>