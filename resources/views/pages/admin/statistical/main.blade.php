@extends('layout.admin.master')

@section('content')
    <div class="flex flex-col">
        <div class="mb-[2rem]">
            <input type="month" class="input_auth_username" value="{{ \Carbon\Carbon::now()->format('Y-m') }}" name="statistical_time" id="statistical_time">
        </div>
        <div class="w-full">
            <canvas class="w-full" id="statisticalChart">

            </canvas>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        function routeCalculateStatistical() {
            return '{{ route('admin.statistical.calculate') }}'
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="module" src="{{ asset('assets/js/admin/statistical.js') }}"></script>
@endsection
