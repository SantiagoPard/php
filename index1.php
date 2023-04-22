<?php
    //comentario ph
    //echo es para imprimir
    $nombre = "santiago";
    $apellido = "pardo";
    $edad = 30;
    $mayorEdad = true;
    echo "Hola $nombre"; //comillas dobles imprime el valor
    echo "<br>";
    echo 'hola $nombre'.$nombre; //se concatena con punto y comillas sencillas todo lo toma como texto
    
    $numerosPares = array(0,2,4,6,8);//declaracion array
    $numerosImpares = [1,3,5,7,9];//declaracion array

    echo $numerosPares [1].'<br>';//busqueda posicion especifica del array
    echo $numerosImpares [1].'<br>';
    $contador = 1;
    // for($iterador = 0;$iterador<=4;$iterador++){
    //     echo "posicion".$contador++.": ";
    //     echo $numerosImpares[$iterador];
    //     echo '<br>';
    // }

    $persona = [
        "nombre" => "juan",
        "apellido" => "fonseca",
        "edad" => 25
    ];

    // echo $persona["nombre"].'<br>';
    // $vari = 0;
    // while($vari<=4){
       
    //     echo $numerosImpares[$vari];
    //     $vari++;
    // }
    $iterador = 0;
    do{
        echo $numerosImpares[$iterador].'<br>';
        $iterador++;
    }while($iterador<count($numerosImpares));
    echo '<br>';
    echo "-----------------------------------------";
    $index = 0;
    foreach($numerosPares as $numero){
        echo '<br>';
        echo $index.":".$numero;
        $index++;
        
    }
    echo '<br>';
    echo "-----------------------------------------";
    echo '<br>';
    foreach($numerosImpares as $posicion => $numero){
        echo $posicion.":".$numero.'<br>';
    }
    echo "-----------------------------------------";
    if($persona['edad'] >= 18){

    }else if($persona['edad']>=5&&$persona['edad']<=17){

    }else{}
    
    // switch($opcion){
    //     case 'a': break;
    // }

    function validarEdad($edad){
        if($edad >= 18){
            echo'si es mayor de edad';
        }else {
            echo 'no';
        }
    }
    validarEdad(25);
?>