
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
echo "<b><center><h1>".$_SESSION['usersession']."</h1></center></b>";
?>
</body>
</html>


