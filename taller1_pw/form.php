
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
	<meta charset="UTF-8">
	<title>TALLER 1 PW</title>
</head>
<body>
<div class="col-md-8">
<img src="imagenes/Logo_Barra_Cotecnova.png" alt="Html5 Icon" style="width:956px;height:180px;">
 <h3> MENU PRINCIPAL<small> Taller 1 Programacion Web</small>   </h3>
<p>
<h4>
a.Determinar si un número es negativo.<br />
b.Imprimir verdadero o falso de acuerdo al contenido de una variable<br />
c.Determinar si un número es primo<br />
d.Determinar si un número es mayor que 35.<br />
e.Determinar si un número es positivo y menor que 100.<br />
f.  Determinar si un número pertenece al intervalo [-3,27].<br />
g.Determinar si un número no pertenece al intervalo [25,50].<br />
h.Determinar si el módulo de un número es menor que 15.<br />
i.  Determinar si un entero es impar (lo será cuando el resto de su división (operador
          aritmético ‘%’) por 2 sea distinto de cero).<br />
j.  Eleve al cuadrado un número si es par y al cubo si es impar.<br />
k.Calcule el máximo de 2 números dados.<br />
l.  Calcule el máximo de tres números.<br />
m.Ordenar 2 números de menor a mayor<br />
n.  Ordenar 3 numeros de mayor a menor<br />
o.  Determinar la longitud de una cadena y si es mayor a 5 caracteres indicar nombre largo, de lo contrario nombre corto.<br />
p.  Determinar si una variable existe<br />
q.  Determinar si una variable está vacía o tiene contenido<br />
</h4>  
</p> 
<br />
 <fieldset>
    <legend> Coloque los valores</legend>
            <form action="proceso.php" method="post" name ="frm">
                dato 1: <input type="text" name="c1" /><br /><br />
                dato 2: <input type="text" name="c2" /><br /><br />
                dato 3: <input type="text" name="c3" /><br /><br />

                 <label>Selecciona la operacion:<br />
                        <select name = "lista" >
                        <option selected value="0">Ninguno
                        <option value = "a">punto a</option>
                        <option value = "b">punto b</option>
                        <option value = "c">punto c</option>
                        <option value = "d">punto d</option>
                        <option value = "e">punto e</option>
                        <option value = "f">punto f</option>
                        <option value = "g">punto g</option>
                        <option value = "h">punto h</option>
                        <option value = "i">punto i</option>
                        <option value = "j">punto j</option>
                        <option value = "k">punto k</option>
                        <option value = "l">punto l</option>
                        <option value = "m">punto m</option>
                        <option value = "n">punto n</option>
                        <option value = "o">punto o</option>
                        <option value = "p">punto p</option>
                        <option value = "q">punto q</option>
                    </select>
                   
                </label><br>
                 <button type="submit" class="btn btn-default btn-xs">Ver Resultados</button>
                
            </form>         
  </fieldset>
  </div>
</body >

           
</html>
               
            






