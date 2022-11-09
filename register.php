<?php

include 'header_wildcard.php';

echo"
<main>
    <h1>REGISTER</h1>
    <form action='register.php' method='GET' id='registerf' name='registerf'>
        <label for='playername'>Player name:</label>
        <input type='text' name='playername' id='playername'>

        <label for='email'>Contact e-mail:</label>
        <input type='email' name='email' id='email'>

        <label for='pass1'>Enter password:</label>
        <input type='password' name='pass1' id='pass1'>

        <label for='pass2'>Repeat your password:</label>
        <input type='password' name='pass2' id='pass2'>

        <input type='submit' value='Register'>
    </form>
    <p>Already have an account? <a href='login.php'>Click here to login.</a></p>
</main>

";

include 'footer_wildcard.php';

?>