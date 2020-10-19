

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{
     margin:2px;
     padding:0;}
     #caja_principal{
         display:flex;
         direction-flex: row;
         flex-wrap:wrap;
     }
     .caja{
         border: 1px solid black;
     }
   </style>
</head>
<body>

<?php include "Biblioteca.php";?>  
<hr>
 <h1><b>Calculadora</b></h1>
 <hr>
 <br>
 <hr>
 <a href="calculadora.php">Primera parte calculadora</a><br>
 <div id="caja_principal">
 <div class="caja">
    <h3><b>Elegir opcion</b></h3>
     <form action="<?php  htmlentities ($_SERVER['PHP_SELF']);?>" method="GET">
            <label>Numero que sirve para factorial, suma o primer:</label><br>
            <input type="number" name="numcomp"><br>
            <label>Numero que solo se rellena si haces la suma:</label><br>
            <input type="number" name="solosum"><br>
            <label>Elije una operacion</label><br>
            <input type="radio" name="operaciones" value="Factorial">Factorial<br>
            <input type="radio" name="operaciones" value="Suma">Suma<br>
            <input type="radio" name="operaciones" value="Primer">Primer<br>
            <input type="submit" value="Calcular"/><br>
             </form>
             <?php 
                
          performOperation();
               ?> 
               </div>
    
    </div>
          
</body>

</html>