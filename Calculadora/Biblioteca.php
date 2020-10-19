<?php
declare (strict_types=1);


// Tres primeras partes con POST

//Funcion para encontracalcular el numero factorial
function factorial(int $numero, int &$result): bool{
    $result = 1;
    if ($numero<=20) {
        for ($contador = 1; $contador <= $numero; $contador++) {
            $result = $result * $contador;
        }
        return true;
    } else {
        return false;
    }
}


      

//funcion para sumar dos numeros
function sum(int $a, int $b): int {
    $numbers=[$a,$b];
    $suma=array_sum($numbers);
    return $suma;
}

//Calcular si es un numero primer o no
function isprimer(int $number):bool {
    $div = 2;
    while ($div <= $number / 2) {
        if ($number % $div == 0) {
            
            return false;
        }
        $div++;
    }
    return true;
}





// Ultima parte, pero con GET


function performOperation(){
    $operaciones=$_GET['operaciones'];
if($operaciones=="Factorial"){              
    factorial2();
} else if($operaciones=="Suma"){
    sum2();
} else if($operaciones=="Primer"){
    if(isprimer2()==true){
       echo "El numero es primer"; 
    }else{
       echo "El numero no es primer";
    } 
} 

       /*switch ($operaciones) {
             case "Factorial": 
                if(isset($numcomp)){
                    $result=0;
                    $resfact=factorial2($numcomp, $result);
                    echo "El calculo factorial de ".$numcomp." es ".$result ;
                   }
               
               
                  break;
              case "Suma": 
                if(isset($numcomp, $solosum)){
                    $resSum=sum($numcomp,$solosum);
                    echo "Si sumamos ".$numcomp." + ".$solosum." el resultado es ".$resSum; 
                   }
                  break;
              case "Primer": 
                $resulprimer=isprimer($numcomp);
                if($resulprimer==true){
                   echo "El numero ".$numcomp." es primer"; 
                }else{
                   echo "El numero ".$numcomp." no es primer";
                } 
                  break;
             
             default: echo "Error codigo no valido";
       }*/
          
          
         
       }
//Los mismos pero con pequeñas modificaciones, porque el int no me lo pillaba en la funcion final en el formulario
//Funcion para encontracalcular el numero factorial 2
function factorial2(){
    $numcomp= $_GET['numcomp'];
    $result = 1;
    for ($contador = 1; $contador <= $numcomp; $contador++) {
            $result = $result * $contador;
            
        }
        echo "El calculo factorial es ".$result ;}
//funcion para sumar dos numeros 2
function sum2() {
    $numcomp= $_GET['numcomp'];
    $solosum = $_GET['solosum'];
    $numbers=[$numcomp,$solosum];
    $suma=array_sum($numbers);
    echo "La suma de ".$numcomp." + ".$solosum." es ". $suma;
}

//Calcular si es un numero primer o no 2
function isprimer2():bool {
    $numcomp= $_GET['numcomp'];
    $div = 2;
    while ($div <= $numcomp / 2) {
        if ($numcomp % $div == 0) {
            
            return false;
        }
        $div++;
    }
    return true;
}




?>