<?php 
  session_start();
  $historic = [];
  $name = '';

  if(isset($_GET['erased'])) :
    session_destroy();
    header("location:input.php");
    exit;
  endif;

  if(isset($_SESSION['historic'])) :
    $historic = $_SESSION['historic'];
  endif;

  if(isset($_GET['name']) AND $_GET['name'] != '') :
    $_SESSION['historic'][] = $_GET['name']." ".$_GET['surname'];
    $historic = $_SESSION['historic'];
    $name = $_GET['name'];
    header("location:input.php"); //set an header to "hide" arguments
    exit; //get out of script
  endif;

  //isset = is setted ? = is something existing is this variable
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form PHP</title>
</head>
<body>
<pre>
<?php 
  //phpinfo();
  print_r($name)
?>
</pre>
  <h1>Présentations</h1>
  <form action="input.php" method="get">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="surname" placeholder="Surname">
    <button>Envoyer</button>
  </form>

  <?php  if(isset($name)) :?>
    <p>Bonjour <?php echo $name; ?></p>
  <?php endif;?>

  <h2>Historique des passages</h2>
  <?php if( count($historic) > 0 ):?>
    <ol>
    <?php foreach($historic as $index => $entry) :?>
      <li id="<?php echo $index; ?>"><?php echo $entry; ?></li>
    <?php endforeach; ?>
    </ol>
  <?php endif; ?>
    <a href="input.php?erased">Effacer l'historique</a>
</body>
</html>
<!-- <pre>
<?php 
  //phpinfo();
  print_r($historic)
?>
</pre> -->