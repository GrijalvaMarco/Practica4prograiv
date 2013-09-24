<html>
<head> </head>

<body>
<?php
class Promedio{

public function _construct(){
echo "nuevo promedio";
}

protected $ventas= array();
private $promedio=0;


public function imprimePromedio(array $ventas){
 $suma=0;
echo "Los datos son:" ;
echo "<br>";
foreach($ventas as $llave=>$venta){
echo $llave."->"." ";
echo $venta;
echo "<br>";
$suma+=$venta;
}
echo "Suma: ". $suma;
$promedio=$suma/20;
echo "<br>";
echo "Promedio: ".$promedio;
} 

}
?>

</body>

</html>