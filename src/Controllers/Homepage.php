<?php
/**
 * Created by PhpStorm.
 * User: object
 * Date: 12.01.19
 * Time: 15:23
 */

namespace App\Controllers;


class Homepage extends BaseController
{

    public function show()
    {
        $content = '<h1>Hello World</h1>';
        $content .= 'Hello ' . $this->request->getParameter('name', 'stranger');
        $this->response->setContent($content);
    }
}