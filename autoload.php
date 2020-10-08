<?php

    # Autochargement des classes
    spl_autoload_register(function ( $class ) {
        $class = str_replace('App', '', $class);
        #echo 'Chargement de : ' . $class . '';
        require_once '../src/' . str_replace('\\', DIRECTORY_SEPARATOR,          $class) . '.php';
    });

    # Chargement des controllers
    #require_once '../src/Controller/DefaultController.php';
    #require_once '../src/Controller/UserController.php';
    #require_once '../src/Controller/CartController.php';