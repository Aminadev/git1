<?php


$bdd = 
new PDO('mysql:host=127.0.0.1;dbname=TD1 prime','root','');



$soldat = $bdd->query('SELECT* FROM Soldat');



$matricule = array();

while ($donnees =$soldat->fetch()) {

$matricule[] = $donnees[matricule];

}


for ($x=0;$x <5; $x++) {



$table = array('2019-08-01', '2019-08-02', '2020-08-01', '2020-08-02',);

$date = rand(0, 3);

$date_passage = $table[$date];



for ($i=1;$i <= 10; $i++) {

$obstacle = $i;


$intructeur = rand(1, 2);

$temp = rand(2, 60).'secondes';

$note = rand(4, 20);


$req = $bdd->query("SELECT id_niveau FROM obstacle WHERE id_obstacle=$obstacle");

$bonus = $req->fetch();

$bonus = $bonus[id_niveau];



if($bonus ==1){

$note_final = $note;

}

if($bonus ==2){

$note_final = $note + 1;

}

if($bonus ==3){

$note_final = $note + 2;

}



$requete = $bdd->prepare("INSERT INTO Passage(idPassage, temps, NoteInstructeur, idInstructeur, idObstacle, matricule, date_passage, notefinale)
VALUES(?, ?, ?, ?, ?, ?, ?, ?)");

$requete->execute(array(null,
$temp, 
$note, $intructeur, 
$obstacle, $matricule[$x],
$date_passage, 
$note_final));

}

}
