
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
    echo "Nom del usuari: ". $_COOKIE['username'];
    echo "<br>Hora de inico de sesion: ". $_COOKIE['Hora']."<br><br>";   
    echo "
    <iframe id='iframe'
    title= ''
    width='300'
    height='200'
    src='usuari.php'>
</iframe> ";
    
}else if($esborrar){
    setcookie("username",$username,time()-100,"/");
    setcookie("userpasswd",$userpasswd,time()-100,"/");
    header('location: login.php');
}
?>
</body>
</html>


