<html>
<head> </head>

<body>
<?php

require_once ("Promedio.php");
$ventas= array(20.5,67.2,21.4,26.6,87.34,98.54,100.5,2.5,10.0,11.23,
34.6,78.5,12.3,34.56,98.65,12.5,62.9,90.5,34.2,2.2);

$promedio = new promedio();

$promedio->imprimePromedio($ventas);

?>
</body>
</html>
