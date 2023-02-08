@extends('layout.master')

@section('content')
    <div class="flex flex-row">
        {{--        Filter          --}}
        @include('partial.filter', ['genreList' => $genreList])
        {{--        End filter          --}}
        {{--        Main product list       --}}
        <div class="flex product_area flex-col">
{{--            <div class="flex flex-row items-center">--}}
{{--                <i class="fa-regular fa-lightbulb mr-[12px]"></i>--}}
{{--                <span>--}}
{{--                    Search result for '--}}
{{--                </span>--}}
{{--                <span class="text-[#566FEF]">--}}
{{--                    áo--}}
{{--                </span>--}}
{{--                <span>--}}
{{--                    '--}}
{{--                </span>--}}
{{--            </div>--}}
            <div id="product_result">
                <div class="product_list_search grid grid-cols-5 mt-[2rem] gap-[8px]">
                    @foreach($productList as $product)
                        @include('partial.product_card', ['$product' => $product])
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        function routeFilterProduct() {
            return '{{ route('product.filter') }}'
        }
    </script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
