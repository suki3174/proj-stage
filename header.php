<?php
require 'functions.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <?php if ($title=='Evenements'){echo '<link rel="stylesheet" href="eventstyle.css">';}?>
   <?php if ($title=='contact') {echo '<link rel="stylesheet" href="contactstyle.css">';}?>
   <?php if ($title=='Accueil'){echo '<link rel="stylesheet" href="indexstyle.css">';}?>
   <link rel="stylesheet" href="loaderstyle.css">
   <link rel="stylesheet" href="footerstyle.css">
    <?php require 'navstyle.php' ?>
    
    
    <title><?php titre($title) ?></title>

</head>

<body>
    <?php require 'loader.php';?>
    <nav class="nav">
        <div class="container" >
            <div class="logo">
                <a href="#"><img src="logo-Startup-village.png" alt="" style="position:absolute; top:0px"></a>
            </div>
            <div id="mainListDiv" class="main_list"  >
                <ul class="navlinks" style="position:absolute; top:0px; left:800px;" >
                    <?php
                    echo active('/index.php', 'Accueil');
                    echo active('/art.php', 'Art');
                    echo active('/events.php', 'Evenements');
                    echo active('/contact.php','Contact');
                     ?>
                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>

    <section class="home">
    </section>



   