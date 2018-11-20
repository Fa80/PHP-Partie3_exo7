<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie3_Exo7</title>
</head>
<body>

    <?php
//En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.

        $number = 1;
        while($number <=100){ ?>
          <?php $number = $number + 15; ?>
            <p><?php echo $number . " On tient le bon bout ";
        }
?></p>
</body>
</html>
