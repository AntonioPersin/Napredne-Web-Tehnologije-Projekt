<?php

include 'header_wildcard.php';

echo"
<main>
    <section>
        <h1>WELCOME TO THE FORGOTTEN REALMS, ".$_SESSION['user']['playerName']."</h1>
        <p>Email: ".$_SESSION['user']['email']."</p>
        <p>Member since ".$_SESSION['user']['dateCreated']."</p>
        <a href='logout.php' class='almostbutton'>Logout</a>
        <hr>
        <article>
            <h2>My characters</h2>
            <p>".$_SESSION['user']['id']."</p>
        </article>
    </section>
</main>
";

include 'footer_wildcard.php';

?>