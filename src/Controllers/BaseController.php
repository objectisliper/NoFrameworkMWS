<?php
/**
 * Created by PhpStorm.
 * User: object
 * Date: 12.01.19
 * Time: 16:21
 */

namespace App\Controllers;

use Http\Request;
use Http\Response;
use App\Template\FrontendRenderer;
use App\Page\PageReader;



class BaseController
{
    protected $request;
    protected $response;
    protected $renderer;

    public function __construct(
        Request $request,
        Response $response,
        FrontendRenderer $renderer,
        PageReader $pageReader
    ) {
        $this->request = $request;
        $this->response = $response;
        $this->renderer = $renderer;
        $this->pageReader = $pageReader;
    }

    protected function renderTemplate($template, $data){
        $html = $this->renderer->render($template, $data);
        return $this->response->setContent($html);
    }

    protected function render404(){
        $this->response->setStatusCode(404);
        return $this->response->setContent('404 - Page not found');
    }

}