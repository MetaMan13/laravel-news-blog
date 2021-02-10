<div class="h-auto grid-flow-row w-4/12 mt-6 mx-auto bg-white rounded-lg mb-24">
    <div class="text-left flex justify-between">
        {{-- ROUTE AND POST TITLE --}}
        <a href="/post/{{$id}}" class="text-2xl font-semibold text-gray-800 hover:text-green-400 transition duration-250 ease-in-out">{{ $name }}</a>
        @if (\App\Models\Post::find($id)->user->id == auth()->id())
        <a href="/post/edit" class="text-md self-end group transition duration-250 ease-in-out hover:text-gray-800">Edit <i class="fas fa-edit text-md ml-0.5 group-hover:text-green-400 transition duration-250 ease-in-out"></i></a>
        @endif
    </div>
    <div class=" mb-3 mt-1 text-left">
        {{ $slot }}
    </div>
    <div class="h-80 bg-local bg-cover bg-no-repeat bg-center" style="background-image: url('/images/nature.jpg')"></div>
    <div class="mt-2 text-left">
        {{-- POST BODY --}}
        <p class="overflow-clip overflow-hidden h-24 text-md">{{ $body }}</p>
    </div>
</div>