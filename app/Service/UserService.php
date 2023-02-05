<?php

namespace App\Service;

use App\Service\Repository\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserService
{
    private UserRepositoryInterface $userRepository;
    private SendMailService $sendMailService;

    /**
     * @param UserRepositoryInterface $userRepository
     * @param SendMailService $sendMailService
     */
    public function __construct(
        UserRepositoryInterface $userRepository,
        SendMailService $sendMailService
    )
    {
        $this->userRepository = $userRepository;
        $this->sendMailService = $sendMailService;
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
        $user = $this->userRepository->getUser($request->email, $request->password);
        if ($user) {
            Auth::login($user);
            return redirect()->route('main');
        }
        return redirect()->back();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('main');
    }

    public function resetPassword(Request $request)
    {
        return view('pages.auth.forgot_password');
    }

    public function resetPasswordRequest(Request $request)
    {
        $sendMailResult = $this->sendMailService->sendMailRequestResetPass($request);

        if (!$sendMailResult)
        {
            return redirect()->back();
        }
        return redirect()->route('verify.email');
    }

    public function verifyEmail(Request $request)
    {
        return view('pages.auth.mail_verification')->with(array(
            'mailaddress' => Session::get('mail_address')
        ));
    }

    public function resetPasswordIndex(Request $request)
    {
        return view('pages.auth.reset_password');
    }
}
