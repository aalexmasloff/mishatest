<?php

class RouterApi
{
	static function start()
	{
		$controllerName = null;
		$actionName = null;
		
		$routes = explode('/', $_SERVER['REQUEST_URI']);

		if ( !empty($routes[1]) )
		{	
			$controllerName = $routes[1];
        }
        
        if (!$controllerName){
            RouterApi::ErrorPage404();
            return;
        }

        $actionName = empty($routes[2]) 
            ? RouterApi::getHttpMethod()
            : empty($routes[2]);
		
        $controllerName .= 'Controller';
        if (class_exists($controllerName))
        {
            $controller = new $controllerName;
        }
        else
        {
            throw new Exception("The class $controllerName does not exist.");
        }

        if(method_exists($controller, $actionName))
		{
            header('Content-Type: application/json');
            echo $controller->$actionName();
		}
		else
		{
			RouterApi::ErrorPage404();
		}
    }
    
    static private function getHttpMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

	function ErrorPage404()
	{
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
		header("Status: 404 Not Found");
		header('Location:'.$host.'404');
    }
    
}
