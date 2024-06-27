<html>
<head>
<title>Clases PHP</title>
</head>
<body>
<h1>Trabajando con Clases</h1>  

<H3>

<?php
class Clase1
{ 
  public function Texto($texto)
  {
        return $texto;
  }
}

$objClase1 = new Clase1();
echo $objClase1->Texto("Esta es una clase"); 

?>
</H1></body> 
</html>