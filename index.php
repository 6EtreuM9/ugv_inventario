<?php
    //Include composer
    require_once __DIR__.'/vendor/autoload.php';
    
    use EasyProjects\SimpleRouter\Router as Router;
    use EasyProjects\SimpleRouter\Request as Request;
    use EasyProjects\SimpleRouter\Response as Response;

    $router = new Router;
    
    //If you need allow petitions from javascript, use
    $router->cors(
        ["easyprojects.tech", "google.com"],
        "*",
        "*"
    );
