<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Gwendal Richomme</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="Breizh_Dalek" content="SitePoint">

  <link rel="stylesheet" href="./css/Site.css?v=1.0">

</head>

<body id="Minichat">


  <div class="Formular">

    <h1>Minichat</h1>

    <form method="post" action="minichat_post.php">
      <p>

        Username:<input type="text" name="name" placeholder="Username" /></br>
        Message: <input type="textarea" name="message" rows="8" cols="45" placeholder="Your message"/></br>
        <input type="submit" value="send"/></br>


      </p>
    </form>

    <?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=mon site;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
      catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }
    $elements_minichat = $bdd->query('SELECT * FROM chatmembers ORDER BY ID DESC LIMIT 0,10 ');
    while ($messages_affiches = $elements_minichat->fetch())
    {
      echo "<p><strong>".htmlspecialchars($messages_affiches['Username'])."</strong></br>".htmlspecialchars($messages_affiches['Message'])."</p>";
      // echo .htmlspecialchars($messages_affiches['name'])..htmlspecialchars($messages_affiches['message']);
    }
    // $elements_minichat->closeCursor();
    ?>
  </div>
</body>
</html>
