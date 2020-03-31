<?php declare(strict_types = 1);

namespace Example\Controllers;

use Http\Request;
use Http\Response;
use Example\Controllers\Controller;
class TestController extends Controller

{

    
    private $userRepository;
    private $response;

    // ProductRepositoryInterface

    public function __construct(Request $request, Response $response,UserRepositoryInterface $userRepository)
    {
        $this->request = $request;
        $this->response = $response;
        $this->userRepository = $userRepository;

    }

    public function index()
    {

        $data = $this->userRepository->search(1231);
                $data =['para1'=>$data];
                $content = $this->render('Location',$data);
                $this->response->setContent($content);

    }

}