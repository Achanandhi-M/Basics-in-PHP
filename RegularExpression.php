<!DOCTYPE html>
<html>
    <head>
        <title>PHP</title>
    </head>
    <body>
       <form method="POST" action="">
       <label for="name">Enter your name</label></br>
        <input type="text" id="name" name="uservalue" required /></br>
        <input  type="submit" value="submit" />
        <?php
       if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name=$_POST["uservalue"];
        $username="Achu";

       if(preg_match("/^$username$/i",$name)){
        echo "<br/>Welcome $name!"; 
       }
       else{
       echo "</br> You are logged in as New user!";    
          } 
}      
        ?>
    </body>
</html>