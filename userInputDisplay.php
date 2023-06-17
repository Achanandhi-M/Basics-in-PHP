<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
       <form method="POST" action="">
       <label for="name">Enter your name</label></br>
        <input type="text" id="name" name="uservalue" /></br>
        <input  type="submit" value="submit" />
        <input type="submit" value="clear" />
        <?php
       if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST["uservalue"];
        echo "<br/>Welcome $name!"; 
        $name1=strlen($_POST["uservalue"]);
        echo"<br/>The lenth of your name is :$name1";
          }       
        ?>
    </body>
</html>