<?php
$month = 'mois';
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8"/>
  <title>ex1 partie3 php</title>
</head>
<body>
  <form action="{$_SERVER['PHP_SELF']}" method="post" name="monform" id="month">
</form>
  <p>
    <?php
//@param   Array   $month   liste des mois en fçais
    $month = array(
      1 =>'janvier',
      2 => 'février',
      3 =>'mars',
      4 => 'avril',
      5 => 'mai',
      6 => 'juin',
      7 => 'juillet',
      8 => 'aout',
      9 => 'septembre',
      10 => 'octobre',
      11 => 'novembre',
      12 => 'decembre');
    ?>
  </p>
</body>
</html>
