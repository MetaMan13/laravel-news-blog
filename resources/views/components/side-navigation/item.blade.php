<li class="mb-2 group grid grid-cols-8 grid-rows-1 hover:bg-white hover:shadow-md rounded-md w-10/12 p-0.5 transition duration-250 ease-in-out">
    @if ($route == $match)
        <i class="{{ $icons[$iconName] }} text-lg group-hover:text-green-400 transition duration-250 ease-in-out col-span-1 self-center p-1 active"></i>
    @else    
        <i class="{{ $icons[$iconName] }} text-lg group-hover:text-green-400 transition duration-250 ease-in-out col-span-1 self-center p-1"></i>
    @endif
    <a href="/{{ $route }}" class="text-lg group-hover:text-gray-900 transition duration-250 ease-in-out col-span-6 self-center ml-2.5">{{ $name }}</a>
    <i class="fas fa-caret-left text-gray-50 self-center text-center group-hover:text-gray-600 transition duration-250 ease-in-out col-span-1"></i>
</li>