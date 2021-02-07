<div class="h-auto grid-flow-row pb-24 w-4/12 mt-12">
    <div class="">
        {{-- ROUTE AND POST TITLE --}}
        <a href="/" class="text-2xl font-semibold text-gray-800 hover:text-green-400 transition duration-250 ease-in-out">{{ $name }}</a>
    </div>
    <div class=" mb-4 mt-4">
        {{ $slot }}
    </div>
    <div class="h-80 bg-local bg-cover bg-no-repeat" style="background-image: url('/images/big-image.jpg')"></div>
    <div class="mt-4">
        {{-- POST BODY --}}
        <p class="overflow-clip overflow-hidden h-24 text-md">{{ $body }}</p>
    </div>
</div>