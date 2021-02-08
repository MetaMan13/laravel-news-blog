<div class="h-auto grid-flow-row w-4/12 mt-6 mx-auto bg-white rounded-lg shadow-inner border mb-24">
    <form method="POST" action="/post/{{$id}}/save">
        @csrf
        @method("POST")
        <div class="flex flex-col text-left pt-4 items-center">
            <label for="postTitle" class="text-2xl mb-2 font-semibold w-11/12">Post title</label>
            <input required value="{{ $title }}" type="text" id="postTItle" name="postTitle" value="" class="w-11/12 text-md border-gray-300 transition duration-250 ease-in-out focus:ring-2 focus:ring-green-400 focus:outline-none focus:border-transparent">
        </div>

        <div class="pt-8 text-left flex flex-col items-center">
            <div class="w-11/12">
                <label for="" class="text-2xl font-semibold">Post tags</label>
                <p class="text-xs mt-2">Click on any tag to remove it</p>
            </div>
            <div class="mt-4 w-11/12">
                {{ $slot }}
            </div>
        </div>

        <div class="pt-8 flex flex-col items-center text-left">
            <label for="postBody" class="text-2xl mb-2 font-semibold w-11/12">Post body</label>
            <textarea required name="postBody" id="" cols="30" rows="10" class="w-11/12 border-gray-300 resize-none transition duration-250 ease-in-out focus:ring-2 focus:ring-green-400 focus:outline-none focus:border-transparent">{{ $body }}</textarea>
        </div>

        <div class="pt-4 text-center pb-4">
            <button type="submit" class="rounded-lg bg-gray-800 text-gray-50 p-2 uppercase text-lg transition duration-250 ease-in-out hover:bg-green-400 font-semibold">Update post</button>
        </div>
    </form>
</div>