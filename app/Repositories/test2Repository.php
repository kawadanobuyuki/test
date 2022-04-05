<?php

namespace App\Repositories;

use App\Interfaces\RepositoryInterface;

class test2Repository implements RepositoryInterface
{
    public function __construct()
    {

    }

    public function save(int $id)
    {
        return "test2:" . $id;
    }
}