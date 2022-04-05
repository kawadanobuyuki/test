<?php

namespace App\Services;
use App\Interfaces\RepositoryInterface;

class testService
{
    /**
     * repository_interface
     *
     * @var RepositoryInterface
     */
    private $repository_interface = null;

    public function __construct(RepositoryInterface $repository_interface)
    {
        $this->repository_interface = $repository_interface;
    }

    public function execute()
    {
        $q = $this->repository_interface->save(123);
        $q .= $this->repository_interface->okey();
        return $q;
    }
}