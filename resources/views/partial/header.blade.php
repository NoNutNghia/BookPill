<header class="header-main flex flex-col justify-between">
    <div class="flex flex-row items-center justify-between">
        <div class="flex flex-row items-center gap-[0.5rem]">
            <span id="text_header_download" class="cursor-pointer">
                Download
            </span>
            <div class="modal_download top-[30px] absolute w-[64px] h-[10px]">
            </div>
            <div id="modal_download" class="modal_download">
                <div class="flex flex-col">
                    <img src="{{ asset('storage/qr/frame.png') }}" alt="">
                    <div class="flex flex-row items-center pl-[16px] pb-[16px] pr-[16px] justify-between">
                        <img src="{{ asset('storage/brand_tech/appstore.png') }}" alt="">
                        <img src="{{ asset('storage/brand_tech/google_play.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="hr-vertical"></div>
            <span class="text_header">
                Follow on us
            </span>
            <a href="">
                <i class="fa-brands fa-facebook text-gray-50"></i>
            </a>
            <a href="">
                <i class="fa-brands fa-instagram text-gray-50"></i>
            </a>
        </div>
        <div class="flex flex-row items-center gap-[0.5rem]">
            <a href="{{ route('sign_in') }}" class="text-link-switch text-gray-50">
                <span>
                    Sign In
                </span>
            </a>
            <div class="hr-vertical"></div>
            <a href="{{ route('register') }}" class="text-link-switch text-gray-50">
                <span>
                    Register
                </span>
            </a>
        </div>
    </div>

    <div class="flex flex-row items-center justify-between">
        <a href="" class="w-[17%]">
            <img class="image_header" src="{{ asset('storage/source_image/main_logo.png') }}" alt="">
        </a>
        <div class="flex flex-row w-4/5">
            <div class="w-4/5 flex flex-row-reverse items-center">
                <input type="text" class="search_header">
                <button id="button_search" class="button-action">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </div>
            <div class="w-1/5 flex flex-col justify-end items-center">
                <i class="fa-sharp fa-solid fa-cart-shopping" id="cart_user"></i>
                <div class="flex flex-row-reverse absolute" style="width: 400px ; right: calc(8%); bottom: 8px">
                    <div class="cart cart_expand"></div>
                </div>
                <div id="cart_detail" class="cart">
                    <div class="flex flex-col">
                        <span class="text_card">
                            Recently Added Products
                        </span>
                        <div class="flex flex-row justify-between cart_item">
                            <img width=12%" src="{{ asset('storage/product_image/no_product.png') }}" alt="">
                            <span class="w-[67%] text-[14px] font-bold">
                                Test Test Test Test Test Test
                            </span>
                            <span class="w-[15%] text-[14px] text-[#566FEF] break-words">
                                ₫110000
                            </span>
                        </div>
                        <div class="flex flex-row justify-between cart_item">
                            <img width=12%" src="{{ asset('storage/product_image/no_product.png') }}" alt="">
                            <span class="w-[67%] text-[14px] font-bold">
                                Test Test Test Test Test Test
                            </span>
                            <span class="w-[15%] text-[14px] text-[#566FEF] break-words">
                                ₫110000
                            </span>
                        </div>
                        <div class="flex flex-row justify-between cart_item">
                            <img width=12%" src="{{ asset('storage/product_image/no_product.png') }}" alt="">
                            <span class="w-[67%] text-[14px] font-bold">
                                Test Test Test Test Test Test
                            </span>
                            <span class="w-[15%] text-[14px] text-[#566FEF] break-words">
                                ₫110000
                            </span>
                        </div>
                        <div class="flex flex-row justify-between cart_item">
                            <img width=12%" src="{{ asset('storage/product_image/no_product.png') }}" alt="">
                            <span class="w-[67%] text-[14px] font-bold">
                                Test Test Test Test Test Test
                            </span>
                            <span class="w-[15%] text-[14px] text-[#566FEF] break-words">
                                ₫110000
                            </span>
                        </div>
{{--                        <div class="flex flex-row items-center justify-center">--}}
{{--                            <img width=60%" src="{{ asset('storage/product_image/no_product.png') }}" alt="">--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
