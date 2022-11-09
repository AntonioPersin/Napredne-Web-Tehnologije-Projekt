<?php

include 'header_wildcard.php';

echo"
<main>
    <section>
        <h1>BARBARIAN</h1>

        <figure class='fullfig'>
            <img src='images/barbarian table.jpg' alt='barbarian class table'>
            <figcaption>
                <p>Barbarian table</p>
                <p>You must have a Strength score of 13 or higher in order to multiclass in or out of this class.</p>
            </figcaption>
        </figure>

        <article>
            <p>For some, their rage springs from a communion with fierce animal spirits. Others draw from a roiling reservoir
            of anger at a world full of pain. For every barbarian, rage is a power that fuels not just a battle frenzy but
            also uncanny reflexes, resilience, and feats of strength.</p>

            <h2>Class Features</h2>
            <p>As a barbarian, you gain the following class features.</p>

            <h3>Hit Points</h3>
            <p><b>Hit Dice:</b> 1d12 per barbarian level</p>
            <p><b>Hit Points at 1st Level:</b> 12 + your Constitution modifier</p>
            <p><b>Hit Points at Higher Levels:</b> 1d12 (or 7) + your Constitution modifier per barbarian level after 1st</p>

            <h3>Proficiencies</h3>
            <p><b>Armor:</b> Light armor, medium armor, shields</p>
            <p><b>Weapons:</b> Simple weapons, martial weapons</p>
            <p><b>Tools:</b> None</p>
            <p><b>Saving Throws:</b> Strength, Constitution</p>
            <p><b>Skills:</b> Choose two from Animal Handling, Athletics, Intimidation, Nature, Perception, and Survival</p>

            <h3>Equipment</h3>
            <p>You start with the following equipment, in addition to the equipment granted by your background:</p>

            <ul>
                <li>(a) a greataxe or (b) any martial melee weapon</li>
                <li>(a) two handaxes or (b) any simple weapon</li>
                <li>An explorer's pack and four javelins</li>
            </ul>
        </article>

        <figure class='fullfig'>
            <img src='images/barbarian subclass table.jpg' alt='barbarian subclass options'>
            <figcaption>
                <p>Primal path</p>
                <p>At 3rd level, you choose a path that shapes the nature of your rage. Your choice grants you features
                at 3rd level and again at 6th, 10th, and 14th levels.</p>
            </figcaption>
        </figure>
        <p>Izvor: dnd5e.wikidot.com, 25.10.2022.</p>
        <a href='classes.php' class='almostbutton' style='display: block;text-align: center;'>Back to classes</a>
    </section>
</main>
";

include 'footer_wildcard.php';

?>