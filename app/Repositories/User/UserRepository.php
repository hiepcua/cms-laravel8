<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\BaseRepository;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{

    /**
     * @return mixed|\Illuminate\Database\Eloquent\Model
     */
    public function getModel()
    {
        return new User();
    }
}