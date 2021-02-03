@extends('layout')

@section('content')
    <div class="h-screen w-full grid grid-cols-24 grid-rows-24 bg-gray-50">
        {{-- NAVIGATION START --}}
        <div class="col-start-1 col-end-25 row-start-1 row-end-3 border-b border-gray-200">
            <div class="h-full w-11/12 mx-auto flex justify-between">
                <div class="flex items-center text-gray-600">
                    <a href="/" class="flex">
                        <i class="fas fa-blog text-2xl font-semibold text-green-400"></i>
                        <h3 class="text-2xl ml-2 font-semibold text-gray-800 hover:text-gray-600 transition duration-300 ease-in-out">Blog</h3>
                    </a>
                </div>
                <div>
                    <ul class="flex flex-row items-center h-full text-gray-600">
                        <li class="mr-8"><a href="/" class="text-md font-semibold hover:text-green-400 transition duration-300 ease-in-out">Home</a></li>
                        <li class="mr-8"><a href="/login" class="text-md font-semibold hover:text-green-400 transition duration-300 ease-in-out">Login</a></li>
                        <li><a href="/register" class="text-md font-semibold hover:text-green-400 transition duration-300 ease-in-out">Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
        {{-- NAVIGATION END --}}

        <div class="col-start-1 col-end-25 row-start-3 row-end-25 bg-gray-50">
            <div class="h-full w-11/12 mx-auto grid grid-cols-8">
                <div class="h-full col-start-1 col-end-2 border-r border-gray-200">
                    <div class="pt-6 pb-6">
                        <h3 class="text-2xl font-semibold text-gray-800">Categories</h3>
                    </div>
                    <div>
                        <ul class="text-gray-600 flex-column">
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
                                <a href="#" class="text-lg pl-1 hover:text-green-400 transition duration-300 ease-in-out">Finance</a>
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
                <div class="h-full col-start-2 col-end-9 bg-gray-100"></div>
            </div>
        </div>
    </div>
@endsection