<?php

include 'header_wildcard.php';
if(isset($_SESSION['user'])) {
    echo "
    <main>
        <h1>CHARACTERMANCER</h1>
        <iframe src='https://www.aidedd.org/atlas/index.php?map=R&l=1' class='fullfig'></iframe>
    
        <form action='' method='POST'>
            <label for='charactername'>Character name:</label>
            <input type='text' name='charactername' id='charactername' required>
    
            <div id='smallInputWrapper'>
                <div class='smallInput'>
                    <label for='cstr'>STR:</label>
                    <input type='number' name='cstr' id='cstr' min='1' max='20' value='10' required>
                </div>
                <div class='smallInput'>
                    <label for='cdex'>DEX:</label>
                    <input type='number' name='cdex' id='cdex' min='1' max='20' value='10' required>
                </div>
                <div class='smallInput'>
                    <label for='ccon'>CON:</label>
                    <input type='number' name='ccon' id='ccon' min='1' max='20' value='10' required>
                </div>
                <div class='smallInput'>
                    <label for='cint'>INT:</label>
                    <input type='number' name='cint' id='cint' min='1' max='20' value='10' required>
                </div>
                <div class='smallInput'>
                    <label for='cwis'>WIS:</label>
                    <input type='number' name='cwis' id='cwis' min='1' max='20' value='10' required>
                </div>
                <div class='smallInput'>
                    <label for='ccha'>CHA:</label>
                    <input type='number' name='ccha' id='ccha' min='1' max='20' value='10' required>
                </div><div class='cleaner'></div>
                <p>Please add your racial bonuses as well.</p>
            </div>
    
            <label for='class'>Choose a class:</label>
            <select name='class' id='class' required>
                <option value='Barbarian' selected>Barbarian</option>
                <option value='Bard'>Bard</option>
                <option value='Cleric'>Cleric</option>
                <option value='Druid'>Druid</option>
                <option value='Fighter'>Fighter</option>
                <option value='Monk'>Monk</option>
                <option value='Paladin'>Paladin</option>
                <option value='Ranger'>Ranger</option>
                <option value='Rogue'>Rogue</option>
                <option value='Sorcerer'>Sorcerer</option>
                <option value='Warlock'>Warlock</option>
                <option value='Wizard'>Wizard</option>
            </select>
    
            <label for='race'>Choose a race:</label>
            <select name='race' id='race' required>
                <option value='Dwarf' selected>Dwarf</option>
                <option value='Elf'>Elf</option>
                <option value='Halfling'>Halfling</option>
                <option value='Human'>Human</option>
                <option value='Dragonborn'>Dragonborn</option>
                <option value='Gnome'>Gnome</option>
                <option value='Half-Elf'>Half-Elf</option>
                <option value='Half-Orc'>Half-Orc</option>
                <option value='Thiefling'>Thiefling</option>
            </select>
    ";

    include 'dbconnect.php';

    if (isset($_POST['created'])) {
        $query="INSERT INTO characters (playerId, characterName, strength, dexterity, constitution, intelligence, wisdom, charisma, class, race) ";
        $query.="VALUES (" . $_SESSION['user']['id'] . ", '" . $_POST['charactername'] . "', ".$_POST['cstr'].", ".$_POST['cdex'].", ".$_POST['ccon'].", ";
        $query.=$_POST['cint'].", ".$_POST['cwis'].", ".$_POST['ccha'].", '" . $_POST['class'] . "', '" . $_POST['race'] . "')";
        $res = @mysqli_query($dbconn, $query);
        echo "<p>Character created, you can find it in your <a href='profile.php' style='display:inline;'>profile</a>.</p>";
    }

    mysqli_close($dbconn);

    echo "
            <input type='submit' value='Create' name='created'>
        </form>
    </main>
    ";
}else{
    echo "<main><p>You need to log in to create characters using Charactermancer. Go to <a href='login.php'>log in</a> or <a href='register.php'>register</a>.</p></main>";
}
include 'footer_wildcard.php';

?>