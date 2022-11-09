<?php

include 'header_wildcard.php';

echo"
<main>
    <h1>LOGIN</h1>
    <form action='login.php' method='GET' id='loginf' name='loginf'>
        <label for='email'>E-mail:</label>
        <input type='email' name='email' id='email'>

        <label for='pass'>Enter password:</label>
        <input type='password' name='pass1' id='pass'>

        <input type='submit' value='Login'>
    </form>
    <p>Don't have an account? <a href='register.php'>Click here to register.</a></p>
</main>
";

include 'footer_wildcard.php';

?>