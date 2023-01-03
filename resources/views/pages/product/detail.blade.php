@extends('layout.master')

@section('content')
    <div class="flex flex-row detail_product_bg">
        <div class="w-2/5 p-[15px] flex flex-col justify-between items-center">
            <div class="w-full mb-[8px]">
                <img class="border w-full" src="{{ asset('storage/product_image/no_product.png') }}" alt="">
            </div>
            <div class="flex flex-row gap-[8px]">
                <img class="border image_expand w-1/5" src="{{ asset('storage/product_image/no_product.png') }}" alt="">
                <img class="border image_expand w-1/5" src="{{ asset('storage/product_image/no_product.png') }}" alt="">
                <img class="border image_expand w-1/5" src="{{ asset('storage/product_image/no_product.png') }}" alt="">
                <img class="border image_expand w-1/5" src="{{ asset('storage/product_image/no_product.png') }}" alt="">
            </div>
        </div>
        <div class="w-3/5 flex flex-col product_detail">
            <span class="title_product_detail">
                Test product Test product Test product Test product Test product Test product
            </span>
            <div class="flex flex-row items-center rating_product gap-[2rem]">
                <div class="flex flex-row items-center gap-[4px]">
                    <span class="text-[#566FEF] underline">
                        5.0
                    </span>
                    <div class="flex flex-row gap-[2px]">
                        @foreach(range(1,5) as $j)
                            <span class="fa-stack" style="width:1em">
                            <i class="text-[#566FEF] fas fa-star fa-stack-1x"></i>
                        </span>
                        @endforeach
                    </div>
                </div>
                <div class="w-[1px] h-[28px] hr-vertical">
                </div>
                <div class="flex flex-row items-center gap-[4px]">
                    <span class="underline">
                        0
                    </span>
                    <span class="label_content_profile">
                        Ratings
                    </span>
                </div>
                <div class="w-[1px] h-[28px] hr-vertical">
                </div><div class="flex flex-row items-center gap-[4px]">
                    <span>
                        0
                    </span>
                    <span class="label_content_profile">
                        Sold
                    </span>
                </div>
            </div>
            <div class="flex flex-row items-center price">
                <span class="text-[1rem] price_old">
                    110000
                </span>
                <span class="text-[1.875rem] font-semibold price_product">120000</span>
            </div>
            <div class="flex flex-row option_get_product">
                <div class="w-1/5 flex flex-row">
                    <span class="label_content_profile">
                        Shipping
                    </span>
                </div>
                <div class="w-4/5 flex flex-col gap-[0.3rem]">
                    <div class="flex flex-row items-center gap-[2rem]">
                        <div class="w-1/4 flex flex-row-reverse items-center gap-[8px]">
                            <span class="label_content_profile">
                                Shipping From
                            </span>
                            <i class="text-[#566FEF] fa-solid fa-truck"></i>
                        </div>
                        <div class="w-1/2 flex flex-row">
                            <span class="font-semibold">
                                Ha Noi
                            </span>
                        </div>
                    </div>
                    <div class="flex flex-row items-center gap-[2rem]">
                        <div class="w-1/4 flex flex-row-reverse">
                            <span class="label_content_profile">
                                Shipping Fee
                            </span>
                        </div>
                        <span class="text-[#566FEF]">
                            ₫30000
                        </span>
                    </div>
                </div>
            </div>
            <div class="flex flex-row button_action_product gap-[1rem]">
                <button class="flex flex-row items-center add_to_cart gap-[4px]">
                    <i class="fa-solid fa-cart-plus"></i>
                    <span>Add To Cart</span>
                </button>
                <button class="flex flex-row items-center buy_product_now">
                    <span>Buy Now</span>
                </button>
            </div>
        </div>
    </div>
@endsection
