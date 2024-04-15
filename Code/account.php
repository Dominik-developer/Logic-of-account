<!DOCTYPE html>

<?php

session_start();

require_once "connect.php";
if(isset($_SESSION['Logged']))
{
    header('Location:login.php');
    exit();
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
<style>
    body {
        text-align: center;
        align-items: center;
        margin-top: 20%;
    }

    #a {
        align-items: center;
        text-align: center;
        justify-content: center;
    }

    main {
        text-align: center;
    }

    table {
        margin: 0 auto;
        border: 1px solid black;
    }

    td {
        padding: 10px;
        border: 1px solid black;
    }

    thead{
        background-color: lightgrey;
    }
</style>
</head>

<body>
    
<header>
    Welcome at account <?php  echo $_SESSION["Username"]; ?> !
</header>   

<main>
    <p>Here are you details mate:</p>

    <div id="a"> 
        <table>
                <thead>
                    <tr>
                        <td>UserID</td>
                        <td>Username</td>
                        <td>Email/Login</td>
                        <td>Password</td>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <?php 
                                echo "<p> No: ".$_SESSION["UserID"]."</p>";
                            ?>
                        </td>
                        <td>
                            <?php 
                                echo "<p>".$_SESSION["Username"]."</p>";
                            ?>
                        </td>
                        <td>
                            <?php 
                                echo "<p>".$_SESSION["EMAIL"]."</p>";
                            ?>
                        </td>
                        <td>
                            <?php 
                                echo "<p>".$_SESSION["Password"]."</p>";
                            ?>
                        </td>
                        
                        
                    </tr>
                </tbody>
        </table><br>
    </div>

    <a href="logout.php">Log out</a>
</main>

<footer>
    <br><br>
    <a> This page was created by: Dominik Szczepański; github link: <a href="https://github.com/Dominik-developer">https://github.com/Dominik-developer</a> </a>
</footer>

</body>
</html>
<!--made by: Dominik Szczepański https://github.com/Dominik-developer -->
