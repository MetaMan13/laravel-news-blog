<div class="col-start-1 col-end-25 row-start-1 row-end-3 border-b border-gray-200 bg-white">
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