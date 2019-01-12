<?php
/**
 * Created by PhpStorm.
 * User: object
 * Date: 13.01.19
 * Time: 0:41
 */

namespace App\Models;


class TaskModel extends BaseModel
{
    public $id;
    public $username;
    public $email;
    public $description;
    public $complete;

    public function __construct()
    {
        parent::__construct();
        $this->setTableDB('tasks');
    }

    public function save($data){
        return $this->create($data);
    }

}