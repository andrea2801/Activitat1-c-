
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Bienvenido/a <?php echo $_COOKIE['username']?></h1><br>
<form action="<?php  htmlentities ($_SERVER['PHP_SELF']);?>" method='post'>
 Informacio del usuari<input type="checkbox" name="info" value="info"><br>
 Tancar sessio<input type="checkbox" name="borra" value="borra"><br>
 <input type="submit" value="Clic" />
    </form>
</form>
<?php
session_start();
$info= filter_input(INPUT_POST, "info", FILTER_SANITIZE_SPECIAL_CHARS);
$esborrar= filter_input(INPUT_POST, "borra", FILTER_SANITIZE_SPECIAL_CHARS);
if ($info){
    echo "Informacio del usuari<br>";
    echo "Nom del usuari: ".$_SESSION['usersession'];
    echo "<br>Hora de inico de sesion: ". $_COOKIE['Hora']."<br><br>";  
   

    
    
}else if($esborrar){
    setcookie("username",$username,time()-100,"/");
    setcookie("userpasswd",$userpasswd,time()-100,"/");
    header('location: login.php');
}
?>
<form action="index.php"  id="buscador" method="post">
   <input type="text" name="url" id="buscar">
   <input type="submit">
   </form>
<?php
$urluser= filter_input(INPUT_POST, "url", FILTER_SANITIZE_SPECIAL_CHARS);
echo "<iframe src='https://".$urluser."' width='500' height='500'></iframe>";
?>

</body>
</html>





