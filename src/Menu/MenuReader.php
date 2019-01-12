<?php
/**
 * Created by PhpStorm.
 * User: object
 * Date: 12.01.19
 * Time: 18:49
 */

namespace App\Menu;


interface MenuReader
{
    public function readMenu() : array;
}