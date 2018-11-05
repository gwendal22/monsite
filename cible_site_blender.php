<?php
  $Name = $_POST['Name'];
  setcookie('Username', $Name, time()+365*24*60*3600, null, null, false, true);
  setcookie('Password', 'password', time()+365*24*60*3600, null, null, false, true);
  setcookie('Country', 'country', time()+365*24*60*3600, null, null, false, true);
  setcookie('Activity', 'case', time()+365*24*60*3600, null, null, false, true);

  $bdd = new PDO('mysql:host=localhost;dbname=mon site', 'root', 'root');
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Gwendal Richomme</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="Breizh_Dalek" content="SitePoint">

  <link rel="stylesheet" href="./css/Site.css?v=1.0">

</head>

<body>
  <p>Dadoudidou</p>

  <p>Ton nom est <?php echo $_COOKIE['Username']; ?> </p>
</body>


</html>
