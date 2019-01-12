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
use App\Template\Renderer;



class BaseController
{
    protected $request;
    protected $response;
    protected $renderer;

    public function __construct(
        Request $request,
        Response $response,
        Renderer $renderer
    ) {
        $this->request = $request;
        $this->response = $response;
        $this->renderer = $renderer;
    }

    protected function renderTemplate($template, $data){
        $html = $this->renderer->render($template, $data);
        $this->response->setContent($html);
    }

}