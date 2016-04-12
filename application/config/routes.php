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

$route['default_controller'] = "welcome";
$route['404_override'] = '';

//Route for admin url using with HMVC structure
$route['manager/([a-zA-Z_-]+)/(:any)'] = '$1/manager/$2';
$route['manager/login'] = 'auth/login';
$route['manager/logout'] = 'auth/logout';
$route['manager/([a-zA-Z_-]+)'] = '$1/manager/index';
$route['manager'] = 'dashboard';

//$route['m-banner'] = 'banner/index/$1';

/* Page */
$route['page/(:any)'] = 'page/index/$1';
$route['introduction'] = 'page/introduction/$1';
$route['promotion'] = 'page/promotion/$1';
$route['quality'] = 'page/quality/$1';
$route['distributary'] = 'page/distributary/$1';
$route['career'] = 'page/career/$1';
$route['client-say'] = 'page/client_say';
$route['hoi-dap'] = 'page/faq';
$route['lien-he'] = 'page/contact';
$route['tuyen-dung'] = 'page/job';
$route['tuyen-dung/(:num)'] = 'page/job/$1';

/*$route['tai-sao-chon-tam-diem'] = 'page/whychooseTD/$1';
$route['tai-sao-chon-tam-diem/(:any)'] = 'page/index/$1';*/

$route['dich-vu'] = 'service/index';
$route['dich-vu/([a-zA-Z0-9_-]+)'] = 'service/item/$1';

$route['tin-tuc'] = 'news/index';
$route['tin-tuc/([a-zA-Z0-9_-]+)'] = 'news/detail/$1';
$route['danh-muc-tin/(:any)'] = 'news/category/$1/$2';

$route['san-pham/(:any)'] = 'service/product/$1';

// Search page
$route['tim-kiem'] = 'page/search';

/* End of file routes.php */
/* Location: ./application/config/routes.php */