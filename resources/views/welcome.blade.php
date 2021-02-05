@extends('layout')

@section('content')
    <div class="h-screen w-full grid grid-cols-24 grid-rows-24 bg-gray-50">
        {{-- NAVIGATION START --}}
        <div class="col-start-1 col-end-25 row-start-1 row-end-3 border-b border-gray-200">
            <div class="h-full w-11/12 mx-auto flex justify-between">
                <div class="flex items-center">
                    <a href="/" class="flex">
                        <i class="fas fa-blog text-2xl font-semibold text-green-400"></i>
                        <h3 class="text-2xl ml-2 font-semibold text-gray-800 hover:text-gray-600 transition duration-300 ease-in-out">Blog</h3>
                    </a>
                </div>
                <div>
                    <ul class="flex flex-row items-center h-full">
                        <li class="mr-10"><a href="/" class="text-md font-semibold hover:text-green-400 transition duration-300 ease-in-out">Home</a></li>
                        @if (Auth::check())
                            <li class="mr-10"><a href="/dashboard" class="text-md font-semibold hover:text-green-400 transition duration-300 ease-in-out">Dashboard</a></li>
                        @else
                            <li class="mr-10"><a href="/login" class="text-md font-semibold hover:text-green-400 transition duration-300 ease-in-out">Login</a></li>
                            <li><a href="/register" class="text-md font-semibold hover:text-green-400 transition duration-300 ease-in-out">Register</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        {{-- NAVIGATION END --}}

        <div class="col-start-1 col-end-25 row-start-3 row-end-25">
            <div class="h-full w-11/12 mx-auto grid grid-cols-8">
                <div class="h-full col-start-1 col-end-2">
                    <div class="pt-6 pb-6">
                        <h3 class="text-2xl font-semibold text-gray-800">Categories</h3>
                    </div>
                    <div>
                        <ul class="flex-column">
                            <li class="mb-2">
                                <i class="fas fa-globe-europe text-lg"></i>
                                <a href="#" class="text-lg pl-1 hover:text-green-400 transition duration-300 ease-in-out">Breaking news</a>
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-map-marker-alt text-lg"></i>
                                <a href="#" class="text-lg pl-1 hover:text-green-400 transition duration-300 ease-in-out">Local</a>
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-smile-beam text-lg"></i>
                                <a href="#" class="text-lg pl-1 hover:text-green-400 transition duration-300 ease-in-out">Positive</a>
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-microscope text-lg"></i>
                                <a href="#" class="text-lg pl-1 hover:text-green-400 transition duration-300 ease-in-out">Science</a>
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-heartbeat text-lg"></i>
                                <a href="#" class="text-lg pl-1 hover:text-green-400 transition duration-300 ease-in-out">Health</a>
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-futbol text-lg"></i>
                                <a href="#" class="text-lg pl-1 hover:text-green-400 transition duration-300 ease-in-out">Sport</a>
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-money-bill-alt text-lg"></i>
                                <a href="/finance" class="text-lg pl-1 hover:text-green-400 transition duration-300 ease-in-out">Finance</a>
                            </li>
                            <li class="mb-2">
                                <i class="fab fa-pagelines text-lg"></i>
                                <a href="#" class="text-lg pl-1 hover:text-green-400 transition duration-300 ease-in-out">Lifestyle</a>
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-landmark text-lg"></i>
                                <a href="#" class="text-lg pl-1 hover:text-green-400 transition duration-300 ease-in-out">Politics</a>
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-balance-scale-right text-lg"></i>
                                <a href="#" class="text-lg pl-1 hover:text-green-400 transition duration-300 ease-in-out">Crime</a>
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-camera text-lg"></i>
                                <a href="#" class="text-lg pl-1 hover:text-green-400 transition duration-300 ease-in-out">Celebrity</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="h-full col-start-2 col-end-9 grid grid-cols-12 grid-rows-6">
                    <div class="col-start-1 col-end-10 row-start-1 row-end-5 grid grid-cols-3 grid-rows-6">
                        <div class="col-start-1 col-span-3 row-start-1 row-end-2 flex items-center justify-start">
                            <h1 class="text-4xl text-gray-800 font-semibold">Breaking news</h1>
                        </div>

                        <div class="col-start-1 col-end-2 row-start-2 row-end-7 grid grid-rows-6 w-11/12">
                            <div class="row-start-1 row-end-5">
                                <img src="/images/test-image.jpg" alt="" class="block h-full">
                            </div>
                            <div class="row-start-5 row-end-7">
                                <p class="text-sm pt-2">{{ $posts[0]->created_at}}</p>
                                <a class="text-lg font-semibold pt-2 hover:text-green-400 transition duration-300 ease-in-out" href="#">
                                    {{ $posts[0]->title}}
                                </a>
                                <div class="pt-2">
                                    <a href="#" class="text-sm p-0.5 hover:text-green-400 transition duration-300 ease-in-out">Breaking news</a>
                                    <a href="#" class="text-sm p-0.5 hover:text-green-400 transition duration-300 ease-in-out">Breaking news</a>
                                    <a href="#" class="text-sm p-0.5 hover:text-green-400 transition duration-300 ease-in-out">Breaking news</a>
                                    <a href="#" class="text-sm p-0.5 hover:text-green-400 transition duration-300 ease-in-out">Breaking news</a>
                                    <a href="#" class="text-sm p-0.5 hover:text-green-400 transition duration-300 ease-in-out">Breaking news</a>
                                    <a href="#" class="text-sm p-0.5 hover:text-green-400 transition duration-300 ease-in-out">Breaking news</a>
                                    <a href="#" class="text-sm p-0.5 hover:text-green-400 transition duration-300 ease-in-out">Breaking news</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-start-2 col-end-3 row-start-2 row-end-7 grid grid-rows-6 w-11/12">
                            <div class="row-start-1 row-end-5">
                                <img src="/images/test-image.jpg" alt="" class="block h-full">
                            </div>
                            <div class="row-start-5 row-end-7">
                                <p class="text-sm pt-2">{{ $posts[1]->created_at}}</p>
                                <a class="text-lg font-semibold pt-2 hover:text-green-400 transition duration-300 ease-in-out" href="#">
                                    {{ $posts[1]->title}}
                                </a>
                                <div class="pt-2">
                                    <a href="#" class="text-sm p-0.5 hover:text-green-400 transition duration-300 ease-in-out">Breaking news</a>
                                    <a href="#" class="text-sm p-0.5 hover:text-green-400 transition duration-300 ease-in-out">Breaking news</a>
                                    <a href="#" class="text-sm p-0.5 hover:text-green-400 transition duration-300 ease-in-out">Breaking news</a>
                                    <a href="#" class="text-sm p-0.5 hover:text-green-400 transition duration-300 ease-in-out">Breaking news</a>
                                    <a href="#" class="text-sm p-0.5 hover:text-green-400 transition duration-300 ease-in-out">Breaking news</a>
                                    <a href="#" class="text-sm p-0.5 hover:text-green-400 transition duration-300 ease-in-out">Breaking news</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-start-3 col-end-4 row-start-2 row-end-7 grid grid-rows-6 w-11/12">
                            <div class="row-start-1 row-end-5">
                                <img src="/images/test-image.jpg" alt="" class="block h-full">
                            </div>
                            <div class="row-start-5 row-end-7">
                                <p class="text-sm pt-2">{{ $posts[2]->created_at}}</p>
                                <a class="text-lg font-semibold pt-2 hover:text-green-400 transition duration-300 ease-in-out" href="#">
                                    {{ $posts[2]->title}}
                                </a>
                                <div class="pt-2">
                                    <a href="#" class="text-sm p-0.5 hover:text-green-400 transition duration-300 ease-in-out">Breaking news</a>
                                    <a href="#" class="text-sm p-0.5 hover:text-green-400 transition duration-300 ease-in-out">Breaking news</a>
                                    <a href="#" class="text-sm p-0.5 hover:text-green-400 transition duration-300 ease-in-out">Breaking news</a>
                                    <a href="#" class="text-sm p-0.5 hover:text-green-400 transition duration-300 ease-in-out">Breaking news</a>
                                    <a href="#" class="text-sm p-0.5 hover:text-green-400 transition duration-300 ease-in-out">Breaking news</a>
                                    <a href="#" class="text-sm p-0.5 hover:text-green-400 transition duration-300 ease-in-out">Breaking news</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-start-10 col-end-13 row-start-1 row-end-3 grid grid-cols-2 grid-rows-6 bg-gray-100">

                    </div>
                    <div class="col-start-10 col-end-13 row-start-3 row-end-5 grid grid-cols-2 grid-rows-6 bg-gray-100">

                    </div>

                    <div class="col-start-1 col-end-4 row-start-5 row-end-7 grid grid-cols-2 grid-rows-6">
                        <div class="col-span-2 row-start-1 row-end-2 flex items-center">
                            <h3 class="text-md font-semibold text-gray-800">Positive</h3>
                        </div>

                        <div class="col-start-1 col-end-2 row-span-6 w-8/12 justify-self-start">
                            <img src="/images/test-image.jpg" alt="" class="block">
                            <a href="#" class="text-xs font-semibold hover:text-green-400 transition duration-300 ease-in-out">{{ $posts[3]->title }}</a>
                        </div>
                        
                        <div class="col-start-2 col-end-3 row-span-6 w-8/12 justify-self-start">
                            <img src="/images/test-image.jpg" alt="" class="block">
                            <a href="#" class="text-xs font-semibold hover:text-green-400 transition duration-300 ease-in-out">{{ $posts[4]->title }}</a>
                        </div>
                    </div>
                    <div class="col-start-4 col-end-7 row-start-5 row-end-7 grid grid-cols-2 grid-rows-6">
                        <div class="col-span-2 row-start-1 row-end-2 flex items-center">
                            <h3 class="text-md font-semibold text-gray-800">Politics</h3>
                        </div>

                        <div class="col-start-1 col-end-2 row-span-6 w-8/12 justify-self-start">
                            <img src="/images/test-image.jpg" alt="" class="block">
                            <a href="#" class="text-xs font-semibold hover:text-green-400 transition duration-300 ease-in-out">{{ $posts[5]->title }}</a>
                        </div>
                        
                        <div class="col-start-2 col-end-3 row-span-6 w-8/12 justify-self-start">
                            <img src="/images/test-image.jpg" alt="" class="block">
                            <a href="#" class="text-xs font-semibold hover:text-green-400 transition duration-300 ease-in-out">{{ $posts[6]->title }}</a>
                        </div>
                    </div>
                    <div class="col-start-7 col-end-10 row-start-5 row-end-7 grid grid-cols-2 grid-rows-6">
                        <div class="col-span-2 row-start-1 row-end-2 flex items-center">
                            <h3 class="text-md font-semibold text-gray-800">Crime</h3>
                        </div>

                        <div class="col-start-1 col-end-2 row-span-6 w-8/12 justify-self-start">
                            <img src="/images/test-image.jpg" alt="" class="block">
                            <a href="#" class="text-xs font-semibold hover:text-green-400 transition duration-300 ease-in-out">{{ $posts[7]->title }}</a>
                        </div>
                        
                        <div class="col-start-2 col-end-3 row-span-6 w-8/12 justify-self-start">
                            <img src="/images/test-image.jpg" alt="" class="block">
                            <a href="#" class="text-xs font-semibold hover:text-green-400 transition duration-300 ease-in-out">{{ $posts[8]->title }}</a>
                        </div>
                    </div>
                    <div class="col-start-10 col-end-13 row-start-5 row-end-7 grid grid-cols-2 grid-rows-6 bg-gray-100">
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection