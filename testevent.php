<?php
$file = 'events.csv';
function event($file)
{
  $tab = file($file);
  foreach ($tab as $key => $event) {
    $t = explode(',', $event);
    $a = trim($t[3]);
    if ($key % 2 == 0) {
      echo <<<HTML
    <div class="card" > 
      <div class="card-img-body">
        <img class="card-img" src="$t[2]" alt="Card image cap">
      </div>
      <div class="card-body" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        <div class="text">
          <h4 class="mytitle">$t[0]</h4>
          <p class="mytext">$t[1]</p>
        </div> 
        <a href="$a" class="mybtn1" target="_blank">Voir plus</a>
      </div>
    </div>
HTML;
    } else {
      echo <<<HTML
    <div class="card">
      <div class="card-img-body">
        <img class="card-img" src="$t[2]" alt="Card image cap"></div>
      <div class="card-body" style="box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
        <div class="text">
          <h4 class="mytitle">$t[0]</h4>
          <p class="mytext">$t[1]</p>
        </div>
        <a href="$a" class="mybtn2" target="_blank">Voir plus</a>
      </div>
    </div>
HTML;
    }
  }
}

