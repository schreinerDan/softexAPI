<?php 
/**
 * @author Daniel Schreiner
 * @email schreiner.daniel@gmail.com
 */

class TaxService extends Service
{
    public function __construct($requestMethod, $method, $param)
    {
        parent::__construct($requestMethod, $method, $param);
        
        $dbi = PgsqlSingleton::getInstance();
        
        $this->repository = new TaxRepository($dbi);
        
        if ($this->isDefaultRequest()) {
            $this->processDefaultRequest();
        } else {
            $this->processCustomRequest();
        }
    }
    
    public function processCustomRequest()
    {
        $response = $this->notFoundResponse();
        switch ($this->requestMethod) {
            case 'GET':
                // Custom
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