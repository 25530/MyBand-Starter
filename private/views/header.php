<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>My-Band-Ramsay</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/styl.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" href="css/style.css"/>
</head>
<body>
<header>
            <img src="images/logo.png">
                <div class="dropdown">
                  <button class="dropbtn">Navigatie menu
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="<?php echo url('/')?>">Home</a>
                    <a href="<?php echo url('/agenda')?>">Agenda</a>
                    <a href="<?php echo url('/news')?>">Nieuws</a>
                    <a href="<?php echo url('/contact')?>">Contact</a>
                  </div>
                </div> 
            </header>