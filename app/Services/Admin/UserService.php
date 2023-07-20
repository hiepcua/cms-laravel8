<?php

namespace App\Services;

use App\Repositories\User\UserRepositoryInterface;
use App\Services\BaseService;
use App\Models\User;

class UserService extends BaseService
{
    protected $repository;

    public function __construct(UserRepositoryInterface $repository)
    {
        parent::__construct();

        $this->repository = $repository;
    }

    public function setModel()
    {
        return new User();
    }
}