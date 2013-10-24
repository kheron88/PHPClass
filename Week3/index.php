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
        // put your code here
        
        //$_POST - only works for HTML forms - Looks at "name" of input field.
        //echo $_POST["fullname"], "<br />", $_POST["email"],"<br />", $_POST["comments"], "<br />";
        
        //print_r is used for debugging
       print_r($_POST);
       
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
       
       
        ?>
        
        
        
        <form name="mainform" action="processform.php" method="post">
            
            Full Name: <input type="text" name="fullname" value="<?php echo $fullname; ?>" /> <br />
            Email: <input type="text" name="email" value="<?php echo $email; ?>" /> <br />
            Comments: <textarea cols="20" rows="5" name="comments" ><?php echo $comments; ?></textarea><br />
            <input type="submit" name="submit" />
        </form>
        
    </body>
</html>
