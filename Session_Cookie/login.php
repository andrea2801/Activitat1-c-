<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="controllers/main.php" method="POST">
                    <label>USUARI: </label><input type="text" name="user"/><br/>
                    <label>PASSWORD: </label><input type="password" name="passwd"/><br/>
                    Recordeu-me en aquest equip<input type="checkbox" name="recordar"><br>
                    Registrar usuari<input type="checkbox" name="register" value="register"/>
                    <input type="submit" value="Clic" />
    </form>
</body>
</html>