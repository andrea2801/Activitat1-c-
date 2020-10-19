
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
ini_set('display_errors','On');
require '../src/connectbd.php';
require '../src/schema.php';
$username= filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS);
$userpasswd= filter_input(INPUT_POST, "passwd", FILTER_SANITIZE_SPECIAL_CHARS);
$userrecordar= filter_input(INPUT_POST, "recordar", FILTER_SANITIZE_SPECIAL_CHARS);
$register = filter_input(INPUT_POST, 'register', FILTER_SANITIZE_SPECIAL_CHARS);
$base=connectSqlite('M7');
if($base){
    //schemaGenerator($base);
if ($register) {
    InsertSchema($base, $username, $userpasswd);
} 
if($userrecordar) {
    $hora=date('d-m-y,H:i');
     setcookie("Hora", $hora,time()+60*60*24*365,"/");
    setcookie("username",$username,time()+60*60*24*365,"/");
    setcookie("userpasswd",$userpasswd,time()+60*60*24*365,"/");
    if($username!=null && $userpasswd!=null){
        session_start();
        $_SESSION['usersession']=$username;
        header('location: ../index.php');

    
    
}

}else if($userrecordar==null){
    header('location: ../index.php');
}
}



?>
</body>
</html>