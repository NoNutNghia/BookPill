@extends('layout.master')

@section('content')
    <div class="flex flex-row">
        {{--        Filter          --}}
        <div class="flex flex-col filter gap-[1rem]">
            <div class="flex flex-row items-center">
                <i class="fa-solid fa-filter mr-[12px]"></i>
                <span class="text_filter">
                    Search Filter
                </span>
            </div>
            <div class="flex flex-col gap-[0.5rem]">
                <span class="label_filter">
                    By category
                </span>
                <div class="flex flex-row items-center">
                    <input type="checkbox" class="check_box_filter">
                    <span>
                        Test
                    </span>
                </div>
                <div class="flex flex-row items-center">
                    <input type="checkbox" class="check_box_filter">
                    <span>
                        Test
                    </span>
                </div>
                <div class="flex flex-row items-center">
                    <input type="checkbox" class="check_box_filter">
                    <span>
                        Test
                    </span>
                </div>
                <div class="flex flex-row items-center">
                    <input type="checkbox" class="check_box_filter">
                    <span>
                        Test
                    </span>
                </div>
            </div>
            <hr>
            <div class="flex flex-col gap-[0.5rem]">
                <span class="label_filter">
                    Shipped from
                </span>
                <div class="flex flex-row items-center">
                    <input type="checkbox" class="check_box_filter">
                    <span>
                        Test
                    </span>
                </div>
                <div class="flex flex-row items-center">
                    <input type="checkbox" class="check_box_filter">
                    <span>
                        Test
                    </span>
                </div>
                <div class="flex flex-row items-center">
                    <input type="checkbox" class="check_box_filter">
                    <span>
                        Test
                    </span>
                </div>
                <div class="flex flex-row items-center">
                    <input type="checkbox" class="check_box_filter">
                    <span>
                        Test
                    </span>
                </div>
            </div>
            <hr>
            <div class="flex flex-col gap-[0.5rem]">
                <span class="label_filter">
                    Price Range
                </span>
                <div class="flex flex-row items-center justify-between mb-[1rem]">
                    <input type="text" class="input_price_filter" placeholder="₫ MIN">
                    <div class="hr_vertical_price"></div>
                    <input type="text" class="input_price_filter" placeholder="₫ MAX">
                </div>
                <button class="button-action">
                    <span>
                        APPLY
                    </span>
                </button>
            </div>
            <hr>
            <div class="flex flex-col gap-[0.5rem]">
                <span class="label_filter">
                    Rating
                </span>
                <div class="flex flex-col items-center">
                    <div class="flex flex-col">
                        @foreach(range(5,1) as $i)
                            <div onclick="chooseRating(this)" class="flex flex-row pr-[12px] pl-[12px] {{ $i == 5 ? 'rating_not_have_text' : '' }} rating items-center gap-[6px]">
                                @foreach(range(1,5) as $j)
                                    <span class="fa-stack" style="width:1em">
                                        <i class="far fa-star fa-stack-1x"></i>
                                        @if($i >= $j)
                                            <i class="fas fa-star fa-stack-1x"></i>
                                        @else
                                            <i class="far fa-star fa-stack-1x"></i>
                                        @endif
                                    </span>
                                @endforeach
                                @if($i <= 4)
                                    <span class="text-[14px]">
                                        & Up
                                    </span>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <hr>
            <button class="button-action mb-[0.5rem]">
                <span>
                    CLEAR ALL
                </span>
            </button>
        </div>
        {{--        End filter          --}}
        {{--        Main product list       --}}
        <div class="flex product_area flex-col">
            <div class="flex flex-row items-center mb-[2rem]">
                <i class="fa-regular fa-lightbulb mr-[12px]"></i>
                <span>
                    Search result for '
                </span>
                <span class="text-[#566FEF]">
                    áo
                </span>
                <span>
                    '
                </span>
            </div>
            <div class="product_list_search grid grid-cols-5 gap-[8px]">
                <a href="{{ route('detail') }}" class="flex flex-col product transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300">
                    <img src="{{ asset('storage/product_image/no_product.png') }}" alt="">
                    <div class="flex flex-col gap-[0.5rem] p-[0.5rem]">
                        <span class="title_product text-[0.85rem]">
                            Test product Test product Test product Test product Test product Test product
                        </span>
                        <div class="flex flex-row items-center">
                            <span class="price_old">
                                110000
                            </span>
                            <span class="price_product">120000</span>
                        </div>
                        <div class="flex flex-row items-center gap-[12px]">
                            <div class="flex flex-row">
                                @foreach(range(1,5) as $j)
                                    <span class="fa-stack" style="width:0.7em">
                                        <i class="fas text-[10px] fa-star fa-stack-1x"></i>
                                    </span>
                                @endforeach
                            </div>
                            <div class="flex flex-row text-[0.85rem] gap-[2px]">
                                <span>0</span>
                                <span>sold</span>
                            </div>
                        </div>
                        <span class="text-[0.85rem]">
                            Ha Noi
                        </span>
                    </div>
                </a>
                <a href="{{ route('detail') }}" class="flex flex-col product transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300">
                    <img src="{{ asset('storage/product_image/no_product.png') }}" alt="">
                    <div class="flex flex-col gap-[0.5rem] p-[0.5rem]">
                        <span class="title_product text-[0.85rem]">
                            Test product Test product Test product Test product Test product Test product
                        </span>
                        <div class="flex flex-row items-center">
                            <span class="price_old">
                                110000
                            </span>
                            <span class="price_product">120000</span>
                        </div>
                        <div class="flex flex-row items-center gap-[12px]">
                            <div class="flex flex-row">
                                @foreach(range(1,5) as $j)
                                    <span class="fa-stack" style="width:0.7em">
                                        <i class="fas text-[10px] fa-star fa-stack-1x"></i>
                                    </span>
                                @endforeach
                            </div>
                            <div class="flex flex-row text-[0.85rem] gap-[2px]">
                                <span>0</span>
                                <span>sold</span>
                            </div>
                        </div>
                        <span class="text-[0.85rem]">
                            Ha Noi
                        </span>
                    </div>
                </a>
                <a href="{{ route('detail') }}" class="flex flex-col product transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300">
                    <img src="{{ asset('storage/product_image/no_product.png') }}" alt="">
                    <div class="flex flex-col gap-[0.5rem] p-[0.5rem]">
                        <span class="title_product text-[0.85rem]">
                            Test product Test product Test product Test product Test product Test product
                        </span>
                        <div class="flex flex-row items-center">
                            <span class="price_old">
                                110000
                            </span>
                            <span class="price_product">120000</span>
                        </div>
                        <div class="flex flex-row items-center gap-[12px]">
                            <div class="flex flex-row">
                                @foreach(range(1,5) as $j)
                                    <span class="fa-stack" style="width:0.7em">
                                        <i class="fas text-[10px] fa-star fa-stack-1x"></i>
                                    </span>
                                @endforeach
                            </div>
                            <div class="flex flex-row text-[0.85rem] gap-[2px]">
                                <span>0</span>
                                <span>sold</span>
                            </div>
                        </div>
                        <span class="text-[0.85rem]">
                            Ha Noi
                        </span>
                    </div>
                </a>
                <a href="{{ route('detail') }}" class="flex flex-col product transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300">
                    <img src="{{ asset('storage/product_image/no_product.png') }}" alt="">
                    <div class="flex flex-col gap-[0.5rem] p-[0.5rem]">
                        <span class="title_product text-[0.85rem]">
                            Test product Test product Test product Test product Test product Test product
                        </span>
                        <div class="flex flex-row items-center">
                            <span class="price_old">
                                110000
                            </span>
                            <span class="price_product">120000</span>
                        </div>
                        <div class="flex flex-row items-center gap-[12px]">
                            <div class="flex flex-row">
                                @foreach(range(1,5) as $j)
                                    <span class="fa-stack" style="width:0.7em">
                                        <i class="fas text-[10px] fa-star fa-stack-1x"></i>
                                    </span>
                                @endforeach
                            </div>
                            <div class="flex flex-row text-[0.85rem] gap-[2px]">
                                <span>0</span>
                                <span>sold</span>
                            </div>
                        </div>
                        <span class="text-[0.85rem]">
                            Ha Noi
                        </span>
                    </div>
                </a>
                <a href="{{ route('detail') }}" class="flex flex-col product transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300">
                    <img src="{{ asset('storage/product_image/no_product.png') }}" alt="">
                    <div class="flex flex-col gap-[0.5rem] p-[0.5rem]">
                        <span class="title_product text-[0.85rem]">
                            Test product Test product Test product Test product Test product Test product
                        </span>
                        <div class="flex flex-row items-center">
                            <span class="price_old">
                                110000
                            </span>
                            <span class="price_product">120000</span>
                        </div>
                        <div class="flex flex-row items-center gap-[12px]">
                            <div class="flex flex-row">
                                @foreach(range(1,5) as $j)
                                    <span class="fa-stack" style="width:0.7em">
                                        <i class="fas text-[10px] fa-star fa-stack-1x"></i>
                                    </span>
                                @endforeach
                            </div>
                            <div class="flex flex-row text-[0.85rem] gap-[2px]">
                                <span>0</span>
                                <span>sold</span>
                            </div>
                        </div>
                        <span class="text-[0.85rem]">
                            Ha Noi
                        </span>
                    </div>
                </a>
                <a href="{{ route('detail') }}" class="flex flex-col product transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300">
                    <img src="{{ asset('storage/product_image/no_product.png') }}" alt="">
                    <div class="flex flex-col gap-[0.5rem] p-[0.5rem]">
                        <span class="title_product text-[0.85rem]">
                            Test product Test product Test product Test product Test product Test product
                        </span>
                        <div class="flex flex-row items-center">
                            <span class="price_old">
                                110000
                            </span>
                            <span class="price_product">120000</span>
                        </div>
                        <div class="flex flex-row items-center gap-[12px]">
                            <div class="flex flex-row">
                                @foreach(range(1,5) as $j)
                                    <span class="fa-stack" style="width:0.7em">
                                        <i class="fas text-[10px] fa-star fa-stack-1x"></i>
                                    </span>
                                @endforeach
                            </div>
                            <div class="flex flex-row text-[0.85rem] gap-[2px]">
                                <span>0</span>
                                <span>sold</span>
                            </div>
                        </div>
                        <span class="text-[0.85rem]">
                            Ha Noi
                        </span>
                    </div>
                </a>
                <a href="{{ route('detail') }}" class="flex flex-col product transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300">
                    <img src="{{ asset('storage/product_image/no_product.png') }}" alt="">
                    <div class="flex flex-col gap-[0.5rem] p-[0.5rem]">
                        <span class="title_product text-[0.85rem]">
                            Test product Test product Test product Test product Test product Test product
                        </span>
                        <div class="flex flex-row items-center">
                            <span class="price_old">
                                110000
                            </span>
                            <span class="price_product">120000</span>
                        </div>
                        <div class="flex flex-row items-center gap-[12px]">
                            <div class="flex flex-row">
                                @foreach(range(1,5) as $j)
                                    <span class="fa-stack" style="width:0.7em">
                                        <i class="fas text-[10px] fa-star fa-stack-1x"></i>
                                    </span>
                                @endforeach
                            </div>
                            <div class="flex flex-row text-[0.85rem] gap-[2px]">
                                <span>0</span>
                                <span>sold</span>
                            </div>
                        </div>
                        <span class="text-[0.85rem]">
                            Ha Noi
                        </span>
                    </div>
                </a>
                <a href="{{ route('detail') }}" class="flex flex-col product transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300">
                    <img src="{{ asset('storage/product_image/no_product.png') }}" alt="">
                    <div class="flex flex-col gap-[0.5rem] p-[0.5rem]">
                        <span class="title_product text-[0.85rem]">
                            Test product Test product Test product Test product Test product Test product
                        </span>
                        <div class="flex flex-row items-center">
                            <span class="price_old">
                                110000
                            </span>
                            <span class="price_product">120000</span>
                        </div>
                        <div class="flex flex-row items-center gap-[12px]">
                            <div class="flex flex-row">
                                @foreach(range(1,5) as $j)
                                    <span class="fa-stack" style="width:0.7em">
                                        <i class="fas text-[10px] fa-star fa-stack-1x"></i>
                                    </span>
                                @endforeach
                            </div>
                            <div class="flex flex-row text-[0.85rem] gap-[2px]">
                                <span>0</span>
                                <span>sold</span>
                            </div>
                        </div>
                        <span class="text-[0.85rem]">
                            Ha Noi
                        </span>
                    </div>
                </a>
                <a href="{{ route('detail') }}" class="flex flex-col product transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300">
                    <img src="{{ asset('storage/product_image/no_product.png') }}" alt="">
                    <div class="flex flex-col gap-[0.5rem] p-[0.5rem]">
                        <span class="title_product text-[0.85rem]">
                            Test product Test product Test product Test product Test product Test product
                        </span>
                        <div class="flex flex-row items-center">
                            <span class="price_old">
                                110000
                            </span>
                            <span class="price_product">120000</span>
                        </div>
                        <div class="flex flex-row items-center gap-[12px]">
                            <div class="flex flex-row">
                                @foreach(range(1,5) as $j)
                                    <span class="fa-stack" style="width:0.7em">
                                        <i class="fas text-[10px] fa-star fa-stack-1x"></i>
                                    </span>
                                @endforeach
                            </div>
                            <div class="flex flex-row text-[0.85rem] gap-[2px]">
                                <span>0</span>
                                <span>sold</span>
                            </div>
                        </div>
                        <span class="text-[0.85rem]">
                            Ha Noi
                        </span>
                    </div>
                </a>
                <a href="{{ route('detail') }}" class="flex flex-col product transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300">
                    <img src="{{ asset('storage/product_image/no_product.png') }}" alt="">
                    <div class="flex flex-col gap-[0.5rem] p-[0.5rem]">
                        <span class="title_product text-[0.85rem]">
                            Test product Test product Test product Test product Test product Test product
                        </span>
                        <div class="flex flex-row items-center">
                            <span class="price_old">
                                110000
                            </span>
                            <span class="price_product">120000</span>
                        </div>
                        <div class="flex flex-row items-center gap-[12px]">
                            <div class="flex flex-row">
                                @foreach(range(1,5) as $j)
                                    <span class="fa-stack" style="width:0.7em">
                                        <i class="fas text-[10px] fa-star fa-stack-1x"></i>
                                    </span>
                                @endforeach
                            </div>
                            <div class="flex flex-row text-[0.85rem] gap-[2px]">
                                <span>0</span>
                                <span>sold</span>
                            </div>
                        </div>
                        <span class="text-[0.85rem]">
                            Ha Noi
                        </span>
                    </div>
                </a>
                <a href="{{ route('detail') }}" class="flex flex-col product transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300">
                    <img src="{{ asset('storage/product_image/no_product.png') }}" alt="">
                    <div class="flex flex-col gap-[0.5rem] p-[0.5rem]">
                        <span class="title_product text-[0.85rem]">
                            Test product Test product Test product Test product Test product Test product
                        </span>
                        <div class="flex flex-row items-center">
                            <span class="price_old">
                                110000
                            </span>
                            <span class="price_product">120000</span>
                        </div>
                        <div class="flex flex-row items-center gap-[12px]">
                            <div class="flex flex-row">
                                @foreach(range(1,5) as $j)
                                    <span class="fa-stack" style="width:0.7em">
                                        <i class="fas text-[10px] fa-star fa-stack-1x"></i>
                                    </span>
                                @endforeach
                            </div>
                            <div class="flex flex-row text-[0.85rem] gap-[2px]">
                                <span>0</span>
                                <span>sold</span>
                            </div>
                        </div>
                        <span class="text-[0.85rem]">
                            Ha Noi
                        </span>
                    </div>
                </a>
                <a href="{{ route('detail') }}" class="flex flex-col product transition ease-in-out hover:-translate-y-1 hover:scale-110 duration-300">
                    <img src="{{ asset('storage/product_image/no_product.png') }}" alt="">
                    <div class="flex flex-col gap-[0.5rem] p-[0.5rem]">
                        <span class="title_product text-[0.85rem]">
                            Test product Test product Test product Test product Test product Test product
                        </span>
                        <div class="flex flex-row items-center">
                            <span class="price_old">
                                110000
                            </span>
                            <span class="price_product">120000</span>
                        </div>
                        <div class="flex flex-row items-center gap-[12px]">
                            <div class="flex flex-row">
                                @foreach(range(1,5) as $j)
                                    <span class="fa-stack" style="width:0.7em">
                                        <i class="fas text-[10px] fa-star fa-stack-1x"></i>
                                    </span>
                                @endforeach
                            </div>
                            <div class="flex flex-row text-[0.85rem] gap-[2px]">
                                <span>0</span>
                                <span>sold</span>
                            </div>
                        </div>
                        <span class="text-[0.85rem]">
                            Ha Noi
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
