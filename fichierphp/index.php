<?php
        $fichier=file('file.txt');
        $ndl= count($fichier);
        $dl=$fichier [$ndl-1];
        $mat=explode(' ',$dl);
        $matricule=$mat[0];
        if ($matricule== ''){
            $matricule="EM-".sprintf("%05d", 1);
        }
        else{
            $matricule ++;
        }
       
        if(isset($_POST['validation']))
        {

        if(!empty($_POST['matricule'])){
            $matricule = $_POST['matricule'];
            if (!empty($_POST['prenom'])){
                $prenom = $_POST['prenom'];
                if (!empty($_POST['nom'])){
                    $nom = $_POST['nom'];
                    if (!empty($_POST['date'])){
                        $date = $_POST['date'];
                        if (!empty($_POST['salaire'])){
                            $salaire = $_POST['salaire'];
                            if(!empty($_POST['telephone'])){
                                $telephone = $_POST['telephone'];
                                if(!empty($_POST['email'])){
                                    $email = $_POST['email'];
                                }
                            }
                        }
                    }
                }
            }
        } 
    }    
 
       else{
                $daba="Merci de tout remplir";
            }

            $fichier= fopen('file.txt', 'a+');
            $texte="$matricule $prenom $nom $date $salaire $telephone $email \n";
            fwrite($fichier,$texte);

            fclose ($fichier); 
            

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fichierphp</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<header>
    <div class="form">
        <div class="t1"><h3>EMPLOYES</h3></div>
        <form action="" method="POST">
            <div class="msg">
                <?php
                echo $daba ;
                ?>
            </div>
            <div class="l1">
                <label for=""><h1>Matricule</h1></label>
                <input type="text" name="matricule" value="<?php echo $matricule ;?>" >
            </div>

            <div class="l1">
                <label for="prenom"><h1>Prenom</h1></label>
                <input type="text" name="prenom" id="prenom" > 
                
            </div>

            <div class="l1">
                <label for="nom" ><h1>Nom</h1></label>
                <input type="text" name="nom" id="nom">
               
            </div>

            <div class="l1">
                <label for="date"><h1>Date de Naissance</h1></label>
                <input type="text" name="date" id="date" placeholder="01/01/2000">
            </div>

            <div class="l1">
                <label for="salaire"><h1>Salaire</h1></label>
                <input type="text" name="salaire" id="salaire">
                
            </div>

            <div class="l1">
                <label for="telephone"><h1>Telephone</h1></label>
                <input type="text" name="telephone" id="telephone" placeholder="xx-xxx-xx-xx">
               
            </div>

            <div class="l1">
                <label for="email"><h1>Email</h1></label>
                <input type="text" name="email" placeholder="xxxxx@gmail.com"><br>
            <div>

            <input type="submit" id="Enregistrer" name="validation">
        </form><br><br>
        
        </div >
            <a href="tablo.php" class="tablo">Le tableau</a>
        </div>
      </header>  
</body>
</html>