<?php

include 'header_wildcard.php';

echo"
<main>
    <h1>CHARACTERMANCER</h1>
    <iframe src='https://www.aidedd.org/atlas/index.php?map=R&l=1' class='fullfig'></iframe>

    <form action='create.php' method='GET'>
        <label for='charactername'>Character name:</label>
        <input type='text' name='charactername' id='charactername' required>

        <div id='smallInputWrapper'>
            <div class='smallInput'>
                <label for='cstr'>STR:</label>
                <input type='number' name='cstr' id='cstr' min='1' max='20' value='10'>
            </div>
            <div class='smallInput'>
                <label for='cdex'>DEX:</label>
                <input type='number' name='cdex' id='cdex' min='1' max='20' value='10'>
            </div>
            <div class='smallInput'>
                <label for='ccon'>CON:</label>
                <input type='number' name='ccon' id='ccon' min='1' max='20' value='10'>
            </div>
            <div class='smallInput'>
                <label for='cint'>INT:</label>
                <input type='number' name='cint' id='cint' min='1' max='20' value='10'>
            </div>
            <div class='smallInput'>
                <label for='cwis'>WIS:</label>
                <input type='number' name='cwis' id='cwis' min='1' max='20' value='10'>
            </div>
            <div class='smallInput'>
                <label for='ccha'>CHA:</label>
                <input type='number' name='ccha' id='ccha' min='1' max='20' value='10'>
            </div><div class='cleaner'></div>
        </div>

        <label for='class'>Choose a class:</label>
        <select name='class' id='class'>
            <option value='artificer' selected>Artificer</option>
            <option value='barbarian'>Barbarian</option>
            <option value='bard'>Bard</option>
            <option value='cleric'>Cleric</option>
            <option value='druid'>Druid</option>
        </select>

        <label for='race'>Choose a race:</label>
        <select name='race' id='race'>
            <option value='dragonborn' selected>Dragonborn</option>
            <option value='dwarf'>Dwarf</option>
            <option value='elf'>Elf</option>
            <option value='gnome'>Gnome</option>
            <option value='half-elf'>Half-elf</option>
        </select>

        <input type='submit' value='Create'>
    </form>
</main>
";

include 'footer_wildcard.php';

?>