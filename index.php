<?php
  $good = 20;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6/3</title>
  </head>
  <body>
    <p>
      <?php
        while ($good > 0) {
          $good--;
          echo 'C\'est presque bon';
        }
      ?>
    </p>
  </body>
</html>
