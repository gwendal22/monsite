<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Gwendal Richomme</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="Breizh_Dalek" content="SitePoint">

  <link rel="stylesheet" href="./css/Site.css?v=1.0">

</head>

<body id="Minichat_post">

<?php

if (isset($_POST['name']) AND isset($_POST['message'])) // Si les variables existent
{
   if ($_POST['name'] != NULL AND $_POST['message'] != NULL) // Si on a quelque chose à enregistrer
   {
   $name = $_POST['name'];
   $message = $_POST['message'];
  try
  {
      $bdd = new PDO('mysql:host=localhost;dbname=mon site;charset=utf8', 'root', '');
    }
    catch(Exception $e)
    {
          die('Erreur : '.$e->getMessage());
        }

        $donnees = $bdd->prepare('INSERT INTO chatmembers(ID, Username, Message) VALUES("", :nom, :message)');
        $donnees->execute(array(
          'nom' => $name,
          'message' => $message
        ));

        echo 'Message sent';

        header('Location: minichat.php');
}
else
{
  echo 'No message';
  header('Location: minichat.php');
}
}
else
{
  echo 'No message';
  header('Location: minichat.php');
}
?>


</body>
</html>
