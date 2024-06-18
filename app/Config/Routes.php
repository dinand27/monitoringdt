<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 //bagian Routes GET----------------------------------
$routes->get('/', 'Home_template::index');
$routes->get('/erorpage', 'Home_template::erorpage');
$routes->get('/datatables', 'Datatables::index');
$routes->get('/staf', 'Staf::index');
$routes->get('/kelas', 'Kelas::index');
$routes->get('/jadwal', 'Jadwal::index');
$routes->get('/murid', 'Murid::index');
$routes->get('/depan', 'Depan::index');
$routes->get('/invoice', 'Home_template::erorpage');

// $routes->view('murid/detail', 'murid/detail');

//get Detail:
$routes->get('/murid/(:segment)','Murid::detail/$1' );
// $routes->get('murid/detail', 'Murid::detail');
$routes->get('staf/(:segment)','Staf::detail/$1' );





//bagian menu staff
$routes->get('/staf/kelas', 'Kelas::index');
$routes->get('/staf/jadwal', 'Jadwal::index');
$routes->get('/staf/murid', 'Murid::index');


//bagian Routes POST--------------------------------