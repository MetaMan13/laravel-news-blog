<div class="ml-20 h-5/6 mt-6 w-4/12 p-6">
    <form>
        <div class="flex flex-col">
            <label for="postTitle" class="text-2xl mb-3 font-semibold">Post title</label>
            <input type="text" id="postTItle" name="postTitle" value="{{ $title }}" class="border-gray-400 transition duration-250 ease-in-out focus:ring-2 focus:ring-green-400 focus:outline-none focus:border-transparent">
        </div>

        <div class="mt-8">
            <div class="">
                <label for="" class="text-2xl mb-2 font-semibold">Post tags</label>
                <p class="text-sm mt-1">Click on any tag to remove it</p>
            </div>
            <div class="mt-4">
                {{ $slot }}
            </div>
        </div>

        <div class="mt-8 flex flex-col">
            <label for="postBody" class="text-2xl mb-3 font-semibold">Post body</label>
            <textarea name="postBody" id="" cols="30" rows="10" class="border-gray-400 resize-none transition duration-250 ease-in-out focus:ring-2 focus:ring-green-400 focus:outline-none focus:border-transparent">{{ $body }}</textarea>
        </div>

        <div class="mt-6 text-center">
            <button type="submit" class="bg-gray-800 text-gray-50 p-2 uppercase text-lg transition duration-250 ease-in-out hover:bg-green-400 font-semibold">Update post</button>
        </div>
    </form>
</div>