<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
  <?php

    /*tableau numerote*/
    $tab1=array("prenom","nom","adresse");
    $tab1[0]="prenom";
    $tab1[1]="nom";
    $tab1[2]="adresse";
    echo $tab1[0].'</br>';
    /*tableau associatif*/
    $tab2=array("prenom"=>"amy","nom"=>"diouf","adresse"=>"golf");
    $tab2["prenom"]="amy";
    $tab2["nom"]="diouf";
    $tab2["adresse"]="golf";
    echo $tab2["prenom"].'</br>';
    /*tableau global*/
    $tab3=array(
        array("amy","diouf","golf"),
        array("awa","ly","parcelles"),
        array("fatou","lo","camberene")
    );
    echo $tab3[0][0].' '.$tab3[0][1].' '.'habite'.' '.$tab3[0][2].'</br>';
    echo $tab3[1][0].' '.$tab3[1][1].' '.'habite'.' '.$tab3[1][2].'</br>';
    echo $tab3[2][0].' '.$tab3[2][1].' '.'habite'.' '.$tab3[2][2].'</br>';

  ?>  
</body>
</html>