<?php
/**
 * Main Entry Point - Public Directory
 */

// Set error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Load configuration
require_once '../config/config.php';

// Simple Router
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch($page) {
    case 'about':
        $title = 'About Us';
        $view = '../app/views/about.php';
        break;
    case 'contact':
        $title = 'Contact';
        $view = '../app/views/contact.php';
        break;
    default:
        $title = 'Home';
        $view = '../app/views/home.php';
}

// Include header
require_once '../app/views/header.php';

// Include page
if(file_exists($view)) {
    require_once $view;
} else {
    echo '<h1>404 - Page Not Found</h1>';
}

// Include footer
require_once '../app/views/footer.php';
?>