<?php
session_start();
ob_start();

 include_once 'databases/dbh.php';


?>
<!DOCTYPE html>

<html>
    <head>
        <title>Tasty Recipes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="resetStylesheet.css"/>
        <link rel="stylesheet" type="text/css" href="style.css"/>
         <script   src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous">
        </script>
        
    </head>
    <body>
         
        
            <div id="header">
                 <h1>Tasty Recipes</h1>
          
            </div>
        <div> 
            <a href="index.php" class="btn" > Home</a> <a href="calendar.php" class="btn">Calendar</a> 
        </div>
      <?php
      if(isset($_SESSION['u_id'])){
          echo "<form action='logout.php' method='POST'>
            <button class='btn' type='submit' name='submitLogout'>Logout</button>
             </form>";
      
        
      }else{
      echo "<form action='login.php' method='POST'>
            <input type='text' name='u_uid' placeholder='Username or Email'>
            <input type='password' name='u_pwd' placeholder='Password'>
            <button class='btn' type='submit' name='submitLogin'>Login</button>
      </form>";}
      echo "<form action='signup.php' method='POST'>
                 <button class='btn' type='submit' name='submit'>SignUp</button>
                 </form>";
      ?>
        
         
          
                
          
                 
                 
           
             