<?php

function parseDate($dateString){
    $date=new DateTime($dateString);
    return $date->format('d. m. Y.');
}

?>