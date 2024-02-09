<?php
$title='Visite';
$imgurl='images/video.jpeg';
require 'header.php'
?>
<div style="width: 1325px;
   margin: 10px;">
    <video autoplay loop muted id="myVideo">
      <source src="video.mp4" type="video/mp4" mute>
      Your browser does not support the video tag.
    </video>
  </div>
  

  <?php require 'footer.php'?>