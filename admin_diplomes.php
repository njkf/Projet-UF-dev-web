<html>
<head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="css/style_admin.css" media="screen" type="text/css" />
</head>
<body>

<div id="container_admin">
<div>
<form id="formulaire diplome 1" method="POST">
    <label> diplôme 1 : </label><br>

    <textarea name="datedip" rows="4" placeholder="date du diplôme"></textarea>   <br>
    <input type="submit" name="modifdatedip" value="Envoyer" />
<br><br>
    <textarea name="titredip" rows="4" placeholder="titre du diplôme"></textarea>   <br>
    <input type="submit" name="modiftitredip" value="Envoyer" />
<br><br>
    <textarea name="descriptiondip" rows="4" placeholder="description du diplôme"></textarea>   <br>
    <input type="submit" name="modifdescriptiondip" value="Envoyer" />
</form>
</div>

<div>
<form id="formulaire diplome 2" method="POST">
    <label>diplôme 2 : </label><br>

    <textarea name="datedip" rows="4" placeholder="date du diplôme"></textarea>   <br>
    <input type="submit" name="modifdatedip" value="Envoyer" />
<br><br>
    <textarea name="titredip" rows="4" placeholder="titre du diplôme"></textarea>   <br>
    <input type="submit" name="modiftitredip" value="Envoyer" />
<br><br>
    <textarea name="descriptiondip" rows="4" placeholder="description du diplôme"></textarea>   <br>
    <input type="submit" name="modifdescriptiondip" value="Envoyer" />
</form>
</div>

<div>
<form id="formulaire diplome 3" method="POST">
    <label>diplôme 3 : </label><br>

    <textarea name="datedip" rows="4" placeholder="date du diplôme"></textarea>   <br>
    <input type="submit" name="modifdatedip" value="Envoyer" />
<br><br>
    <textarea name="titredip" rows="4" placeholder="titre du diplôme"></textarea>   <br>
    <input type="submit" name="modiftitredip" value="Envoyer" />
<br><br>
    <textarea name="descriptiondip" rows="4" placeholder="description du diplôme"></textarea>   <br>
    <input type="submit" name="modifdescriptiondip" value="Envoyer" />
</form>
</div>
</div>

<?php   
$bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
$reponse = $bdd->query('SELECT * FROM diplomes');
if(isset($_POST['datedip']) && isset($_POST['modifdatedip'])) {
  $newdatedip = $bdd->prepare("
  UPDATE diplomes
  SET 
  datedip = '".addslashes($_POST['datedip'])."'
  WHERE id = 1
  ");
$newdatedip->execute();
  }

if(isset($_POST['titredip']) && isset($_POST['modiftitredip'])) {
  $newtitredip = $bdd->prepare("
  UPDATE diplomes
  SET 
  titredip = '".addslashes($_POST['titredip'])."'
  WHERE id = 1
  ");
$newtitredip->execute();
  }

if(isset($_POST['datedip']) && isset($_POST['modifdatedip'])) {
  $newdatedip = $bdd->prepare("
  UPDATE diplomes
  SET 
  datedip = '".addslashes($_POST['datedip'])."'
  WHERE id = 2
  ");
$newdatedip->execute();
  }

if(isset($_POST['titredip']) && isset($_POST['modiftitredip'])) {
  $newtitredip = $bdd->prepare("
  UPDATE diplomes
  SET 
  titredip = '".addslashes($_POST['titredip'])."'
  WHERE id = 2
  ");
$newtitredip->execute();
  }

if(isset($_POST['datedip']) && isset($_POST['modifdatedip'])) {
  $newdatedip = $bdd->prepare("
  UPDATE diplomes
  SET 
  datedip = '".addslashes($_POST['datedip'])."'
  WHERE id = 3
  ");
$newdatedip->execute();
  }

if(isset($_POST['titredip']) && isset($_POST['modiftitredip'])) {
  $newtitredip = $bdd->prepare("
  UPDATE diplomes
  SET 
  titredip = '".addslashes($_POST['titredip'])."'
  WHERE id = 3
  ");
$newtitredip->execute();
  }
?>

<a href="admin.php"> <input type="submit" id='retour' value='RETOUR' > </a>
<a href=""> <input type="submit" id='ajouter' value='AJOUTER' > </a>
<a href=""> <input type="submit" id='supprimer' value='SUPPRIMER' > </a>


</body>
</html>	