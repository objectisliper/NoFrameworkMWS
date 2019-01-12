<?php
/**
 * Created by PhpStorm.
 * User: object
 * Date: 12.01.19
 * Time: 18:21
 */

namespace App\Page;


interface PageReader
{
    public function readBySlug(string $slug) : string;
}