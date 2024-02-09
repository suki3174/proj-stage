<?php
function titre(string $title){
    if (isset($title)){
  echo $title;
    }
  }

  function active(string $link,string $name):string{
    $class=null;
     if ($_SERVER['SCRIPT_NAME']===$link){
       $class='active';}
       return <<<HTML
       <li class="nav-item $class">
           <a  class="nav-link" href="$link">$name</a>
       </li>
   HTML;
   }
   
   