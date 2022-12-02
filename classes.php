<?php

include 'header_wildcard.php';

echo"
<main>
    
    <h1>D&D 5e CLASSES</h1>
    <a href='#' class='listitem'>
        <section>
            <h2 class='class_title'></h2>
            <p class='class_hit_die'></p>
            <p class='class_hp_start'></p>
            <p class='class_hp_level'></p>
            <p class='almostbutton'>Read More</p>
        </section>
    </a>
    <a href='#' class='listitem'>
        <section>
            <h2 class='class_title'></h2>
            <p class='class_hit_die'></p>
            <p class='class_hp_start'></p>
            <p class='class_hp_level'></p>
            <p class='almostbutton'>Read More</p>
        </section>
    </a>
    <a href='#' class='listitem'>
        <section>
            <h2 class='class_title'></h2>
            <p class='class_hit_die'></p>
            <p class='class_hp_start'></p>
            <p class='class_hp_level'></p>
            <p class='almostbutton'>Read More</p>
        </section>
    </a>
    <a href='#' class='listitem'>
        <section>
            <h2 class='class_title'></h2>
            <p class='class_hit_die'></p>
            <p class='class_hp_start'></p>
            <p class='class_hp_level'></p>
            <p class='almostbutton'>Read More</p>
        </section>
    </a>
    <a href='#' class='listitem'>
        <section>
            <h2 class='class_title'></h2>
            <p class='class_hit_die'></p>
            <p class='class_hp_start'></p>
            <p class='class_hp_level'></p>
            <p class='almostbutton'>Read More</p>
        </section>
    </a>
    <a href='#' class='listitem'>
        <section>
            <h2 class='class_title'></h2>
            <p class='class_hit_die'></p>
            <p class='class_hp_start'></p>
            <p class='class_hp_level'></p>
            <p class='almostbutton'>Read More</p>
        </section>
    </a>
    <a href='#' class='listitem'>
        <section>
            <h2 class='class_title'></h2>
            <p class='class_hit_die'></p>
            <p class='class_hp_start'></p>
            <p class='class_hp_level'></p>
            <p class='almostbutton'>Read More</p>
        </section>
    </a>
    <a href='#' class='listitem'>
        <section>
            <h2 class='class_title'></h2>
            <p class='class_hit_die'></p>
            <p class='class_hp_start'></p>
            <p class='class_hp_level'></p>
            <p class='almostbutton'>Read More</p>
        </section>
    </a>
    <a href='#' class='listitem'>
        <section>
            <h2 class='class_title'></h2>
            <p class='class_hit_die'></p>
            <p class='class_hp_start'></p>
            <p class='class_hp_level'></p>
            <p class='almostbutton'>Read More</p>
        </section>
    </a>
    <a href='#' class='listitem'>
        <section>
            <h2 class='class_title'></h2>
            <p class='class_hit_die'></p>
            <p class='class_hp_start'></p>
            <p class='class_hp_level'></p>
            <p class='almostbutton'>Read More</p>
        </section>
    </a>
    <a href='#' class='listitem'>
        <section>
            <h2 class='class_title'></h2>
            <p class='class_hit_die'></p>
            <p class='class_hp_start'></p>
            <p class='class_hp_level'></p>
            <p class='almostbutton'>Read More</p>
        </section>
    </a>
    <a href='#' class='listitem'>
        <section>
            <h2 class='class_title'></h2>
            <p class='class_hit_die'></p>
            <p class='class_hp_start'></p>
            <p class='class_hp_level'></p>
            <p class='almostbutton'>Read More</p>
        </section>
    </a>
    <div class='cleaner'></div>
</main>
<script>
    window.addEventListener('load',ucitaj,false);
    function ucitaj(){
        console.log('function');
        var url='https://api.open5e.com/classes/';
        var xhttp = new XMLHttpRequest();
        
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4) {
                var reza = JSON.parse(this.responseText);
                reza.results.forEach((elem,index)=>{
                    document.getElementsByClassName('listitem')[index].href='classdetails.php?name='+reza.results[index].slug;
                    document.getElementsByClassName('class_title')[index].innerHTML=formatiraj(reza.results[index].name);
                    document.getElementsByClassName('class_hit_die')[index].innerHTML='Hit die: '+formatiraj(reza.results[index].hit_dice);
                    document.getElementsByClassName('class_hp_start')[index].innerHTML='HP at 1st level: '+formatiraj(reza.results[index].hp_at_1st_level);
                    document.getElementsByClassName('class_hp_level')[index].innerHTML='HP at higher levels: '+formatiraj(reza.results[index].hp_at_higher_levels);
                });
            }
        };
        
        xhttp.open('GET', url, async = true);
        xhttp.setRequestHeader('Content-type', 'application/json; charset=UTF-8');
        xhttp.send();
    };
</script>
";

include 'footer_wildcard.php';

?>