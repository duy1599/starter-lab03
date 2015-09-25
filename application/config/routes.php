<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

//Routes to sleep
$route['sleep'] = "First/zzz";
//Routes to lock using wild cards
$route['lock/(:any)/(:any)'] = "Welcome/shucks";
//Routes to show using Regular Expressions
$route['show/(:num)'] = "First/gimme/$1";
//Routes to dunno 
$route['dunno'] = "Guess";
//Routes to 4 characters + /bingo using Regular Expressions
$route['^\w{4}/bingo'] = "Bingo";
//Routes to comp + numbers using Reguar Expressions
$route['comp\d+/(:any)'] = "Bingo/wisdom";

//Routes to welcome if no controller is specified
$route['default_controller'] = "welcome";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */