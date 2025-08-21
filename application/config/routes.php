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
|	https://codeigniter.com/userguide3/general/routing.html
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


//Documented Information
//revision
$route['admin/revisiondetails/(:num)/(:num)'] = 'admin/revisions/details/$1/$2';
$route['admin/loadrevision/(:num)/(:num)'] = 'admin/revisions/getRevision/$1/$2';

//files
$route['admin/filedetails/(:num)/(:num)'] = 'admin/files/details/$1/$2';
$route['admin/loadfile/(:num)/(:num)'] = 'admin/files/getfile/$1/$2';


//file Details Page
$route['admin/filerevisiondetails/(:num)'] = 'admin/filedetails/details/$1';
$route['admin/loadfilerevision/(:num)'] = 'admin/filedetails/getFileRevision/$1';

//published
$route['admin/allPublished/(:num)/(:num)/(:num)(/(:num))?'] = 'admin/published/details/$1/$2/$3/$4';

$route['admin/portal/(:num)/(:num)/(:num)/(:num)'] = 'admin/published/portal/$1/$2/$3/$4';
$route['admin/portal/file/(:num)/(:num)/(:num)'] = 'admin/filedetails/portalDetails/$1/$2/$3';

// IQMS API (backend only, views remain static)
$route['admin/iqms-data/ensure'] = 'admin/IqmsApi/ensure_analysis';
$route['admin/iqms-data/list']   = 'admin/IqmsApi/list';
$route['admin/iqms-data/save']   = 'admin/IqmsApi/save';
$route['admin/iqms-data/delete'] = 'admin/IqmsApi/delete';
$route['admin/iqms-data/export'] = 'admin/IqmsApi/export_csv';
$route['admin/iqms-data/children'] = 'admin/IqmsApi/children';
$route['admin/iqms-data/delete-children'] = 'admin/IqmsApi/delete_children';
$route['admin/iqms-data/ensure-category'] = 'admin/IqmsApi/ensure_category';

$route['admin/iqms-data/categories'] = 'admin/IqmsApi/categories';
