<?php
/**
 * Created by PhpStorm.
 * User: object
 * Date: 12.01.19
 * Time: 17:56
 */

namespace App\Controllers;

use App\Page\InvalidPageException;

class Page extends BaseController
{
    public function show($params)
    {
        $slug = $params['slug'];

        try {
            $data['content'] = $this->pageReader->readBySlug($slug);
        } catch (InvalidPageException $e) {
            return $this->render404();
        }

        return $this->renderTemplate('Page',$data);
    }

}