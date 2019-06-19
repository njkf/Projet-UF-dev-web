<html>
<head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="css/style_admin.css" media="screen" type="text/css" />
</head>
<body>

<div id="container_admin">
<div>
<form id="formulaire experience 1" method="POST">
    <label>Expérience professionnelle 1 : </label><br>

    <textarea name="dateexp" rows="4" placeholder="date de l'expérience professionnelle"></textarea>   <br>
    <input type="submit" name="modifdateexp" value="Envoyer" />
<br><br>
    <textarea name="titreexp" rows="4" placeholder="titre de l'expérience professionnelle"></textarea>   <br>
    <input type="submit" name="modiftitreexp" value="Envoyer" />
<br><br>
    <textarea name="descriptionexp" rows="4" placeholder="description de l'expérience professionnelle"></textarea>   <br>
    <input type="submit" name="modifdescriptionexp" value="Envoyer" />
</form>
</div>

<div>
<form id="formulaire experience 2" method="POST">
    <label>Expérience professionnelle 2 : </label><br>

    <textarea name="dateexp" rows="4" placeholder="date de l'expérience professionnelle"></textarea>   <br>
    <input type="submit" name="modifdateexp" value="Envoyer" />
<br><br>
    <textarea name="titreexp" rows="4" placeholder="titre de l'expérience professionnelle"></textarea>   <br>
    <input type="submit" name="modiftitreexp" value="Envoyer" />
<br><br>
    <textarea name="descriptionexp" rows="4" placeholder="description de l'expérience professionnelle"></textarea>   <br>
    <input type="submit" name="modifdescriptionexp" value="Envoyer" />
</form>
</div

<div>
<form id="formulaire experience 3" method="POST">
    <label>Expérience professionnelle 3 : </label><br>

    <textarea name="dateexp" rows="4" placeholder="date de l'expérience professionnelle"></textarea>   <br>
    <input type="submit" name="modifdateexp" value="Envoyer" />
<br><br>
    <textarea name="titreexp" rows="4" placeholder="titre de l'expérience professionnelle"></textarea>   <br>
    <input type="submit" name="modiftitreexp" value="Envoyer" />
<br><br>
    <textarea name="descriptionexp" rows="4" placeholder="description de l'expérience professionnelle"></textarea>   <br>
    <input type="submit" name="modifdescriptionexp" value="Envoyer" />
</form>
</div>

<?php   
$bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
$reponse = $bdd->query('SELECT * FROM Experience_pro');
if(isset($_POST['dateexp']) && isset($_POST['modifdateexp'])) {
  $newdateexp = $bdd->prepare("
  UPDATE Experience_pro
  SET 
  dateexp = '".addslashes($_POST['dateexp'])."'
  WHERE id = 1
  ");
$newdateexp->execute();
  }

if(isset($_POST['titreexp']) && isset($_POST['modiftitreexp'])) {
  $newtitreexp = $bdd->prepare("
  UPDATE Experience_pro
  SET 
  titreexp = '".addslashes($_POST['titreexp'])."'
  WHERE id = 1
  ");
$newtitreexp->execute();
  }

if(isset($_POST['dateexp']) && isset($_POST['modifdateexp'])) {
  $newdateexp = $bdd->prepare("
  UPDATE Experience_pro
  SET 
  dateexp = '".addslashes($_POST['dateexp'])."'
  WHERE id = 2
  ");
$newdateexp->execute();
  }

if(isset($_POST['titreexp']) && isset($_POST['modiftitreexp'])) {
  $newtitreexp = $bdd->prepare("
  UPDATE Experience_pro
  SET 
  titreexp = '".addslashes($_POST['titreexp'])."'
  WHERE id = 2
  ");
$newtitreexp->execute();
  }

if(isset($_POST['dateexp']) && isset($_POST['modifdateexp'])) {
  $newdateexp = $bdd->prepare("
  UPDATE Experience_pro
  SET 
  dateexp = '".addslashes($_POST['dateexp'])."'
  WHERE id = 3
  ");
$newdateexp->execute();
  }

if(isset($_POST['titreexp']) && isset($_POST['modiftitreexp'])) {
  $newtitreexp = $bdd->prepare("
  UPDATE Experience_pro
  SET 
  titreexp = '".addslashes($_POST['titreexp'])."'
  WHERE id = 3
  ");
$newtitreexp->execute();
  }
?>

<a href="admin.php"> <input type="submit" id='retour' value='RETOUR' > </a>
<a href=""> <input type="submit" id='ajouter' value='AJOUTER' > </a>
<a href=""> <input type="submit" id='supprimer' value='SUPPRIMER' > </a>

</body>
</html>