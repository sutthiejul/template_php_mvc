<?php
/**
 * Home Controller
 */

class HomeController {
    
    public function index() {
        $title = 'Home';
        $message = 'Welcome to PHP MVC Template!';
        
        return [
            'title' => $title,
            'message' => $message
        ];
    }
    
    public function about() {
        $title = 'About';
        $description = 'This is a simple MVC template for PHP.';
        
        return [
            'title' => $title,
            'description' => $description
        ];
    }
}
?>