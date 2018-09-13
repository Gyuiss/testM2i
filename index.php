<?php




function aleatoire(){
    $x =155;
    $i =1;
    while (rand(0, 1000) !== $x)
    { 
    $i++;
    }
    if ($x>150){
    return "<p style=\"border: solid; border-color: red; border-width: 2px;\">Je trouve bien $x en ".$i." foiss</p>";
    } else {
        return "Je trouve bien $x en ".$i." fois";
        }

}
echo aleatoire();

?>