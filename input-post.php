<?php 
  session_start();
  $historic = [];

  if(isset($_GET['erased'])) :
    session_destroy();
    header("location:input-post.php");
    exit;
  endif;

  if(isset($_SESSION['historic'])) :
    $historic = $_SESSION['historic'];
  endif;

  if(isset($_POST['name']) AND $_POST['name'] != '') :
    $_SESSION['historic'][] = $_POST['name']." ".$_POST['surname'];
    $historic = $_SESSION['historic'];
    header("location:input-post.php"); //set an header to "hide" arguments
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
  print_r($_POST)
?>
</pre>
  <h1>Présentations</h1>
  <form action="input-post.php" method="POST">
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="surname" placeholder="Surname">
    <button>Envoyer</button>
  </form>

  <?php  if(!isset($_POST['name'])) :?>
    <p>Bonjour <?php echo $_POST['name']?></p>
  <?php endif;?>

  <h2>Historique des passages</h2>
  <?php if( count($historic) > 0 ):?>
    <ol>
    <?php foreach($historic as $index => $entry) :?>
      <li id="<?php echo $index; ?>"><?php echo $entry; ?></li>
    <?php endforeach; ?>
    </ol>
  <?php endif; ?>
    <a href="input-post.php?erased">Effacer l'historique</a>
</body>
</html>
<!-- <pre>
<?php 
  //phpinfo();
  print_r($historic)
?>
</pre> -->