<html>
    <head>
        <meta charset="utf-8">
  
    </head>
    <body>

<form id="formulaire" method="POST">
    <label>A Propos de moi :</label><br>

    <textarea name="desciption" rows="4" placeholder="Ecrivez ici :"></textarea>   <br>
    <input type="submit" name="modifdesciption" value="Envoyer" />
</form>

<?php   
$bdd = new PDO('mysql:host=julesvenzkjules.mysql.db;dbname=julesvenzkjules;charset=utf8', 'julesvenzkjules', '15541554Jv');
$reponse = $bdd->query('SELECT * FROM profil');
if(isset($_POST['desciption']) && isset($_POST['modifdesciption'])) {
  $newmoi = $bdd->prepare("
  UPDATE profil
  SET 
  desciption = '".addslashes($_POST['desciption'])."'
  ");
$newmoi->execute();
  }
?>

<a href="admin_exp_pro.php"> <input type="submit" id='admin_exp_pro' value='modifier experiences pro'> </a> 
<a href="admin_diplomes.php"> <input type="submit" id='admin_diplomes' value='modifier diplomes'> </a> 
<a href="admin_competences.php"> <input type="submit" id='admin_competences' value='modifier competences'> </a>


    </body>
</html>	