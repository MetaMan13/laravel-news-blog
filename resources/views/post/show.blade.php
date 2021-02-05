@extends('layout')

@section('content')
    <div class="h-screen w-full grid grid-cols-24 grid-rows-24 bg-gray-50">
        @include('components.navigation')
        <div class="col-start-1 col-end-25 row-start-3 row-end-25">
            <div class="h-full w-11/12 mx-auto grid grid-cols-8">
                <div class="h-full col-span-1">
                    @include('components.side-navigation')
                </div>
                <div class="bg-red-100 h-full col-span-6"></div>
                <div class="bg-red-300 h-full col-span-1"></div>
            </div>
        </div>
    </div>
@endsection