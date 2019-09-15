<?php

    require_once('HelloWorld.php');

    $lang = empty($_GET['lang']) ? "pt" : $_GET['lang']; 
    echo \Borges\HelloWorld::getMessage($lang);