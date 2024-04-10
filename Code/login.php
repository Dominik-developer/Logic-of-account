<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
<style>
    body {
        text-align: center;
        align-items: center;
        margin-top: 20%;
    }
 </style>
</head>

<body>

<header>
    Log in below:
</header>

<main>

    <form action="account.php" method="POST">
        
        <input type="text" name="login" placeholder="Login:" required="required" >
        <br><br>
        <input type="password" name="password" placeholder="Password:" maxlenght="20" required="required">
        <br><br>
        <input type="submit" value="Log in">
        <br><br>
    </form>
 
        <a href="index.php" >Back to main file </a>
</main>
            
<footer>
    <br>
   <a> This page was created by: Dominik Szczepański; github link: <a href="https://github.com/Dominik-developer">https://github.com/Dominik-developer</a> </a>
</footer>
   
</body>
</html>
<!--made by: Dominik Szczepański https://github.com/Dominik-developer -->