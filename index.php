<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'flight/flight/Flight.php';

Flight::set('flight.views.path', 'templates');
Flight::set('layout','layout/default');

Flight::set('appname','IPSP PHP Examples');
Flight::set('apptitle','404 - Page Not Found');

//Flight::register('ipsp','PaymentGateway',array( $merchant ) );

Flight::map('output', function( $content = NULL ){
    Flight::render( $content , Flight::get('params') , 'content');
    Flight::render(
        Flight::get('layout'),
        Flight::get('params')
    );
});

Flight::route('/', function(){
    Flight::output('pages/frontpage');
});

Flight::route('/page/@page', function($page='notfound'){
    Flight::output(sprintf('pages/%s',$page));
});

Flight::route('/page/@page', function($page='notfound'){
    Flight::output(sprintf('pages/%s',$page));
});

Flight::start();