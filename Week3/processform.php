<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
       
       $fullname = "";
       $email = "";
       $comments = "";        
        
       if (count($_POST)) {
           
           if (array_key_exists($fullname, $_POST)){
               $fullname = $_POST["fullname"];
           }
           if (array_key_exists($email, $_POST)){
               $email = $_POST["email"];
           }
           if (array_key_exists($comments, $_POST)){
               $comments = $_POST["comments"];
           }           
       }
       
       if (!empty($fullname) && !empty($email) && !empty($comments)){
          
          $dbh = new PDO("mysql:host=localhost;port=3306;dbname=phplab","root",""); 
       
       try {
          $stat = $dbh->prepare('insert into week3 set fullname = :fullnameValue, ' 
                  . 'email = :emailValue, comments = :commentsValue');
          
          $stat->bindParam(":fullnameValue", $fullname, PDO::PARAM_STR);
          $stat->bindParam(":emailnameValue", $email, PDO::PARAM_STR);
          $stat->bindParam(":commentsValue", $comments, PDO::PARAM_STR);
          $stat->execute();
          
          echo "<h3>Info Submited</h3><p><a href='index.php'>Back to form</a></p>" ;        
         } catch (PDOException $e) {
              echo "Database Error";
         }
       
       }
       
        ?>
    </body>
</html>
