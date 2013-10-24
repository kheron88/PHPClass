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
        $dbh = new PDO("mysql:host=localhost;port=3306;dbname=phplab","root","");
        $stat = $dbh->prepare('SELECT * FROM week3');
        $stat->execute();
        
        $result = $stat->fetchAll();
          
          if (count($result)) {
              foreach($result as $row){
                  print_r($row);
                  echo "<br /";
              }
          } else {
              echo "No rows returned.";
          }
          
        
        ?>
        
        
        <form name="mainform" action="processform.php" method="post">
            
            Full Name: <input type="text" name="fullname" value="" /> <br />
            Email: <input type="text" name="email" value="" /> <br />
            Comments: <textarea cols="20" rows="5" name="comments" ></textarea><br />
            <input type="submit" name="submit" />
        </form>
        
    </body>
</html>
