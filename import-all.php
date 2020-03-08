<?php
$directorio = opendir("."); //ruta actual

$aux = array();
    // Leo todos los ficheros de la carpeta
$i = 0;
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (is_dir($archivo))//verificamos si es o no un directorio
    {
        echo "[".$archivo . "]<br />"; //de ser un directorio lo envolvemos entre corchetes
    }
    else
    {
        echo $archivo . "\n";
        $aux[$i] = $archivo;
        $i++;
    }
}

foreach ($aux as $key => $value) {
        $archivo = substr($value,0,-4);
        echo $archivo."\n";
        //echo 'mysql -h localhost -u root'.$archivo."< C:/".$value;
        shell_exec('mysql '.$archivo."< ./".$value);
        echo "completado \n".$value;
    }
?>

