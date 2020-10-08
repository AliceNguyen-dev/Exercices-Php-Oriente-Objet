<?php

#Récupération des paramètres GET de l'URl.
$controller = 'App\\Controller\\' . ucfirst($_GET['controller']) . 'Controller';
$action = $_GET['action'];

# Création des objets
//$defaultCtrl = new DefaultController();
//$userCtrl = new UserController();
//$cartCtrl = new CartController();

#Routage AUTOMATIQUE de notre application

//$obj = new $controller(); // defaultController, UserController,...
//$obj->$action(); // home, category, register, ...
call_user_func_array([new $controller, $action], []);


# Routage Marnuel de notre application
// Page Home, Category, Article
/**if($_GET['controller'] == 'default' && $action == 'home') {
$defaultCtrl->home();
}

if($_GET['controller'] == 'default' && $action == 'category') {
$defaultCtrl->category();
}

if($_GET['controller'] == 'default' && $action == 'article') {
$defaultCtrl->article();
}

// Page inscription / connexion

if($_GET['controller'] == 'user' && $action == 'register') {
$userCtrl->register();
}

if($_GET['controller'] == 'user' && $action == 'login') {
$userCtrl->login();
}

// Partie gestion de produits

if ( $controller == 'cart' && $action == 'add' ) {
$cartCtrl->add();
}

if ( $controller == 'cart' && $action == 'remove' ) {
$cartCtrl->remove();
}**/

