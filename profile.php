<?php

include 'header_wildcard.php';
include 'functions.php';

echo"
<main>
    <section>
        <h1>WELCOME TO THE FORGOTTEN REALMS, ".$_SESSION['user']['playerName']."</h1>
        <p>Email: ".$_SESSION['user']['email']."</p>
        <p>Member since ".parseDate($_SESSION['user']['dateCreated'])."</p>
        <a href='logout.php' class='almostbutton'>Logout</a>
        <hr>
        <article>
            <h2>My characters</h2>
            <table>
                <thead>
                    <tr>
                        <th>Character name</th> 
                        <th>Race</th>
                        <th>Class</th>
                        <th>STR</th>
                        <th>DEX</th>
                        <th>CON</th>
                        <th>INT</th>
                        <th>WIS</th>
                        <th>CHA</th>
                        <th>Creation date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
";

include 'dbconnect.php';

$query="SELECT * FROM characters WHERE playerId=".$_SESSION['user']['id'];
$res=@mysqli_query($dbconn, $query);

foreach ($res as $character){
    echo "
    <tr>
        <td>".$character['characterName']."</td>
        <td>".$character['race']."</td>
        <td>".$character['class']."</td>
        <td>".$character['strength']."</td>
        <td>".$character['dexterity']."</td>
        <td>".$character['constitution']."</td>
        <td>".$character['intelligence']."</td>
        <td>".$character['wisdom']."</td>
        <td>".$character['charisma']."</td>
        <td>".parseDate($character['dateCreated'])."</td>
        <td>
            <form method='post'>
                <input type='hidden' name='id' value='" . $character['id'] . "'>
                <input type='submit' name='delete' value='Delete' class='almostbutton' style='width:4em'>
            </form>
        </td>
    </tr>  
    ";
}

if (isset($_POST['delete'])){
    $id = $_POST['id'];
    $query = "DELETE FROM characters WHERE id=".$id;
    mysqli_query($dbconn, $query);
    header('Location: Profile.php');
}

mysqli_close($dbconn);

echo"                    
                </tbody>
            </table>
        </article>
    </section>
</main>
";

include 'footer_wildcard.php';

?>