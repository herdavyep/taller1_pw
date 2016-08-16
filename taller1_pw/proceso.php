<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css2/main.css">
    <meta charset="UTF-8">
    <title>RESULTADOS</title>
</head>
<body>
<img src="imagenes/Logo_Barra_Cotecnova.png" alt="Html5 Icon" style="width:956px;height:180px;">

<h3>
<?php

$operacion = $_POST['lista'];
 /*
if (isset($_POST['c1']) && !empty($_POST['c1']) &&
 isset($_POST['c2']) && !empty($_POST['c2']) && 
 isset($_POST['c3']) && !empty($_POST['c3']))
 {*/
   echo "El resultado es: <br />";
  switch ($operacion) 
  {
    case 'a':
         if ($_POST['c1']<0) {
             echo "El numero es negativo";
         }else{
             echo "El numero es positivo";
         }
         break;
    case 'b':
         if ($_POST['c1']<8) {
             echo "Verdadero";
         }else{
            echo "Falso";
         }
         break; 
    case 'c':
           $d=0;
           for($i=1; $i<=$_POST['c1']; $i++){
               if($_POST['c1'] % $i == 0){
                   $d++;
                }
            }
            if($d !=2 ){
              echo "no es primo";
            }else{
              echo" es primo";
            }

         break;
    case 'd':
         if ($_POST['c1']<35) {
             echo $_POST['c1']." es menor que 35";   
         }else{
            echo $_POST['c1']." es mayor que 35";   
         }
         break;
    case 'e':
         if (($_POST['c1']>0)&&($_POST['c1']<100)) {
             echo $_POST['c1']."  es positivo y menor que 100";
         }elseif (($_POST['c1']>0)&&($_POST['c1']>100)) {
             echo $_POST['c1']." es positivo y mayor que 100";
         }else{
            echo $_POST['c1']."   es negativo y menor que 100";
         }
         break;
    case 'f':
         if (($_POST['c1'] >= -3) && ($_POST['c1'] <= 27)) {
             echo $_POST['c1']."   pertenece al intervalo [-3,27]";
         }else{
            echo $_POST['c1']."   no pertenece al intervalo [-3,27]";
         }
         break; 
    case 'g':
            if (($_POST['c1'] >= 25) && ($_POST['c1'] <= 50)) {
             echo $_POST['c1']."   pertenece al intervalo [25,50]";
         }else{
            echo $_POST['c1']."   no pertenece al intervalo [25,50]";
         } 
         break; 
    case 'h':       
         if ($_POST['c1'] % $_POST['c2'] < 15 ) {
            $todo=$_POST['c1']%$_POST['c2'];
             echo "el residuo es   ".$todo."   y es menor que 15";
         }else{
             $todo=$_POST['c1']%$_POST['c2'];
             echo "el residuo es    ".$todo."   y es mayor que 15";
         }
         break; 
    case 'i':
         if ($_POST['c1'] % 2 !=0) {
                echo $_POST['c1']."    es impar";
            }else{
                echo $_POST['c1']."    es par";
            }   
         break;
    case 'j':
             if ($_POST['c1'] % 2 !=0) {
                echo "el cubo de   ".$_POST['c1']."   es   ".$_POST['c1']**3;
             }else{
                echo "el cuadrado de  ".$_POST['c1']."   es   ".$_POST['c1']**2;
             }
             break;
    case 'k':
             echo max($_POST['c1'],$_POST['c2']);
             break;
    case 'l':
             echo max($_POST['c1'],$_POST['c2'],$_POST['c3']);
             break;
    case 'm':
            $numeros = array("a" => $_POST['c1'], "b" =>$_POST['c2']);
            asort($numeros);
            foreach ($numeros as $clave => $val) {
            echo  $val."<br />";
            }
            break; 
    case 'n':
             $numeros = array("a" => $_POST['c1'], "b" =>$_POST['c2'],"c" =>$_POST['c3']);
            arsort($numeros);
            foreach ($numeros as $clave => $val) {
            echo  $val."<br />";
            }
             break; 
    case 'o':
             echo "la cadena tiene   ";
             echo strlen($_POST['c1']);
             echo "   caracteres";
             break;
    case 'p':
             if (isset($_POST['c4'])){
                echo "la variable existe";
             }else{
                echo "la variable no existe";
             }
             break;
    case 'q':
             if(!empty($_POST['c1'])){
                echo "la variable no esta vacia";
             }else{
                echo "la variable esta vacia";
             }
             break;                

    default: echo "No se a podido realizar la operacion";    
    
   }
   ?> 
   </h3> 
</body>
</html>








