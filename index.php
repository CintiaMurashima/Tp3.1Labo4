<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    
    //// GUIA 3.1 RESUELTA 
    
    $names = 'juan,maria,pepe,andrea,jorgelina,cecilia';
    $arrayName= array(); ///me crea array vacio
    $newArray= array();
    $arrayName= explode(',',$names);

    foreach($arrayName as $name){
        echo "Nombre:" . $name .'<br>';
    }    
    
    sort($arrayName);
    echo "<h3>Arreglo ordenado</h3>";
    foreach($arrayName as $name){
        echo "Nombre:" . $name .'<br>';
    } 

    echo "<h3>Arreglo con mayuscula</h3>";
    foreach($arrayName as $name){
        $nameM=ucfirst($name);
        array_push($newArray,ucfirst($nameM));
        echo $nameM .'<br>';
    } 

    $keys=array();
    $keys= array_keys($newArray);

    $arrayAssociative=array();

    $arrayAssociative=array_combine($keys,$newArray);

    echo "<h3>Arreglo con keys</h3>";
    foreach($arrayAssociative as $key => $value){
        echo $key . ': ' . $value . '<br>' ;
    } 
///Eje 2
    function existencia($name, $arrayName){
     return in_array($name,$arrayName);
    }
    echo "<h3>Resultado de busquesa</h3>";
    if(existencia("pepe",$arrayName)){
        echo "El resultado es:encontrado";
    }else{
        echo "El resultado es:No encontrado";
    }
     ///Eje 3
    function existenciaKey($key, $arrayName){
        return array_key_exists($key,$arrayName);
       }

       echo "<h3>Resultado de busqueda de key</h3>";
       if(existenciaKey(10,$arrayName)){
           echo "El resultado es:encontrado";
       }else{
           echo "El resultado es:No encontrado";
       }

///Eje 4

       function pasarAstring($array){
        return implode(',',array_keys($array)); /// uso la funcion que me retorna la key 
       }

       $nombres= pasarAstring($arrayAssociative);

       echo $nombres; 
    ?>
</body>
</html>