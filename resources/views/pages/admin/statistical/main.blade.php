@extends('layout.admin.master')

@section('content')
    <div class="flex flex-col">
        <div class="mb-[2rem]">
            <input type="date" class="input_auth_username">
        </div>
        <div class="w-full">
            <canvas class="w-full" id="statisticalChart">

            </canvas>
        </div>
    </div>
@endsection

@section('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="module" src="{{ asset('assets/js/admin/statistical.js') }}"></script>
@endsection
