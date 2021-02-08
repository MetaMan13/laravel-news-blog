<div class="h-auto grid-flow-row w-4/12 mt-6 mx-auto bg-white rounded-lg shadow-inner mb-24 border border-gray-200">
    <div class="text-left pt-3 pl-4">
        {{-- ROUTE AND POST TITLE --}}
        <a href="/post/{{$id}}" class="text-2xl font-semibold text-gray-800 hover:text-green-400 transition duration-250 ease-in-out">{{ $name }}</a>
    </div>
    <div class=" mb-3 mt-1 text-left pl-4">
        {{ $slot }}
    </div>
    <div class="h-80 bg-local bg-cover bg-no-repeat bg-center" style="background-image: url('/images/nature.jpg')"></div>
    <div class="mt-3 pl-4 pr-4 text-left">
        {{-- POST BODY --}}
        <p class="overflow-clip overflow-hidden h-24 text-md">{{ $body }}</p>
    </div>
</div>