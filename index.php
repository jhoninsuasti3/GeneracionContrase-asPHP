<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php echo '<p>Hello World</p>'; 

    $tamano = 10;
    $key = "";
    $cadena = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890%$#@!";
    $caracteres = "%$#@!";
    $mayusculas = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $minusculas = "abcdefghijklmnopqrstuvwxyz";
    $numeros = "1234567890";

    $full_cadena = array (
      array($mayusculas),
      array($minusculas),
      array($numeros),
      array($caracteres)
    );

    $max = strlen($cadena)-1; // obtener longitud de la cadena
    //echo $max;

    // Genero los caracteres en (a-z)
    for($i = 0; $i < $tamano; $i++){
        for ($row = 0; $row < 4; $row++) {
          for ($col = 0; $col < 1; $col++) {
            $key .= substr($full_cadena[$row][$col], mt_rand(0,$max), 1);
        	} 
        }
    }
    echo $key;
    ?> 
<?php 

$LongitudContrasena = $_POST['tamano']; //opcional
//$LongitudContrasena = 9;
$LongitudContrasenaDefecto = 10;

function generadorContrasenas($tamano)
{   
    //$tamano = 11;
    $key = "";
    $cadena = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890%$#@";
    $max = strlen($cadena)-1;
    for($i = 0; $i < $tamano; $i++){
        $key .= substr($cadena, mt_rand(0,$max), 1);
    }
    $add_patron = aletoriaridadPatron();
    $add_patron .= $key;
    return $add_patron;
};

function aletoriaridadPatron(){
    $key_end = "";
    $caracteres = "%$#@!";
    $mayusculas = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $minusculas = "abcdefghijklmnopqrstuvwxyz";
    $numeros = "1234567890";
    $full_cadena = array (
   		array($mayusculas),
        array($minusculas),
        array($numeros),
        array($caracteres)
    );
    $max = 0;
        for ($row = 0; $row < 4; $row++) {
          	for ($col = 0; $col < 1; $col++) {
            	$key_end .= substr($full_cadena[$row][$col], mt_rand(0,$max = strlen($full_cadena[$row][$col])-1), 1);
        	} 
        }
    echo  $key_end;   
    return $key_end;
}


function generadorContrasenasPatron($tamano,$patron)
{   
    //$tamano = 11;
    $key = "";
    //$patron = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890%$#@";
    $max = strlen($patron)-1;
    for($i = 0; $i < $tamano; $i++){
        $key .= substr($patron, mt_rand(0,$max), 1);
    }
    return $key;
};

  if(empty($LongitudContrasena)){
  	echo generadorContrasenas($LongitudContrasenaDefecto);
  }elseif($LongitudContrasena < 0 ){	
  	echo "Error -  El valor del tamaño debe ser igual o mayor que $LongitudContrasenaDefecto";
  }
  elseif($LongitudContrasena < $LongitudContrasenaDefecto  ){	
  	echo "Error - El valor del tamaño debe ser igual o mayor que $LongitudContrasenaDefecto";
  }else{
  	echo generadorContrasenas($LongitudContrasena);
  }

//echo generadorContrasenas($LongitudContrasena);
//echo generadorContrasenasPatron($LongitudContrasena);

 ?>


   
  </body>
</html>