<?php
/*declaration des variables*/
  $nombre1=$_POST["nombre1"];
  $nombre2=$_POST["nombre2"];
  $operateur=$_POST["operateur"];
if (ctype_digit($nombre1) && ctype_digit($nombre2))
{
    if ($operateur=="+"){
        $resultat=$nombre1+$nombre2;   
    }
    if ($operateur=="-"){
        $resultat=$nombre1-$nombre2;   
    }
    if ($operateur=="/"){
        if($resultat!= 0){
          $resultat=$nombre1/$nombre2;   
        }
        else{
            $resultat="ATTENTION! Le denominateur ne doit pas etre nul!";
        }
    }
    if ($operateur=="*"){
        $resultat=$nombre1*$nombre2;   
    }
    if ($operateur=="%"){
        $resultat=$nombre1%$nombre2;   
    }
}
else{
    $resultat="veuillez saisir un entier svp!";
}
?>

<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="index.css">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="index.php">
        <div class="bloc">
            <div class="col1">  
                <label for="nombre1">Nombre1</label>
                <input class="lign" type="text" name="nombre1" id="nombre1" placeholder="nombre1" required><br><br>
                <label for="nombre2">Nombre2</label>
                <input class="lign" type="text" name="nombre2" id="nombre2" placeholder="nombre2" required> <br><br>
                <label for="operateur">Operateur</label>
                <select name="operateur" id="operateur">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="/">/</option>
                    <option value="*">x</option>  
                    <option value="%">modulo</option>
                </select><br>
                <input class="input1" type="submit" value="Calculer" placeholder="+">
                <div>
                    <div class="text" placeholder="Le Resultat"><br><br>
                        <?php
                            if (isset($resultat)){
                                echo  $resultat;
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
</form>

</body>
</html>
