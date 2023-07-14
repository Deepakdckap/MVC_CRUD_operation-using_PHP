<?php

require 'controllers/UserController.php';
class Router
{
    public $routes = [];
    public $controller;

    public function __construct()
    {
        $this->controller = new UserController();
    }

    public function get($uri,$action)
    {
        $this->routes[] = [
            'uri' => $uri,  
            'action' => $action,
            'method' => 'GET'
        ];
    }

    public function post($uri,$action)
    {
        $this->routes[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function put($uri,$action)
    {
        $this->routes[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function delete($uri,$action)
    {
        $this->routes[] = [
            'uri' => $uri,
            'action' => $action,
            'method' => 'POST'
        ];
    }

    public function only($uri, $method)
    {
        foreach ($this->routes as $route)
        {
            if ($route['uri'] === $uri && $route['method'] === $method)
            {
                $action = $route['action'];
                switch ($action)
                {
                    case 'create':
                        $this->controller->create($_POST);
                        break;
                    case 'list':
                        $this->controller->listOfAllUser();
                        break;
                    case 'delete':
                        $this->controller->delete($_POST['delete']);
                        break;
                    case 'edit':
                        $this->controller->edit($_POST['edit']);
                        break;
                    case 'update':
                        $this->controller->updateUser($_POST);
                        break;
                    default:
                        $this->controller->index();
                        break;
                }
            }
        }
    }
}