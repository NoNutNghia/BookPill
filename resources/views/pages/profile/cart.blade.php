@extends('pages.profile.account_page')

@section('content_profile')
    <div class="flex flex-auto flex-col gap-[12px]" id="cart">
        @if(count($foundProduct) > 0)
            <div class="flex flex-row justify-between items-center product_cart">
                <div class="flex flex-row items-center justify-center w-[5%]">
                    <input class="product_choice" type="checkbox">
                </div>
                <div class="flex flex-row w-[30%]">
                    Product
                </div>
                <div class="flex flex-row items-center justify-center w-1/5">
                    <span>
                        Unit Price
                    </span>
                </div>
                <div class="flex flex-row items-center w-[17%] justify-center">
                    <span>
                        Quality
                    </span>
                </div>
                <div class="flex flex-row items-center w-[13%] justify-center">
                    <span>
                        Total
                    </span>
                </div>

                <div class="flex flex-row items-center w-[10%] justify-center">
                    <span>
                        Action
                    </span>
                </div>
            </div>
            @foreach($foundProduct as $product)
                <div class="flex flex-row justify-between items-center product_cart" id="{{ $product->id }}">
                    <div class="flex flex-row items-center justify-center w-[5%]">
                        <input type="checkbox" class="product_choice" name="product_choice" value="{{ $product->id }}" id="">
                    </div>
                    <div class="flex flex-row w-[30%] items-center justify-between">
                        <img width="25%" class="image_border" style="aspect-ratio: 3/4" src="{{ asset('storage/product_image/' . $product->id . '/img1.jpg') }}" alt="">
                        <div class="w-[72%]">
                            <span>
                                {{ $product->title }}
                            </span>
                        </div>
                    </div>
                    <div class="flex flex-row items-center w-1/5 justify-center">
                        @if($product->discount == 0.0)
                            <span class="price_product text-[1rem]">{{ $product->price }}</span>
                        @else
                            <span class="price_old text-[1rem]">{{ $product->price }}</span>
                            @php( $priceAfterDiscount = $product->price -  ($product->price * $product->discount / 100) )
                            <span class="price_product text-[1rem]">{{ $priceAfterDiscount }}</span>
                        @endif
                    </div>
                    <div class="flex flex-row items-center w-[17%] justify-center">
                        <button class="increase_btn">
                            <span>
                                -
                            </span>
                        </button>
                        <input type="number" id={{ "qualityProduct" . $product->id }} class="input_number_product" value="1">
                        <button class="decrease_btn" onclick="changeQuality()">
                            <span>
                                +
                            </span>
                        </button>
                    </div>
                    <div class="flex flex-row items-center w-[13%] justify-center">
                        @if($product->discount != 0.0)
                            <span class="price_product text-[1rem]">{{ $priceAfterDiscount }}</span>
                        @else
                            <span class="price_product text-[1rem]">{{ $product->price }}</span>
                        @endif
                    </div>
                    <div class="flex flex-row items-center w-[10%] justify-center">
                        <span class="text-[1rem] remove_product_from_cart" onclick="removeProductFromCart(this)">Delete</span>
                    </div>
                </div>
            @endforeach
        @else
            <img src="{{asset("storage/product_image/no-product-found-image.png")}}">
        @endif
    </div>
@endsection
@section('script_account')
    <script type="text/javascript">
        function routeRemoveProductFromCart() {
            return "{{ route('account.remove_product') }}"
        }
        function imageNoProductFound() {
            return "{{ asset("storage/product_image/no-product-found-image.png") }}"
        }
    </script>
    <script src="{{ asset('assets/js/cart.js') }}"></script>
@endsection