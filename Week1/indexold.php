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
        
            
            $fullnameErr = "";
            $emailErr = "";
            $commentsErr = "";
            
            if ( count($_POST) ) {
                
                if ( !array_key_exists("fullname", $_POST) || empty($_POST["fullname"]) ) {
                   $fullnameErr = "Please enter your full name"; 
                   $emailErr = "Please enter email";
                   $commentsErr = "Please enter comment";
                }
                
				// add validation for email, use filter_var
				
				// add validation for comments
				
				// display error messaages next to the field.
                
            }
       
        ?>
        
        <h1> Contact Form </h1>
        <form name="mainform" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">            
            <label>Name</label> <input type="text" name="fullname" value="<?php echo $fullname;?>" /> <?php echo $fullnameErr ?> <br />
            <label>Email</label> <input type="text" name="email" value="<?php echo $email;?>" /> <?php echo $emailErr ?> <br />
            <label>Comments</label> <textarea name="comments"><?php echo $comments;?></textarea> <?php echo $commentsErr ?>
            <br />
            <input type="submit" value="Submit" />
        </form>

    </body>
</html>