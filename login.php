<?php

include 'header_wildcard.php';

echo"
<main>
    <h1>LOGIN</h1>
    <form action='' method='POST' id='loginf' name='loginf'>
        <label for='email'>E-mail:</label>
        <input type='email' name='email' id='email' required>

        <label for='pass'>Enter password:</label>
        <input type='password' name='pass' id='pass' required>
";

include 'dbconnect.php';

if(isset($_POST['attempted'])){
    $query="SELECT * FROM users WHERE email='".$_POST['email']."'";
    $res=@mysqli_query($dbconn, $query);
    $row=@mysqli_fetch_array($res, MYSQLI_ASSOC);
    if (isset($row['email'])) {
        $check_pass_enc = password_hash($_POST['pass'], PASSWORD_DEFAULT, ['cost' => 12]);
        if (password_verify($_POST['pass'], $row['password'])) {
            $_SESSION['user']['playerName'] = $row['playerName'];
            $_SESSION['user']['id'] = $row['id'];
            $_SESSION['user']['email'] = $row['email'];
            $_SESSION['user']['dateCreated'] = $row['dateCreated'];
            header("Refresh: 1;URL=index.php");
        } else {
            echo "<p>Wrong password.</p>";
            unset($_SESSION['user']);
        }
    }
}

mysqli_close($dbconn);

echo "
        <input type='submit' value='Login' name='attempted'>
    </form>
    <p>Don't have an account? <a href='register.php'>Click here to register.</a></p>
</main>
";

include 'footer_wildcard.php';

?>