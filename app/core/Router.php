<?php
class Router {
    public function run() {
        // Pega o parâmetro 'url' do .htaccess
        $url = $_GET['url'] ?? 'home';
        $url = rtrim($url, '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        
        $urlParts = explode('?', $url);
        $page = $urlParts[0];

        switch ($page) {
            case 'home':
                require_once __DIR__ . '/../../app/controllers/HomeController.php';
                $controller = new HomeController();
                $controller->index();
                break;
                
            case 'login':
                require_once __DIR__ . '/../../app/controllers/LoginController.php';
                $controller = new LoginController();
                $controller->index();
                break;

            case 'logut':
                require_once __DIR__ . '/logout.php';
                $controller = new Logout();
                $controller->index();

            default:
                http_response_code(404);
                echo "Página não encontrada.";
                break;
        }
    }
}