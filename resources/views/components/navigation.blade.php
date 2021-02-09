<div class="fixed h-20 flex justify-between align-content-center w-9/12 z-10 bg-white">
    <div class="flex items-center">
        <a href="/" class="flex">
            <i class="fas fa-blog text-2xl font-semibold text-green-400"></i>
            <h3 class="text-2xl ml-2 font-semibold text-gray-800 hover:text-gray-600 transition duration-300 ease-in-out">Blog</h3>
        </a>
    </div>
    <div class="">
        <ul class="flex flex-row items-center h-full">
            <li class="mr-10"><a href="/" class="text-md font-semibold hover:text-green-400 transition duration-300 ease-in-out">Home</a></li>
            @if (Auth::check())
                <li class="mr-10"><a href="/dashboard" class="text-md font-semibold hover:text-green-400 transition duration-250 ease-in-out">Dashboard</a></li>
            @else
                <li class="mr-10"><a href="/login" class="text-md font-semibold hover:text-green-400 transition duration-300 ease-in-out">Login</a></li>
                <li><a href="/register" class="text-md font-semibold hover:text-green-400 transition duration-300 ease-in-out">Register</a></li>
            @endif
        </ul>
    </div>
</div>