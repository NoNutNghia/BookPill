<?php

namespace App\Service\Admin;

use App\Service\Repository\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserAdminService
{
    private UserRepositoryInterface $userRepository;

    /**
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getUserList(Request $request)
    {
        if($request->searchKey) {
            $key = '%' . trim(str_replace('%', '\%', $request->searchKey)) . '%';
        } else {
            $key = '%%';
        }

        $userList = $this->userRepository->getListUser($key);
        return view('pages.admin.user.list', compact('userList'));
    }

}
