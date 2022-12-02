<?php

include 'header_wildcard.php';

echo"
<main>
    
    <h1>D&D 5e RACES</h1>
    <a href='#' class='listitem'>
        <section>
            <h2 class='race_title'></h2>
            <p class='race_desc'></p>
            <p class='almostbutton'>Read More</p>
        </section>
    </a>
    <a href='#' class='listitem'>
        <section>
            <h2 class='race_title'></h2>
            <p class='race_desc'></p>
            <p class='almostbutton'>Read More</p>
        </section>
    </a>
    <a href='#' class='listitem'>
        <section>
            <h2 class='race_title'></h2>
            <p class='race_desc'></p>
            <p class='almostbutton'>Read More</p>
        </section>
    </a>
    <a href='#' class='listitem'>
        <section>
            <h2 class='race_title'></h2>
            <p class='race_desc'></p>
            <p class='almostbutton'>Read More</p>
        </section>
    </a>
    <a href='#' class='listitem'>
        <section>
            <h2 class='race_title'></h2>
            <p class='race_desc'></p>
            <p class='almostbutton'>Read More</p>
        </section>
    </a>
    <a href='#' class='listitem'>
        <section>
            <h2 class='race_title'></h2>
            <p class='race_desc'></p>
            <p class='almostbutton'>Read More</p>
        </section>
    </a>
    <a href='#' class='listitem'>
        <section>
            <h2 class='race_title'></h2>
            <p class='race_desc'></p>
            <p class='almostbutton'>Read More</p>
        </section>
    </a>
    <a href='#' class='listitem'>
        <section>
            <h2 class='race_title'></h2>
            <p class='race_desc'></p>
            <p class='almostbutton'>Read More</p>
        </section>
    </a>
    <a href='#' class='listitem'>
        <section>
            <h2 class='race_title'></h2>
            <p class='race_desc'></p>
            <p class='almostbutton'>Read More</p>
        </section>
    </a>
    <div class='cleaner'></div>
</main>
<script>
    window.addEventListener('load',ucitaj,false);
    function ucitaj(){
        console.log('function');
        var url='https://api.open5e.com/races/';
        var xhttp = new XMLHttpRequest();
        
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4) {
                var reza = JSON.parse(this.responseText);
                reza.results.forEach((elem,index)=>{
                    document.getElementsByClassName('listitem')[index].href='racedetails.php?name='+reza.results[index].slug;
                    document.getElementsByClassName('race_title')[index].innerHTML=formatiraj(reza.results[index].name);
                    document.getElementsByClassName('race_desc')[index].innerHTML=formatiraj(reza.results[index].desc);
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