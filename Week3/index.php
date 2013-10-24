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
        <form name="mainform" action="index.php" method="post">
            
            Full Name: <input type="text" name="fullname" value="<?php echo $fullname; ?>" /> <br />
            Email: <input type="text" name="email" value="<?php echo $email; ?>" /> <br />
            Comments: <textarea cols="20" rows="5" name="comments" ><?php echo $comments; ?></textarea><br />
            <input type="submit" name="submit" />
        </form>
        
    </body>
</html>
