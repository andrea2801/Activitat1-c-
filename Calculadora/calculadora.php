

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
 <a href="operacion.php">Ultimo Apartado de la calculadora</a>
 <br>
 <div id="caja_principal">
<div class="caja">
 <h3><b>FACTORIAL</b></h3>
     <form action="<?php  htmlentities ($_SERVER['PHP_SELF']);?>" method="POST">
            <label>Numero:</label><br>
            <input type="number" name="factorial">
            <br>
            <input type="submit" value="Calcular"/><br>
             </form>
<?php 
               
               if ( $numero = filter_input(INPUT_POST, "factorial", FILTER_SANITIZE_SPECIAL_CHARS)) {
                 $result=0;
                   
                   $resfact=factorial($numero, $result);
                   if ($resfact==true){
                       echo "<p>El calculo factorial de ".$numero." es ".$result."</p>" ;
                   }  else {
                       
                       echo '<p>No se ha podido calcular</p>';
                   }
                   
               }
               ?> 
               </div>
               
               <div class="caja">
               <h3><b>SUMA</b></h3>
     <form action="<?php  htmlentities ($_SERVER['PHP_SELF']);?>" method="POST">
            <label>Numero 1:</label><br>
            <input type="number" name="sum1"><br>
            <label>Numero 2:</label><br>
            <input type="number" name="sum2">
            <br>
            <input type="submit" value="Calcular"/><br>
             </form>
             <?php 
             $a = filter_input(INPUT_POST, "sum1", FILTER_SANITIZE_SPECIAL_CHARS);
             $b=filter_input(INPUT_POST, "sum2", FILTER_SANITIZE_SPECIAL_CHARS);
               if(isset($a, $b)){
                $resSum=sum($a,$b);
                echo "Si sumamos ".$a." + ".$b." el resultado es ".$resSum; 
               }
                
                
               ?> 
               </div>
                <div class="caja">
               <h3><b>ES O NO ES NUMERO PRIMER</b></h3>
     <form action="<?php  htmlentities ($_SERVER['PHP_SELF']);?>" method="POST">
            <label>Numero:</label><br>
            <input type="number" name="primer">
            <br>
            <input type="submit" value="Calcular"/><br>
             </form>
             <?php 

                $number = filter_input(INPUT_POST, "primer", FILTER_SANITIZE_SPECIAL_CHARS);
                $resulprimer=isprimer($number);
                if($resulprimer==true){
                   echo "El numero ".$number." es primer"; 
                }else{
                   echo "El numero ".$number." no es primer";
                } 
               ?> 
               </div>
          
   
             
               </div>
    
    </div>
          
</body>

</html>