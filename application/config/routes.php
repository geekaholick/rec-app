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
$route['default_controller'] = 'login';
$route['404_override'] = '';

$route['home'] = 'welcome';

$route['users']='user';
$route['add_user']='user/create';
$route['update_user']='user/update';
$route['delete_user']='user/delete';

$route['protocols']='protocols';                                // show protocols -> get_protocol_list
$route['protocol/create']='protocols/create';                   // show create protocol form
$route['protocol/edit/(:num)']='protocols/edit/$1';
$route['protocol/save']='protocols/create_protocol';

$route['get_protocol/(:any)']='protocol/get_protocol';
$route['get_protocol_list']='protocols/get_protocol_list';
$route['protocol/test/(:any)']='protocols/test';

$route['profile']='profile';

$route['login']='login';
$route['login_user'] ='login/login_user';
$route['logout'] ='login/logout';

$route['register']='register';

$route['protocol-review']='application';
$route['protocol-review/detail']='application/application_details';


$route['translate_uri_dashes'] = FALSE;
