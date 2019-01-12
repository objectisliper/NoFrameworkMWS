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
        $data = [
            'name' => $this->request->getParameter('name', 'stranger'),
        ];
        $this->renderTemplate('Homepage', $data);
    }
}