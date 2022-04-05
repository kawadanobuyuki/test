<?php

namespace App\Repositories;

use App\Interfaces\RepositoryInterface;

class testRepository implements RepositoryInterface
{
    public function __construct()
    {

    }

    public function save(int $id)
    {
        return "test:" . $id;
    }
    public function okey()
    {
        return "abc";
    }
}