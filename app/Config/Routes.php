<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index');
// $routes->add('/coba', 'Coba::about');
$routes->get('/coba/index','Coba::index');
$routes->get('/coba/(:any)','Coba::about/$1');
$routes->add('/helo',function(){
  echo "hello world";
});
$routes->get('/users','Admin\Users::index');
$routes->get('/komik/(:any)','Komik::detail/$1');
// UPDATE CI 4.4 itu gak bisa akses controller dan method secara langsung mungkin karena alasan keamanan dll.
//jadi harus ditambahakan route manual
$routes->setAutoRoute(true);
