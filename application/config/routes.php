<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'Base';

$route['404_override'] = 'Base/errorPage';

$route['translate_uri_dashes'] = FALSE;

$route['about-us'] = 'Base/aboutus';
$route['team'] = 'Base/team';
$route['projects'] = 'Base/portfolio';
$route['project/(:any)'] = 'Base/project/$1';
$route['projectdetails'] = 'Base/projectdetails';
$route['career'] = 'Base/career';
$route['contact-us'] = 'Base/contactUs';
$route[''] = 'Base/';
$route[''] = 'Base/';
$route[''] = 'Base/';
$route[''] = 'Base/';
$route[''] = 'Base/';
$route[''] = 'Base/';
$route[''] = 'Base/';


// backend routes

$route['dashboard'] = 'admin/dashboard';
$route['projectsList'] = 'admin/projects';
$route['addproject'] = 'admin/addproject';
$route['editProject/(:any)'] = 'admin/editProject/$1';
$route['addproject_process'] = 'admin/addproject_process';
$route['editProject_process/(:any)'] = 'admin/editProject_process/$1';
$route['pages-faq'] = 'Admin/pagesfaq';
$route['pages-login'] = 'Admin/pageslogin';
$route['logout'] = 'Admin/logout';

// backend routes
