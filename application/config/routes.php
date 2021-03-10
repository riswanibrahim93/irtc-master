<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// route welcome
$route['sumo-robot'] = 'Welcome/summo';
$route['line-follower'] = 'Welcome/lineFollower';
$route['cinematography'] = 'Welcome/cinematography';
$route['game-development'] = 'Welcome/gameDevelopment';
$route['internetOfThings'] = 'Welcome/internetOfThings';
$route['startupSummit'] = 'Welcome/startupSummit';

// route auth
$route['login'] = 'Authuser/login';
$route['register'] = 'Authuser/register';
$route['verifikasi-akun'] = 'Authuser/verifikasi_akun';
$route['logout'] = 'Authuser/logout';

//route user
$route['dashboard'] = 'UserController/index';
$route['pembayaran'] = 'UserController/pembayaran';
$route['kompetisi'] = 'UserController/kompetisi';
$route['profile'] = 'UserController/profile';
$route['password'] = 'UserController/password';

//route auth admin as panitia
$route['panitia/login'] = 'Authadmin/login';
$route['panitia/logout'] = 'Authadmin/logout';

//route admin as panitia
$route['panitia'] = 'AdminController/index';
$route['panitia/pembayaran'] = 'AdminController/pembayaran';
$route['panitia/pembayaran/process/(:any)/(:num)'] = 'AdminController/prosesPembayaran/$1/$2';
