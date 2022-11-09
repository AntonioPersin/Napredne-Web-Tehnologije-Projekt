<?php

include 'header_wildcard.php';

echo"
<main>
    <h1>CHARACTERMANCER</h1>
    <iframe src='https://www.aidedd.org/atlas/index.php?map=R&l=1' class='fullfig'></iframe>

    <form action='create.php' method='GET'>
        <label for='playername'>Player name:</label>
        <input type='text' name='playername' id='playername'>

        <label for='charactername'>Character name:</label>
        <input type='text' name='charactername' id='charactername'>

        <label for='playermail'>Player contact e-mail:</label>
        <input type='email' name='playermail' id='playermail'>

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