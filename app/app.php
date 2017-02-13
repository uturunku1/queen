<?php
    date_default_timezone_get('America/Los_Angeles');
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Queen.php';

    $app= new Silex\Application();

    $app->register(new Silex\Provider\twigServiceProvider(), array('twig.path'=> __DIR__.'/../views'));
    $app['debug']= true;

    $app->get('/', function() use($app){
        return $app['twig']->render('index.html.twig');

    });

    return $app;

 ?>
