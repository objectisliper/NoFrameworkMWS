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


class BaseController
{
    protected $request;
    protected $response;

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

}