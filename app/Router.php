<?php

namespace App;

use AltoRouter;

class Router {

    /**
     * Undocumented function
     * 
     * @var string
     */
    private $viewPath;


    /**
     * Undocumented function
     * 
     * @var AltoRouter
     */
    private $router;

    public function __construct(string $viewPath)
    {
        $this->viewPath = $viewPath;
        $this->router = new AltoRouter();
    }

    public function get(string $url, string $view, ?string $name = null): self
    {
        $this->router->map('GET', $url, $view, $name);
        return $this;
    }

    public function url(string $name)
    {
        return $this->router->generate($name);
    }
    
    public function run(): self
    {
        $match = $this->router->match();
        $view = $match['target'];
        //$params = $match['params'];
        $router = $this;
        ob_start();
        require $this->viewPath . DIRECTORY_SEPARATOR . $view . '.php';
        $content = ob_get_clean();
        require $this->viewPath . DIRECTORY_SEPARATOR . 'layout/default.php';
        return $this;
    }
}
