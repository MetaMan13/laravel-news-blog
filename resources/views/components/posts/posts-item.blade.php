<div class="h-auto grid-flow-row w-4/12 mt-6 mx-auto bg-white rounded-lg mb-24">

    <div class="text-left flex flex-row justify-between mb-3">
        <div class="flex">
            <img src="/images/user.png" alt="" class="self-center">
            <a href="#" class="ml-2 self-center text-md">{{ $userName }}</a>
        </div>
        @if (\App\Models\Post::find($id)->user->id == auth()->id())
            <a href="/post/edit?postId={{ $id }}" class="text-sm self-center group transition duration-250 ease-in-out hover:text-gray-800">Edit <i class="fas fa-edit text-md ml-0.5 group-hover:text-green-400 transition duration-250 ease-in-out"></i></a>
        @endif
    </div>
    {{ $slot }}
</div>