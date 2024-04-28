<?php
require '../../flight/Flight.php';

// tell Flight where our classes are
Flight::path(__DIR__ . '/../../src/');


// set up some routes
Flight::route('/', function(){
    echo 'hello world!';
    $controller = new Controller();
    $controller->run();
});

Flight::route('/hello', array('Acme\Controller', 'hello'));


// run
Flight::start();
