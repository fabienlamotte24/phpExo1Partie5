<?php
/*Création du tableau avec les douze mois en Anglais*/
  $months = array ('January','February','march','april','may','june','july','august','september','october','november','december');
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 1</title>
  </head>
  <body>
    <p>
<?php
/*Affichage du troisieme mois. 2 est la troisieme position (0 - 1 - 2)*/
  echo $months[2];
?>
    </p>
  </body>
</html>
