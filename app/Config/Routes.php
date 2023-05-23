<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

if(file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->get('/', 'Pages::index');


// $routes->get('/coba/index', 'Coba::index');
// $routes->get('/coba/about', 'Coba::about');
// $routes->get('/coba/(:any)', 'Coba::about/$1');

// $routes->get('/users', 'Admin\Users::index');


$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
//Codeigniter ini akan membuat jalur ketika ada akses yang metode requestnya get
//ketika mengetikkan sesuatu di url
//alamatnya adalah (/ = slash)
//slash artinya rute (url utama / base url)
//dalam hal ini localhost:8080
//kalau ada yg akses ke halaman rute, arahkan ke controller Home, lalu Methodenya Index
//Secara default yang tampil adalah Controller Home dan Methodenya Index
//FILE nya ada di "app", lalu "Controllers" didalamnya ada file "Home.php"
//Controller Home berasosiasi / nyambung ke file "home.php"
//ketika file "home.php" dibuka --> routesnya mengarah ke controller home, dan methodenya index
//nah ketika methode index dipanggil, yg terjadi methode akan menjalankan atau mengembalikkan view.
//return view yg didalamnya terdapat parameter 'welcome_message' = artinya ci akan memanggil sebuah file yang ..
//namanya welcome_message.php didalam folder view
//ada di dalam folder "app" --> cari folder "Views" --> didalamnya pasti ada welcome_message.php yang membuat tampilan Welcome to CodeIgniter pada laman localhost:8080
$routes->get('/', 'Pages::index');

//clossure
// $routes->get('/coba', function(){
//     echo 'Hello World!';
// });
// public bool $autoRoutesImproved = true;
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}