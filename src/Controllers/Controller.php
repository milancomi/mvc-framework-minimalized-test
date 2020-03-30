<?php declare(strict_types = 1);

namespace Example\Controllers;

class Controller

{

    public function render($view, $data=[]) {
     extract($data);

        ob_start();
        include __DIR__ . '/../../views'.'/' .$view.".php";
        $renderedView = ob_get_clean();


        return $renderedView;
    }
}