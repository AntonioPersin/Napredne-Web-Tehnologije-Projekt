<?php

include 'header_wildcard.php';
include 'functions.php';

if(isset($_GET['name'])){
    $id=$_GET['name'];
}

echo "
<script>
    
    window.addEventListener('load',ucitaj,false);
    function ucitaj(){
        var url='https://api.open5e.com/races/".$id."';
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4) {
                var reza = JSON.parse(this.responseText);
                
                document.getElementsByTagName('h1')[0].innerText=reza.name;
                document.getElementById('race_desc').innerHTML=formatiraj(reza.desc);
                document.getElementById('race_asi').innerHTML=formatiraj(reza.asi_desc);
                document.getElementById('race_age').innerHTML=formatiraj(reza.age);
                document.getElementById('race_align').innerHTML=formatiraj(reza.alignment);
                document.getElementById('race_size').innerHTML=formatiraj(reza.size);
                document.getElementById('race_speed').innerHTML=formatiraj(reza.speed_desc);
                document.getElementById('race_langs').innerHTML=formatiraj(reza.languages);
                document.getElementById('race_vision').innerHTML=formatiraj(reza.vision);
                var traits=reza.traits.replace(/\*\*_/g,'').replace(/_\*\*/g,'').replace(/\*\*/g,'');
                document.getElementById('race_traits').innerText=traits;
                if(reza.subraces.length>0){
                    var subraces_dl='';
                    reza.subraces.forEach((elem,index)=>{
                       subraces_dl+='<dt>'+elem.name+'</dt><dd>'+elem.desc+'</dd>';
                    });
                    document.getElementById('subraces').innerHTML=subraces_dl;
                }else{
                    document.getElementById('subraces').innerHTML='<dt>No available subraces for this race.</dt>';
                }
                
                
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
            <p id='race_desc'></p>

            <h2>Racial Features</h2>

            <p id='race_asi'></p>
            <p id='race_age'></p>
            <p id='race_align'></p>
            <p id='race_size'></p>
            <p id='race_speed'></p>
            <p id='race_langs'></p>
            <p id='race_vision'></p>
            <p id='race_traits'></p>
            
            <h2>Subraces</h2>   
            <dl id='subraces'>
            </dl>
        </article>

        <p>Source: <a href='https://open5e.com'>open5e.com</a>, ".parseDate(date('Y-m-d'))."</p>
        <a href='races.php' class='almostbutton' style='display: block;text-align: center;'>Back to classes</a>
    </section>
</main>
";

include 'footer_wildcard.php';

?>