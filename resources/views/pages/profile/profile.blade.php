@extends('layout.master')

@section('content')
<div class="flex flex-row">
    <div class="flex flex-col gap-[1rem] dashboard_profile">
        <div class="header_profile flex flex-row items-center">
            <div class="w-[48px] mr-[12px]">
                <img class="image_user" src="{{ asset('storage/profile_image/Test.jpeg') }}" alt="">
            </div>
            <div class="flex flex-col">
                <span class="username_profile text-link-switch font-bold text-[#566FEF]">
                    {{ \Illuminate\Support\Facades\Auth::user()->username }}
                </span>
                <div class="edit_profile gap-[4px] flex flex-row items-center">
                    <i class="fa-solid fa-pencil"></i>
                    <span>
                        Edit profile
                    </span>
                </div>
            </div>

        </div>
        <hr>
        <div class="header_profile flex flex-col gap-[0.7rem] justify-center">
            <div class="flex flex-row items-center gap-[12px]">
                <i class="text-[#566FEF] fa-solid fa-user"></i>
                <span class="text-link-switch font-bold text-[#566FEF]">
                    My Account
                </span>
            </div>
            <div class="flex flex-row items-center gap-[12px]">
                <i class="text-[#566FEF] text-[13px] fa-solid fa-cart-shopping"></i>
                <span class="text-link-switch font-bold text-[#566FEF]">
                    My Purchaser
                </span>
            </div>
        </div>
    </div>
    <div class="flex-auto profile_content gap-[0.6rem] flex flex-col">
        <div class="flex flex-col pt-[1.125rem] pb-[1.125rem] gap-[2px] text-[#555]">
            <span class="text-[1.125rem] font-[500]">
                My Profile
            </span>
            <span class="text-[14px]">
                Manage and protect your account
            </span>
        </div>
        <hr>
        <div class="flex flex-row pt-[1.125rem] pb-[1.125rem] text-[#555] justify-between">
            <div class="flex flex-col w-[65%] gap-[1.5rem]">
                <div class="flex flex-row items-center gap-[16px]">
                    <div class="w-[20%] flex flex-row-reverse">
                        <span class="label_content_profile">
                            Username
                        </span>
                    </div>
                    <span>
                        {{ \Illuminate\Support\Facades\Auth::user()->username }}
                    </span>
                </div>
                <div class="flex flex-row items-center gap-[16px]">
                    <div class="w-[20%] flex flex-row-reverse">
                        <span class="label_content_profile">
                            Name
                        </span>
                    </div>
                    <input type="text" class="w-[75%] mb-[0] input_auth_username"
                           value="{{ \Illuminate\Support\Facades\Auth::user()->full_name }}">
                </div>
                <div class="flex flex-row items-center gap-[16px]">
                    <div class="w-[20%] flex flex-row-reverse">
                        <span class="label_content_profile">
                            Email
                        </span>
                    </div>
                    <span>
                        {{ \Illuminate\Support\Facades\Auth::user()->email }}
                    </span>
                </div>
                <div class="flex flex-row items-center gap-[16px]">
                    <div class="w-[20%] flex flex-row-reverse">
                        <span class="label_content_profile">
                            Phone number
                        </span>
                    </div>
                    <span>
                        {{ \Illuminate\Support\Facades\Auth::user()->phone_number }}
                    </span>
                </div>
                <div class="flex flex-row items-center gap-[16px]">
                    <div class="w-[20%] flex flex-row-reverse">
                        <span class="label_content_profile">
                            Gender
                        </span>
                    </div>
                    <div class="flex flex-row gap-[1rem] items-center">
                        <div class="form-check form-check-inline flex flex-row items-center gap-[4px]">
                            <input {{\Illuminate\Support\Facades\Auth::user()->gender == 1 ? 'checked' : ''}} type="radio" name="gender" checked class="bg-[#566FEF]" id="male">
                            <label for="male">Male</label>
                        </div>
                        <div class="form-check form-check-inline flex flex-row items-center gap-[4px]">
                            <input {{\Illuminate\Support\Facades\Auth::user()->gender == 2 ? 'checked' : ''}} type="radio" name="gender" id="female">
                            <label for="female">Female</label>
                        </div>
                        <div class="flex flex-row items-center gap-[4px]">
                            <input {{\Illuminate\Support\Facades\Auth::user()->gender == 3 ? 'checked' : ''}} type="radio" name="gender" id="other">
                            <label for="other">Other</label>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row items-center gap-[16px]">
                    <div class="w-[20%] flex flex-row-reverse">
                        <span class="label_content_profile">
                            Date of birth
                        </span>
                    </div>
                    <div class="flex w-[65%] flex-row items-center gap-[1rem]">
                        <select class="mb-[0] w-1/3 input_auth_username" name="" id="dayOfBirth">
                            <option value="">26</option>
                        </select>

                        <select class="mb-[0] w-1/3 input_auth_username" name="" id="monthOfBirth">
                            <option value="7">July</option>
                        </select>

                        <select class="mb-[0] w-1/3 input_auth_username" name="" id="yearOfBirth">
                            <option value="2001">2001</option>
                        </select>
                    </div>
                </div>
                <div class="flex flex-row items-center gap-[16px]">
                    <div class="w-[20%] flex flex-row-reverse">
                    </div>
                    <div class="flex w-[65%] flex-row items-center gap-[1rem]">
                        <button class="pt-[10px] pb-[10px] pr-[24px] pl-[24px] button-action">
                            <span>
                                Save
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-[1px] h-auto hr-vertical"></div>
            <div class="flex flex-col w-[30%] items-center gap-[1rem] justify-center">
                <img width="40%" src="{{ asset('storage/profile_image/Test.jpeg') }}" alt="" class="image_user">
                <button class="pt-[10px] border pb-[10px] pr-[24px] pl-[24px]">
                    <span>
                        Select image
                    </span>
                </button>
                <div class="w-[65%] text-[#555] text-[14px] flex flex-col">
                    <span>
                        File size: maximum 1 MB
                    </span>
                    <span>
                        File extension: .JPEG, .PNG
                    </span>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
