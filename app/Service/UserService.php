<?php

namespace App\Service;

use App\Service\Repository\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserService
{
    private UserRepositoryInterface $userRepository;

    /**
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index(Request $request)
    {
        if (!Auth::check()) {
            return view('pages.auth.sign_in');
        }
        return redirect()->route('main');
    }

    public function login(Request $request)
    {
        //$2y$10$6txV8HAqym.n3rvtvJzpkewF9w.F795tN0JbmK8pPahY0uc7R.bA2
        $user = $this->userRepository->getUser($request->email, $request->password);
        if ($user) {
            Auth::login($user);
            return redirect()->route('main');
        }
        return view('pages.auth.sign_in');
    }

    public function logout(Request $request) {
        Auth::logout();
        Session::flush();
        return redirect()->route('main');
    }

}
