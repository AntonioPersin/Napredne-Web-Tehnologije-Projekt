<?php

include 'header_wildcard.php';

echo"
<main>
    <h1>REGISTER</h1>
    <form action='' method='POST' id='registerf' name='registerf'>
        <label for='playername'>Player name:</label>
        <input type='text' name='playername' id='playername' required>

        <label for='email'>Contact e-mail:</label>
        <input type='email' name='email' id='email' required>

        <label for='pass1'>Enter password:</label>
        <input type='password' name='pass1' id='pass1' minlength='4' maxlength='16' required>

        <label for='pass2'>Repeat your password:</label>
        <input type='password' name='pass2' id='pass2' minlength='4' maxlength='16' required>
";

include 'dbconnect.php';

if(isset($_POST['submitted'])){
    $query="SELECT * FROM users WHERE email='".$_POST['email']."'";
    $res=@mysqli_query($dbconn, $query);
    $row=@mysqli_fetch_array($res, MYSQLI_ASSOC);
    if (!isset($row['email']) && $_POST['pass1']==$_POST['pass2']) {
        $pass_enc = password_hash($_POST['pass1'], PASSWORD_DEFAULT, ['cost' => 12]);
        $query = "INSERT INTO users (playerName, email, password) VALUES ('".$_POST['playername']."', '".$_POST['email']."', '".$pass_enc."')";
        $res = @mysqli_query($dbconn, $query);
        echo "<p>Registration successful please wait.</p>";
        header("Refresh: 2;URL=login.php");
    }elseif ($_POST['pass1']!=$_POST['pass2']){
        echo "<p>Passwords must match.</p>";
    }else{
        echo "<p>Account associated with that email already exists.</p>";
    }
}

echo "
<input type='submit' value='Register' name='submitted'>
    </form>
    <p>Already have an account? <a href='login.php'>Click here to login.</a></p>
</main>
";

include 'footer_wildcard.php';

?>