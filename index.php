<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'flight/flight/Flight.php';

require_once 'ipsp-php/autoload.php';

Flight::set('flight.views.path', 'templates');
Flight::set('layout','layout/default');

Flight::set('appname','IPSP PHP Examples');
Flight::set('apptitle','Api');

Flight::register('ipsp','Ipsp_Api',array( new Ipsp_Client(1000,'test') ) );

Flight::map('output', function( $content = NULL ){
    Flight::view()->set('ipsp',Flight::ipsp());
    Flight::render( $content , array() , 'content');
    Flight::render(Flight::get('layout'));
});

Flight::route('/', function(){
    Flight::output('pages/frontpage');
});

Flight::route('/page/@page(/@order_id)', function($page='notfound',$order_id=NULL){
    Flight::view()->set('order_id',$order_id);
    Flight::output(sprintf('pages/%s',$page));
});

Flight::start();