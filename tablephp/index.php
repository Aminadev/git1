<?php
$Tab=array(
    array("Amy","Diouf","Femme","Senegal","PHP","amydabakhjanvier1998@gmail.com","11/01/1998","commentaire"),
    array("Amy","Diouf","Femme","Senegal","PHP","amydabakhjanvier1998@gmail.com","11/01/1998","commentaire"),
    array("Amy","Diouf","Femme","Senegal","PHP","amydabakhjanvier1998@gmail.com","11/01/1998","commentaire"),
    array("Amy","Diouf","Femme","Senegal","PHP","amydabakhjanvier1998@gmail.com","11/01/1998","commentaire"),
    array("Amy","Diouf","Femme","Senegal","PHP","amydabakhjanvier1998@gmail.com","11/01/1998","commentaire")
);
?>
<?php
if(isset($_POST['validation'])){
 if(!empty($_POST['Prenom']) || !empty($_POST['Nom']) || !empty($_POST['Genre']) || 
!empty($_POST['Pays']) || !empty($_POST['Langage']) || !empty($_POST['email']) || 
!empty($_POST['date']) || !empty($_POST['Commentaire'])){
$Prenom=$_POST['Prenom'];
$Nom=$_POST['Nom'];
$Genre=$_POST['Genre'];
$Pays=$_POST['Pays']?$Pays=$_POST['Pays']:null;
$Langage=$_POST['Langage']?$Langage=$_POST['Langage']:null;
$email=$_POST['email'];
$date=$_POST['date'];
$commentaire=$_POST['commentaire'];
       
}
else{
    $daba="Merci de tout remplir";
}
}

foreach($Langage as $value){
    $Langage="$Langage $value";
}
array_push($Tab,
    array($Prenom,$Nom,$Genre,$Pays,$Langage,$email,$date,$commentaire)
);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<?php
        if(isset($daba)){
            echo $daba;
        }
?>
    <div class="formulaire">
        <form method="post">
            <div class="el1">
                <label for="Prenom">Prenom</label>
                <input type="text" placeholder="Prenom" name="Prenom" id="Prenom">
            </div><br>
            <div class="el1">
                <label for="Nom">Nom</label>
                <input type="text" placeholder="Nom" name="Nom" >
            </div><br>
            <div class="el1">
                <label for="Genre">Genre</label>
                <input type="checkbox" name="Genre" value="Homme" >
                <label for="Genre">Homme</label>
                <input type="checkbox" name="Genre" value="Femme">
                <label for="Genre">Femme</label>
            </div><br>
            <div class="el1">
                <label for="Pays">Pays</label>
                <select name="Pays" id="Pays" name="Pays">
                    <OPtgroup>
                        <label for="Afrique">Afrique</label>
                        <option value="Senegal">Senegal</option>
                        <option value="Mauritanie">Mauritanie</option>
                        <option value="Gambie">Gambie</option>/
                        <option value="Tchad">Tchad</option>
                        <option value="Algerie">Algerie</option>
                    </OPtgroup>
                    <OPtgroup>
                            <label for="Amerique">Amerique</label>
                            <option value="Wachington">Senegal</option>
                            <option value="Mauritanie">Mauritanie</option>
                            <option value="Gambie">Gambie</option>
                            <option value="Tchad">Tchad</option>
                            <option value="Algerie">Algerie</option>
                    </OPtgroup>
                    <OPtgroup>
                            <label for="Europe">Europe</label>
                            <option value="France">France</option>
                            <option value="Italie">Italie</option>
                            <option value="Allemagne">Allemagne</option>
                            <option value="Espagne">Espagne</option>
                            <option value="Portugal">Portugal</option>
                    </OPtgroup>
                    <OPtgroup>
                            <label for="Asie">Asie</label>
                            <option value="Chine">Chine</option>
                            <option value="Japon">Japon</option>
                            <option value="Birmanie">Birmanie</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Afghanistan">Afghanistan</option>
                    </OPtgroup>
                    
                </select>
            </div><br>
            <div class="el1">
                <label for="Langage">Langage</label>&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="Langage" name="Langage" value="PHP"> 
                <label for="L1">PHP</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="Langage" name="Langage" value="JAVA">
                <label for="L2">JAVA</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="Langage" name="Langage" value="C" >
                <label for="L3">C</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="checkbox" id="Langage" name="Langage" value="C#">
                <label for="L4">C#</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </div><br>
            <div class="el1">
                <input type="email" placeholder="email" name="email">
                <label for="email">email</label>
            </div><br>
            <div class="el1">
                <input type="date" placeholder="Date de naissance" name="date">
                <label for="Date de naissance">Date de naissance</label>
            </div><br>
            <p >
                Le Commentaire :<br>
                <textarea name="commentaire" cols="30" rows="10" maxlength="10"></textarea>
            </p>
            <div class="el1">
                <button name="validation">Enregistrer</button>
            </div>
        </form>
<?php
    foreach($Tab as $daba){
        ?>
        <tr>
        <?php
            foreach($daba as $element){
                echo'<td>'.$element.'</td>';
            }
        ?>
        </tr>
        <?php
    }
?>
</table>
    </div>
</body>
</html>