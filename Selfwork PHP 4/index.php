<?php

/*Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere

$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
];

*/

$users = [
  ['name' => 'Davide', 
  'surname' => 'Cariola', 
  'gender' => 'Maschio'
],
['name' => 'Gina', 
  'surname' => 'Candeggina', 
  'gender' => 'Femmina'
],
['name' => 'Ettore', 
  'surname' => 'Carretto', 
  'gender' => 'Non definito'
]
];

$indexArray = count($users) - 1;

 
for($i = 0; $i <= $indexArray; $i++)
{

  $genere = "";

  if($users[$i]["gender"] == "Maschio")
  {
    $genere = "Sig. ";

  }else if($users[$i]["gender"] == "Femmina"){
    $genere = "Sig.ra ";

  }else{
    $genere = "";

  }


  echo "Buongiorno " . $genere  . $users[$i]["name"] . " " . $users[$i]["surname"] . ".\n";
}

?>