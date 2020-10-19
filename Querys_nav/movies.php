<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php 

    $movie_info=[
        ["Titulo"=>"Como entrenar a tu dragon", "Protagonista"=>"Hipo", "Protagonista2"=>"Desdentao","Año"=>"2010"],
    ["Titulo"=>"Tadeo Jones", "Protagonista"=>"Tadeo", "Protagonista2"=>"Sara","Año"=>"2012"],
    ["Titulo"=>"Rey Leon", "Protagonista"=>"Simba", "Protagonista2"=>"Timon y Pumba","Año"=>"1994 "],
    ["Titulo"=>"Gnome y Julieta", "Protagonista"=>"Gnomeo", "Protagonista2"=>"Julieta","Año"=>"2011"]
];
    if(isset($_GET["Titulo"])){
        $info=$_GET["Titulo"];
        foreach($movie_info as $movie){
            if(array_search($info,$movie)){
                $titulo=$movie["Titulo"];
                $Prota1=$movie["Protagonista"];
                $Prota2=$movie["Protagonista2"];
                $año=$movie["Año"];
            }
        }
    }
      
    
?> 
<form action=" <?php  htmlentities ($_SERVER['PHP_SELF']);?>" method="GET">
<label for="Titulo">Buscador de peliculas</label>
<input type="text" name="Titulo">
<input type="submit" value="Buscar">
</form>
<h1>Informacio sobre la pelicula <?php  echo $titulo; ?></h1>
<p>Basat en la teva entrada, aqui tens la informacio:</p>
<p> <?php  echo  $titulo. " la protagonizta " .$Prota1. " Y de segon el protagonitza " .$Prota2.", la pelicula es va produir el any " .$año ; ?>
</p>
</body>
</html>