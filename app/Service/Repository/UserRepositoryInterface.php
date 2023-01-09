<?php

namespace App\Service\Repository;

interface UserRepositoryInterface
{
    public function getUser($email, $password);
}
