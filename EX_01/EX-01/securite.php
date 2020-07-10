<?php
    $login=$_POST ['login'];
    $password=$_POST['password'];

    if ($password == "2020"){
        session_start();
        $_SESSION['id']= $login;
        setcookie('id', $_SESSION['id'], time() + 365*24*3600, null, null, false, true);
        header('Location: http://localhost:8888/ISCC-2020/ISCC-2020-J09/EX-01/mini-site-routing.php?page=1'); {
            function connected_data() {    
                $servername = "localhost"; 
                $username = 'root';    
                 $password = 'root'; 
                 $databasename = "base-site-rooting"; 
             try {      
                   $pdo = new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);  
                   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
                  
                   echo "Connected successfully<br/>";   
          
             }  
                    catch (PDOException $e) {        
                        echo "Connection failed : ". $e->getMessage();  
                          } 
                       }
            connected_data();
            
        }
    }

  
    ?>
