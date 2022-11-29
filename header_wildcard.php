<?php

session_start();

echo "
<!DOCTYPE html>
<html lang='en'>

<head>
    <title>INDEX</title>
    <link rel='stylesheet' type='text/css' href='mojCSS.css'/>
    <meta http-equiv='content-type' content='text/html; charset=UTF-8'>
    <meta name='description' content='Sve klase i klasne benificijete rase i rasne benificije za Dungeons & Dragons 5th Edition.'>
    <meta name='keywords' content='dnd class 5e webapp d&d'>
    <meta name='author' content='Antonio Peršin'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>

<body>
<header class='blackheadband fixed' style='top:0px;'>
    <div class='center'>
";
if(isset($_SESSION['user'])){
    echo "<p style='position:absolute;color:white;font-size:64px;bottom:0px;font-weight:bold;'>Welcome, ".$_SESSION['user']['playerName'].".</p>";
}

echo "
    </div>
</header>

<nav>
    <ul id='navlvl1' class='fixed'>
        <li><a href='index.php'>Home</a></li>
        <li><a href='classes.php'>Classes</a></li>
        <li><a href='races.php'>Races</a></li>
        <li><a href='create.php'>Charactermancer</a></li>
";

if(isset($_SESSION['user'])){
    echo "
            <li><a href='profile.php'>My account</a></li>
        </ul>
    </nav>
    ";
}else{
    echo "
            <li><a href='login.php'>Account</a></li>
        </ul>
    </nav>
    ";
}

?>