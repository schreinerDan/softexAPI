<?php
/***
 * @author Daniel Schreiner
 * @email schreiner.daniel@gmail.com
 */

class ProductService extends Service
{
    public function __construct($requestMethod, $method, $param)
    {
        parent::__construct($requestMethod, $method, $param);
        
        $dbi = PgsqlSingleton::getInstance();
        
        $this->repository = new ProductRepository($dbi);
        
        if ($this->isDefaultRequest()) {
            $this->processDefaultRequest();
        } else {
            $this->processCustomRequest();
        }
    }
    
    public function getByCategory($id)
    {
        return $this->repository->getByCategory($id);
    }
    
    public function processCustomRequest()
    {
        $response = $this->notFoundResponse();
        switch ($this->requestMethod) {
            case 'GET':
                if ($this->method == "getByCategory" && $this->param != null) {
                    $response = $this->getByCategory($this->param);
                }
                break;
            case 'POST':
                // Custom
                break;
            case 'PUT':
                // Custom
                break;
            case 'DELETE':
                // Custom
                break;
            default:
                $response = $this->notFoundResponse();
                break;
        }
        header($response['status_code_header']);
        if ($response['body']) {
            echo $response['body'];
        }
    }
}
