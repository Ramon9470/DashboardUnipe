<?php

class Router {
    public function run(){
        $page = $_GET['page'] ?? 'home';

        switch ($page) {
            case 'home':
                require_once __DIR__ . '/app/controllers/HomeController.php';
                $controller = new HomeController();
                $controller->index();
                break;
            case 'login':
                require_once __DIR__ . '/app/controllers/LoginController.php';
                $controller = new LoginController();
                $controller->index();
                break;
            
            default:
                http_response_code(404);
                echo "Página não encontrada.";
                break;
        }
    }
}