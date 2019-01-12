<?php
/**
 * Created by PhpStorm.
 * User: object
 * Date: 12.01.19
 * Time: 15:08
 */

declare(strict_types = 1);


return [
    ['GET', '/', ['App\Controllers\Homepage', 'show']],
    ['GET', '/login', ['App\Controllers\Auth', 'loginPage']],
    ['POST', '/login', ['App\Controllers\Auth', 'login']],
    ['GET', '/create_task', ['App\Controllers\TaskController', 'index']],
    ['POST', '/create_task', ['App\Controllers\TaskController', 'index']],
];
