<?php
  $courses = array("Potates", "Tomates", "Oranges");
  $user = [
    "nom" => "Jacqmin",
    "prenom" => "Lua",
    "conjoint" => "Samuel Hayen",
    "birth" => "1998-05-30"
  ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP first exercise</title>
</head>
<body>
  <h1>bonjour <?php echo $user["prenom"]." ".$user["nom"]; ?></h1>
  <p>Voici ta liste de courses</p>

  <ol>
    <?php foreach($courses as $index => $element) :?>
      <li id="<?php echo $index; ?>"><?php echo $element; ?></li>
    <?php endforeach;?>
  </ol>
</body>
</html>