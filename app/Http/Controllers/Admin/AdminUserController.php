<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\Admin\UserAdminService;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    private UserAdminService $userAdminService;

    /**
     * @param UserAdminService $userAdminService
     */
    public function __construct(UserAdminService $userAdminService)
    {
        $this->userAdminService = $userAdminService;
    }

    public function getUserList(Request $request)
    {
        return $this->userAdminService->getUserList($request);
    }

}
