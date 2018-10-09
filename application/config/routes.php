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
$route['default_controller'] = 'user_authentication';
$route['404_override'] = '';
$route['user/login_process'] = 'user_authentication/user_login_process';
$route['user/logout'] = 'user_authentication/logout_process';
$route['user/forgot_password'] = 'user_authentication/forgot_form_show';
$route['user/login'] = 'user_authentication/login_form_show';
$route['user/confirm_process'] = 'user_authentication/email_confirm';
$route['user/four'] = 'user_authentication/viewpersonalinfo';
$route['user/third'] = 'user_authentication/viewtranscripts';
$route['user/first'] = 'user_authentication/viewclasses';
$route['user/second'] = 'user_authentication/viewtransactions';
$route['user/five'] = 'user_authentication/viewawardsandcharges';
$route['user/five/(:any)'] = 'user_authentication/viewawardsandcharges1/$1';

$route['user/six'] = 'user_authentication/viewfinancialaid';
$route['user/six2'] = 'user_authentication/viewfinancialaid2';
$route['user/adm'] = 'user_authentication/viewadmissionsatus';
$route['user/admfix'] = 'user_authentication/viewadmissionfix';
$route['user/admfix1/(:any)'] = "user_authentication/viewadmissionfix1/$1";
$route['user/admsend'] = "user_authentication/send_admmail";
$route['user/six/(:any)'] = 'user_authentication/viewfinancialaid1/$1';
$route['user/seven'] = 'user_authentication/viewdocs';
$route['user/eight/(:any)'] = "user_authentication/download/$1";
$route['user/every/(:any)'] = "user_authentication/download1/$1";
$route['user/nine/(:any)'] = "user_authentication/viewwebresponse/$1";
$route['user/eleven/(:any)'] = "user_authentication/viewwebresponse1/$1";
$route['user/ten'] = "user_authentication/send_mail";
$route['user/newpass/(:any)'] = 'user_authentication/sendpassword/$1';
$route['user/nps/(:any)'] = 'user_authentication/change_password/$1';
$route['user/change_process'] = 'user_authentication/password_change';

$route['user/first_login_process'] = 'user_authentication/first_password_change';







