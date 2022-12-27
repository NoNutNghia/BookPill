@extends('layout.auth')

@section('content')
    <div class="flex flex-row items-center">
        <img class="image_large" src="{{ asset('storage/source_image/large_bookpill.png') }}" alt="">
        <div class="flex flex-col auth_area">
        <span class="auth-header-text mb-[3rem]">
            Register
        </span>
            <input type="text" class="input_auth_username" placeholder="Email">
            <button class="button-action mb-[1.5rem]">
                <span>
                    Register
                </span>
            </button>
            <hr class="mb-[1rem]">
            <div class="text-center text-[14px] mb-[1.5rem]">
                <span>
                    By signing up, you agree to BookPill's
                </span>
                <a href="" class="text-link">
                    <span>
                        Terms of Service
                    </span>
                </a>
                <span>
                    &
                </span>
                <a href="" class="text-link">
                    <span>
                        Privacy Policy
                    </span>
                </a>
            </div>
            <div class="flex flex-row items-center justify-center">
            <span class="text-link mr-[0.4rem]">
                Have an account?
            </span>
                <a href="">
                <span class="text-link-switch">
                    Sign In
                </span>
                </a>
            </div>

        </div>
    </div>
@endsection
