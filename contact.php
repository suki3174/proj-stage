<?
$title = 'contact';
$imgurl = 'images/contactbg2.jpg';
require 'header.php'; ?>
<div class="body">
  <div class="contact-us">
    <form action="mail.php" method="POST" class="form-container">
      <div class="input-container">
        <input placeholder="Nom" type="text" required="">
        <input placeholder="Email" type="email" name="email" required>
        <input placeholder="Téléphone" type="tel">
      </div>
      
      <div class="textarea-container" >
      <input type="text" placeholder="Subject" name="subject" required>
        <textarea name="message" id="message" cols="30" placeholder="Message" class="textarea" rows="5" required></textarea>
      </div>
      <button type="submit" name="send">ENVOYER</button>
    </form>
  </div>
</div>



<?php require 'footer.php';
