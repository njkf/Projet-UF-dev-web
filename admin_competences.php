<html>
<head>
       <meta charset="utf-8">
        <link rel="stylesheet" href="css/style_admin.css" media="screen" type="text/css" />
</head>
<body>

<div id="container_admin">
<div id="gauche">
<form id="formulaire competences" method="POST">
    <label>Competence 1 : </label><br>

    <textarea name="langage" rows="4" placeholder="langage"></textarea>   <br>
    <input type="submit" name="modiflangage" value="Envoyer" />
<br><br>
    <textarea name="note" rows="4" placeholder="note"></textarea>   <br>
    <input type="submit" name="modifnote" value="Envoyer" />
</form>
</div>

<div id="droite">
<form id="formulaire competences" method="POST">
    <label>Compétence 2 : </label><br>

    <textarea name="langage" rows="4" placeholder="langage"></textarea>   <br>
    <input type="submit" name="modiflangage" value="Envoyer" />
<br><br>
    <textarea name="note" rows="4" placeholder="note"></textarea>   <br>
    <input type="submit" name="modifnote" value="Envoyer" />
</form>
</div>

<div>
<form id="formulaire competences" method="POST">
    <label>Compétence 3 : </label><br>

    <textarea name="langage" rows="4" placeholder="langage"></textarea>   <br>
    <input type="submit" name="modiflangage" value="Envoyer" />
<br><br>
    <textarea name="note" rows="4" placeholder="note"></textarea>   <br>
    <input type="submit" name="modifnote" value="Envoyer" />
</form>
</div>

<div>
<form id="formulaire competences" method="POST">
    <label>Compétence 4 : </label><br>

    <textarea name="langage" rows="4" placeholder="langage"></textarea>   <br>
    <input type="submit" name="modiflangage" value="Envoyer" />
<br><br>
    <textarea name="note" rows="4" placeholder="note"></textarea>   <br>
    <input type="submit" name="modifnote" value="Envoyer" />
</form>
</div>

<div>
<form id="formulaire competences" method="POST">
    <label>Compétence 5 : </label><br>

    <textarea name="langage" rows="4" placeholder="langage"></textarea>   <br>
    <input type="submit" name="modiflangage" value="Envoyer" />
<br><br>
    <textarea name="note" rows="4" placeholder="note"></textarea>   <br>
    <input type="submit" name="modifnote" value="Envoyer" />
</form>
</div>

</div>

<?php   
$bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
$reponse = $bdd->query('SELECT * FROM competences');
if(isset($_POST['langage']) && isset($_POST['modiflangage'])) {
  $newlangage = $bdd->prepare("
  UPDATE competences
  SET 
  langage = '".addslashes($_POST['langage'])."'
  WHERE id = 1
  ");
$newlangage->execute();
  }

if(isset($_POST['note']) && isset($_POST['modifnote'])) {
  $newnote = $bdd->prepare("
  UPDATE competences
  SET 
  note = '".addslashes($_POST['note'])."'
  WHERE id = 1
  ");
$newnote->execute();
  }

if(isset($_POST['langage']) && isset($_POST['modiflangage'])) {
  $newlangage = $bdd->prepare("
  UPDATE competences
  SET 
  langage = '".addslashes($_POST['langage'])."'
  WHERE id = 2
  ");
$newlangage->execute();
  }

if(isset($_POST['note']) && isset($_POST['modifnote'])) {
  $newnote = $bdd->prepare("
  UPDATE competences
  SET 
  note= '".addslashes($_POST['note'])."'
  WHERE id = 2
  ");
$newnote->execute();
}

if(isset($_POST['langage']) && isset($_POST['modiflangage'])) {
  $newlangage = $bdd->prepare("
  UPDATE competences
  SET 
  langage = '".addslashes($_POST['langage'])."'
  WHERE id = 3
  ");
$newlangage->execute();
  }

if(isset($_POST['note']) && isset($_POST['modifnote'])) {
  $newnote = $bdd->prepare("
  UPDATE competences
  SET 
  note= '".addslashes($_POST['note'])."'
  WHERE id = 3
  ");
$newnote->execute();
}

if(isset($_POST['langage']) && isset($_POST['modiflangage'])) {
  $newlangage = $bdd->prepare("
  UPDATE competences
  SET 
  langage = '".addslashes($_POST['langage'])."'
  WHERE id = 4
  ");
$newlangage->execute();
  }

if(isset($_POST['note']) && isset($_POST['modifnote'])) {
  $newnote = $bdd->prepare("
  UPDATE competences
  SET 
  note= '".addslashes($_POST['note'])."'
  WHERE id = 4
  ");
$newnote->execute();
}

if(isset($_POST['langage']) && isset($_POST['modiflangage'])) {
  $newlangage = $bdd->prepare("
  UPDATE competences
  SET 
  langage = '".addslashes($_POST['langage'])."'
  WHERE id = 5
  ");
$newlangage->execute();
  }

if(isset($_POST['note']) && isset($_POST['modifnote'])) {
  $newnote = $bdd->prepare("
  UPDATE competences
  SET 
  note= '".addslashes($_POST['note'])."'
  WHERE id = 5
  ");
$newnote->execute();
  }
?>

<a href="admin.php"> <input type="submit" id='retour' value='RETOUR' > </a>
<a href=""> <input type="submit" id='ajouter' value='AJOUTER' > </a>
<a href=""> <input type="submit" id='supprimer' value='SUPPRIMER' > </a>


</body>
</html>	