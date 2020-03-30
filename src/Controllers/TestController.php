<?php declare(strict_types = 1);

namespace Example\Controllers;

use Http\Request;
use Http\Response;
use Example\Controllers\Controller;
class TestController extends Controller

{

    
    private $request;
    private $response;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;

    }

    public function index()
    {

                $data =['para1'=>'testtt'];
                $content = $this->render('Location',$data);
                $this->response->setContent($content);

    }

}