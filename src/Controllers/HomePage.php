<?php declare(strict_types = 1);

namespace Example\Controllers;

use Http\Request;
use Http\Response;
use Example\View\ViewRenderenderInterf; // INTERFACE
class Homepage

{
    private $request;
    private $response;
    private $render;

    public function __construct(Request $request, Response $response)
    {
        //  parent::__construct();

        $this->request = $request;
        $this->response = $response;

    }

    public function show()
    {
        $content = '<h1>Hello World</h1>';
        // $content .= 'Hello ' . $this->request->getParameter('name', 'stranger');
        // $content=  dirname(__DIR__) . '/templates' . ".php". $data;
        // $content = $this->render('Location',$data);
        
        $this->response->setContent($content);
    }

    public function render($file, $variables=[]) {
     extract($variables);

        ob_start();
        include __DIR__ . '/../../views'.'/' .$file.".php";
        $renderedView = ob_get_clean();


        return $renderedView;
    }
}