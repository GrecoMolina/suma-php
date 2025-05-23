<?php 

$calificacion1=100;
$calificacion2=90;
$calificacion3=70;

$promedio=$calificacion1+$calificacion2+$calificacion3/3;

if($promedio <=69)
{
    echo "reprobado";
}
else if ($promedio >=70 && $promedio <=95)
{
    echo "aprobado";
}
else if ($promedio >=96)
{
    echo "excento";
}
?>