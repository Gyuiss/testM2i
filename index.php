<?php




function aleatoire(){
    $x =155;
    $i =1;
    while (rand(0, 1000) !== $x)
    { 
    $i++;
    }
    return "Je trouve bien $x en ".$i." fois";
}

echo aleatoire();


?>