<?php
$title='Evenements';
$imgurl='images/terrase4.jpg';

require 'header.php';
require 'testevent.php'
?>
<div class="bodye">
 <div class="container" >
  <div class="card-group vgr-cards" >
    <?php event($file)?>
   
  </div>
</div> 
</div>
<?php require 'footer.php'?>