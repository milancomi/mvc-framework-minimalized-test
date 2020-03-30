<?php declare(strict_types = 1);

namespace Example\Controllers;

use Http\Request;
use Http\Response;
use Example\Controllers\Homepage;
class TestController extends Homepage

{
    private $request;
    private $response;

    public function __construct(Request $request, Response $response)
    {

        $this->request = $request;
        $this->response = $response;

    }

    public function show2()
    {
        var_dump($this->request);
        die();
                $data =['para1'=>'testtt'];
     $content = $this->render('Location',$data);

     echo $content;
     $this->response->setContent($content);

        // $content = '<h1>Hello World</h1>';
        // $content .= 'Hello ' . $this->request->getParameter('name', 'stranger');
        // $content=  dirname(__DIR__) . '/templates' . ".php". $data;
        // $content = $this->render('Location',$data);
        // $this->response->setContent($content);
    }

    // public function render($file, $variables = array()) {
    //     extract($variables);

    //     ob_start();
    //     include dirname(__DIR__) . '/views' .$file.".php";
    //     $renderedView = ob_get_clean();

    //     return $renderedView;
    // }
}