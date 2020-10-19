<?php
    function schemaGenerator(PDO $db){
        $command='
        CREATE TABLE IF NOT EXISTS users(
            id INTEGER  PRIMARY KEY AUTOINCREMENT,
            name VARCHAR(100) NOT NULL,
            password VARCHAR(100) NOT NULL
            
        )';
        try{
            $db->exec($command);
        }catch(PDOException $e){
            die($e->getMessage());
        }
    }

    function InsertSchema($db, $username, $userpasswd){
        
        $insertComand=" INSERT INTO users(name,password) 
        VALUES ('.$username.','.$userpasswd.')";
        try{
            $db->exec($insertComand);
            echo "Registro creado...";
        }catch(PDOException $e){
            die($e->getMessage());
        }
            
            }
            
            function deleteSchema(PDO $db, $username){
                $deleteComand=" DELETE FROM users 
                WHERE name =  '.$username.'";
        
                try{
                    $db->exec($deleteComand);
                    echo "Se ha eliminado correctamente";
                }catch(PDOException $e){
                    die($e->getMessage());
                }
            }
        
        
    
        

   