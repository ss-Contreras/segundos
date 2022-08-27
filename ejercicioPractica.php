<?php
echo "1 = Pasar segundos a horas\n";
echo "2 = Pasar segundos a minutos\n";
echo "3 = Pasar segundos a segundos\n";
$opcion = readline("Digite una opcion:");
$valSeg = readline("Digite cuantos segundos desea convertir:");

if ($opcion == 1){
    $hora = $valSeg * 3600;
    echo "$valSeg segundos en $hora son Horas.";
}else if ($opcion == 2){
    $minutos = $valSeg * 60;
    echo "$valSeg segundos en $minutos son minutos.";
}else if ($opcion == 3){
    echo "Usted digito $valSeg segundos.";
}else {
    echo "Digite una opcion valida";
}

?>