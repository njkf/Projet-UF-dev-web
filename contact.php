 <?php
  session_start();
 ?>
  <div>
       <?php if(array_key_exists('errors',$_SESSION)): ?>
  <div>
       <?= implode('<br>', $_SESSION['errors']); ?>
  </div>
  <?php endif; ?>
  <?php if(array_key_exists('success',$_SESSION)): ?>
  <div>
       Votre email à bien été transmis !
  </div>
  <?php endif; ?>
<form action="verif_contact.php" method="post">
  <div>
<div>
  <div>
       <label for="inputname">Votre nom</label> <br>
       <input required type="text" name="name" id="inputname" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">
  </div>
  </div>
<div >
  <div>
       <label for="inputemail">Votre email</label> <br>
       <input required type="email" name="email" id="inputemail" value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">
  </div>
  </div>
<div>
  <div>
       <label for="inputmessage">Votre message</label> <br>
       <textarea required id="inputmessage" name="message"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea> <br>
  </div>
  </div>

<div >
  <button type='submit'>Envoyer</button>
</div>
</div>
</form>
</div>	
<?php
unset($_SESSION['inputs']); // on nettoie les données précédentes
  unset($_SESSION['success']);
  unset($_SESSION['errors']);
?>