<?php

namespace App\Service;

use App\Mail\RegisterOrder;
use App\Service\Repository\UserRepositoryInterface;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

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
        do {
            $randomString = $this->genNumString();
        } while ($this->userRepository->getExistForgetUrlUser($randomString) !== null);

        $randomString = sha1(Carbon::now()->toString() . $randomString);

        $userTmp = $this->userRepository->createUserTmp($request->email, $randomString);

        if (!$userTmp) {
            return false;
        }

        Mail::queue(new RegisterOrder($userTmp));

        if(Mail::failures()) {
            return false;
        }

        return view('pages.auth.mail_verification')->with(array(
            'mailaddress' => $request->email
        ));
    }

    public function resetPasswordIndex(Request $request)
    {
        return view('pages.auth.reset_password');
    }

    private function genNumString(): string
    {
        $stringNum = '0123456789';
        $lengthStringNum = Str::length($stringNum);
        $randomNumString = '';
        for ($i = 0; $i < 8; $i++) {
            $randomNumString .= $stringNum[rand(0, $lengthStringNum - 1)];
        }

        return $randomNumString;
    }
}
