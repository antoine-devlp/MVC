<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/style.css">
  <title>Projet ABI</title>
</head>
<body>
  <header>
    <h1>ABI informatique</h1>
    <nav>
        <a href='./index.php'>Homepage</a>
    </nav>
  </header>
<main>
  <?php 
  if(isset($_GET['entity']) && ($_GET['entity'] == 'client' || $_GET['entity'] == 'projet')){
    echo '<h2> Vous êtes sur la page: '.$_GET['entity'].'</h2>';
  } else if(!isset($_GET['entity'])){
    echo '<h2>Page d\'acceuil</h2>';
  } else {
    echo '<h2> Page non trouvable</h2>';
  }
  ?>