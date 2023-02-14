<?php

namespace App\Service\Repository;

interface UserRepositoryInterface
{
    public function getUser($email, $password);

    public function getUserByEmail($email);

    public function getExistForgetUrlUser($forgetUrl);

    public function getListUser($searchKey);
}
