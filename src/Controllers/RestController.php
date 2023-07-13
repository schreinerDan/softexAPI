<?php

class RestController
{

    private $requestMethod;
    private $uri = null;
    private $service;
    private $controller;
    private $param;
    private $method;


    public function __construct($requestMethod, $uri)
    {
        $this->requestMethod = $requestMethod;
        $this->uri = $uri;
    }
    public function requestMapping(){
        $this->parseUri();
        switch ($this->controller){
            case 'products':
                $this->service = new ProductsService($this->requestMethod,$this->method, $this->param);
                break;
            default:
                break;
        }


    }
    private function parseUri(){
        if($this->uri) {
            $uri_data = explode('/', $this->uri);
            $this->controller = $uri_data[3];
            $this->method=$uri_data[4];
            if (sizeof($uri_data)==5){
                $this->param = $uri_data[4];
            }
           

        }
    }

}