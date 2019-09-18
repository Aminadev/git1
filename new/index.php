<?php
 $fichier=file('text.txt');
        $ndl= count($fichier);
        $dl=$fichier [$ndl-1];
        $mat=explode('',$dl);
        $matricule=$mat[0];
        if ($matricule== ''){
            $matricule="EM-".sprintf("%05d", 1);
        }
        else{
            $matricule ++;
        }

        $fichier= fopen('text.txt', 'a+');
        $texte="$matricule \n";
        fwrite($fichier,$texte);
        fclose ($fichier); 
        
        if(isset($_POST['validation']))
        {
/*recupere la matricule seulement*/  
        if(!empty($_POST['matricule'])){  
            $matricule=$_POST['matricule'];
        }
        }

        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=form, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <label for="matricule">Matricule</label>
    <input type="text" placeholder="<?php echo "$matricule"?>" disabled>
    <input type="button" value="valider" name="validation">
    </form>

</body>
</html>

