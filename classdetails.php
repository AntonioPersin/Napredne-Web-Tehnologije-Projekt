<?php

include 'header_wildcard.php';
include 'functions.php';

if(isset($_GET['name'])){
    $id=$_GET['name'];
}

echo"
<script>
    window.addEventListener('load',ucitaj,false);
    function ucitaj(){
        var url='https://api.open5e.com/classes/".$id."';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4) {
                var reza = JSON.parse(this.responseText);
                
                document.getElementsByTagName('h1')[0].innerText=reza.name;
                document.getElementById('hit_die').innerHTML=formatiraj(reza.hit_dice);
                document.getElementById('hp_start').innerHTML=formatiraj(reza.hp_at_1st_level);
                document.getElementById('hp_level').innerHTML=formatiraj(reza.hp_at_higher_levels);
                document.getElementById('profs_armor').innerHTML=formatiraj(reza.prof_armor);
                document.getElementById('profs_weapons').innerHTML=formatiraj(reza.prof_weapons);
                document.getElementById('profs_tools').innerHTML=formatiraj(reza.prof_tools);
                document.getElementById('profs_saves').innerHTML=formatiraj(reza.prof_saving_throws);
                document.getElementById('profs_skills').innerHTML=formatiraj(reza.prof_skills);
                document.getElementById('start_equip').innerText=formatiraj_tekst(reza.equipment);
                document.getElementById('subtype_title').innerHTML=formatiraj(reza.subtypes_name);
                
                if(reza.archetypes.length>0){
                    var archetypes_ul='';
                    reza.archetypes.forEach((elem,index)=>{
                       archetypes_ul+='<li>'+elem.name+'</li>';
                    });
                    document.getElementById('subtype_list').innerHTML=archetypes_ul;
                }else{
                    document.getElementById('subtype_list').innerHTML='<dt>No available subclasses for this class.</dt>';
                }
                document.getElementById('casting_ability').innerHTML=formatiraj(reza.spellcasting_ability);
                
            }
        };
        
        xhttp.open('GET', url, async = true);
        xhttp.setRequestHeader('Content-type', 'application/json; charset=UTF-8');
        xhttp.send();
    };

</script>
<main>
    <section>
        <h1></h1>

        <article>
            <h2>Class Features</h2>
            <p>You gain the following class features.</p>

            <h3>Hit Points</h3>
            <p><b>Hit Dice:</b> <span id='hit_die'></span> per barbarian level</p>
            <p><b>Hit Points at 1st Level:</b> <span id='hp_start'></span></p>
            <p><b>Hit Points at Higher Levels:</b> <span id='hp_level'></span></p>

            <h3>Proficiencies</h3>
            <p><b>Armor:</b> <span id='profs_armor'></span></p>
            <p><b>Weapons:</b> <span id='profs_weapons'></span></p>
            <p><b>Tools:</b> <span id='profs_tools'></span></p>
            <p><b>Saving Throws:</b> <span id='profs_saves'></span></p>
            <p><b>Skills:</b> <span id='profs_skills'></span></p>

            <h3>Equipment</h3>
            <p id='start_equip'></p>

            <h3 id='subtype_title'></h3>
            <ul id='subtype_list'>
            
            </ul>
            
            <h3>Spellcasting</h3>
            <p><b>Spellcasting ability:</b> <span id='casting_ability'></span></p>
        </article>

        <p>Source: <a href='https://open5e.com'>open5e.com</a>, ".parseDate(date('Y-m-d'))."</p>
        <a href='classes.php' class='almostbutton' style='display: block;text-align: center;'>Back to classes</a>
    </section>
</main>
";

include 'footer_wildcard.php';

?>