<?php declare(strict_types = 1);

namespace Example\Controllers;
use Http\Request;
use Http\Response;
use Example\Controllers\Controller;
use Example\Models\User;

class TestController extends Controller

{

    private $userRepository;
    private $request;
    private $response;

    // ProductRepositoryInterface

    public  function __construct(Request $request, Response $response,UserRepositoryInterface $userRepository)
    {
        $this->request = $request;
        $this->response = $response;
        $this->userRepository = $userRepository;

    }

    public function index()
    {


        //$data = $this->userRepository->getAllUsers();
        $data = User::all();


                $data =['para1'=>$data];
                $content = $this->render('user/index',$data);
                $this->response->setContent($content);

    }

    public function register()
    {


        //$data = $this->userRepository->getAllUsers();
        $data = User::all();


                $data =['para1'=>$data];
                $content = $this->render('auth/register',$data);
                $this->response->setContent($content);

    }

    public function login()
    {


        //$data = $this->userRepository->getAllUsers();
        $data = User::all();


                $data =['para1'=>$data];
                $content = $this->render('auth/login',$data);
                $this->response->setContent($content);

    }


    public function signUp()
    {
        $data = $this->request->getBodyParameters();

        $user = $this->userRepository->create($data);
                
    }

}