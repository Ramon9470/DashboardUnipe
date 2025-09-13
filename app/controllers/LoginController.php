<?php

class LoginController {
    public function index() {
        $title = "Login";
        require __DIR__ . '/../views/Login/index.php';
    }
}
