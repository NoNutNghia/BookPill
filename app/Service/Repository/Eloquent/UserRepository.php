<?php

namespace App\Service\Repository\Eloquent;

use App\Models\User;
use App\Service\Repository\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    private User $user;

    /**
     * @param User $user
     */
    public function __construct()
    {
        $this->user = new User();
    }

    public function getUser($email, $password)
    {
        try {
            return $this->user->where('email', $email)->first();
        } catch (\Exception $e) {
            return false;
        }
    }
}
