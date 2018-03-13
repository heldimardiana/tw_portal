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

$route['default_controller'] 	= "login/c_login";
$route['login'] 				= "login/c_login";
$route['verify_login'] 			= "login/c_login/verify_login";
$route['logout'] 				= "login/c_login/logout";


$route['dashboard'] 			= "dashboard/c_dashboard";


$route['upload_doc'] 			= "upload_doc/c_upload_doc";
$route['save_upload'] 			= "upload_doc/c_upload_doc/save_upload";

$route['users'] 				= "users/c_users";
$route['save_add_user'] 		= "users/c_users/save_add_user";
$route['delete_user/(:any)'] 	= "users/c_users/delete_user/$1";
$route['edit_user/(:any)'] 		= "users/c_users/edit_user/$1";
$route['save_edit_user'] 		= "users/c_users/save_edit_user";



$route['billing_doc'] 			= "document/c_document";
$route['opera_doc'] 			= "document/c_document/opera_doc";
$route['sys_doc'] 				= "document/c_document/sys_doc";
$route['share_file_sys/(:any)'] = "document/c_document/share_file_sys/$1";
$route['share_file_bill/(:any)'] = "document/c_document/share_file_bill/$1";
$route['share_file_opera/(:any)'] = "document/c_document/share_file_opera/$1";

$route['share_document_sys'] 	= "document/c_document/share_document_sys";
$route['share_document_bill'] 	= "document/c_document/share_document_bill";
$route['share_document_opera'] 	= "document/c_document/share_document_opera";
$route['download_file/(:any)'] 	= "document/c_document/download_file/$1";


/*
$route['see_history/(:any)'] = "dashboard/c_dashboard/see_history/$1";
*/


/* End of file routes.php */
/* Location: ./application/config/routes.php */
