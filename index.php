<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require necessary files
require_once('vendor/autoload.php');
require_once('model/data-layer.php');

//Instantiate Fat-Free
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function($f3) {

    //save variables
    $f3->set('username', 'jshmo');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'Working with Templates');
    $f3->set('ftemp', 67);
    $f3->set('veg', array('carrot', 'potato', 'bok choy'));
    $f3->set('fruits', getFruit());
    $f3->set('salaries', getSalary());
    $f3->set('num', 10);
    $f3->set('preferredCustomer', true);
    //$f3->set('myPet', new Pet('Fido'));

    //echo "Home page";
    //Display a view
    $view = new Template();
    echo $view->render('views/info.html');
});

//Run Fat-Free
$f3->run();