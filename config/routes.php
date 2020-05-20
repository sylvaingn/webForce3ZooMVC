<?php

use App\Model\Animal;
use Bramus\Router\Router;

require __DIR__ . '/vendor/autoload.php';
/* require __DIR__ . '/config/config.php'; */




$animal = new Animal;



$router = new Router();
$router->setNamespace("App\Controller");

$router->get('/conditions', function () {
    echo "Voici les conditions d'utilisation.";
});

$router->get('/animaux', 'AnimalController@index');
$router->get('/animaux/(\w+)', 'AnimalController@show');

$router->get('/zoos', 'ZooController@index');
$router->get('/zoos/(\w+)', 'ZooController@show');

$router->get('/animalzoo', 'AnimalZooController@index');


$router->get('/articles', 'ArticlesController@index');
$router->get('/articles/{id}', 'ArticlesController@show');








$router->get('/articles/{id}', function (int $id) {
    
    echo "Voici l'article numéro ".$id.".";
});

$router->get('/product/{component}', function ($component) {
    
    echo "Voici le produit demandé : ".$component.".";
});



$router->run();




?>

