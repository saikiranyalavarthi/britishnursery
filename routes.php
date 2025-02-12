<?php
require_once 'core/Router.php';
require_once 'core/Locale.php';
$dbConfig = require_once 'config.php';
// Create the Router instance
if ($dbConfig['db_in_use'] == true) {
    $router = new Router($dbConfig);
} else {
    $router = new Router();
}

// Define routes 
$router->addRoute('/', 'HomeController@index');
$router->addRoute('/about', 'AboutController@index');
$router->addRoute('/blog', 'BlogController@index');
$router->addRoute('/gallery', 'GalleryController@index');
$router->addRoute('/corporates', 'CorporatesController@index');
$router->addRoute('/contact', 'ContactController@index');
$router->addRoute('/admin', 'AdminController@index');
$router->addRoute('/admin/profile', 'AdminController@profile');
$router->addRoute('/admin/settings', 'AdminController@settings');
$router->addRoute('/admin/login', 'AdminController@login');
$router->addRoute('/admin/logout', 'AdminController@logout');

// Blog Posts 
$router->addRoute('/blog/why-is-early-childhood-education-important', 'BlogController@post01');
$router->addRoute('/blog/how-to-prepare-your-child-for-nursery', 'BlogController@post02');
$router->addRoute('/blog/nourishing-little-minds-and-bodies', 'BlogController@post03');
