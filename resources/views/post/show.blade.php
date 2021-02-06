@extends('layout')

@section('content')
    <div class="h-screen w-full grid grid-cols-24 grid-rows-24 bg-gray-50">
        @include('components.navigation')
        <div class="col-start-1 col-end-25 row-start-3 row-end-25">
            <div class="h-full w-11/12 mx-auto grid grid-cols-8">
                <div class="h-full col-span-1">
                    @include('components.side-navigation')
                </div>
                <div class="bg-red-100 h-full col-span-6">
                    @foreach ($posts as $post)
                        <h3>{{ $post->id}}</h3>
                        <h3>{{ $post->title}}</h3>
                        <h3>Posted by: {{ $post->user['name']}}</h3>
                        @foreach ($post->tags as $tag)
                            <h5>{{ $tag->name }}</h5>
                        @endforeach
                    @endforeach
                </div>
                <div class="bg-red-300 h-full col-span-1"></div>
            </div>
        </div>
    </div>
@endsection