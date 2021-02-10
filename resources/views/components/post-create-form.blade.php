<div class="h-5/6 w-4/12 mt-28 mx-auto">
    <div class="h-auto w-10/12 text-start mx-auto mt-8">
        @if (Session::has('postCreatedSuccess'))
            <div class="bg-green-600 text-center flex justify-center p-2">
                <h3 class="self-center text-white">Post created successfully!</h3>
                <i class="fas fa-check self-center text-white ml-2"></i>
            </div>
        @else
            <h2 class="text-semibold text-gray-600 text-4xl font-bold">Create new post</h2>
        @endif
    </div>
    <div class="h-5/6 mt-10">
        <form action="/post/store" class="w-full h-full" method="POST">
            @csrf
            @method('POST')
            <div class="flex flex-col w-10/12 mx-auto group">
                <label for="" class="font-semibold text-lg text-gray-600">Post title</label>
                @if (Session::has('postTitleError'))
                    <input type="text" name="postTitle" class="text-sm outline-none mt-2 bg-gray-50 border-2 border-red-400 focus:border-green-400 focus:ring-0 transition duration-250 ease-in-out" required>
                    <p class="text-red-400 text-sm pt-1">{{ Session::get('postTitleError') }}</p>
                @else
                    <input type="text" name="postTitle" class="text-sm outline-none mt-2 bg-gray-50 border-2 border-gray-200 focus:border-green-400 focus:ring-0 transition duration-250 ease-in-out" required>
                @endif
            </div>
            <div class="w-10/12 mx-auto mt-8">
                <label for="selectMenu" class="w-full font-semibold text-lg">Tags</label>
                <select required name="tags[]" id="selectMenu" multiple class="appearance-none w-full flex text-md mt-2 bg-gray-50 border-2 border-gray-200 focus:border-green-400 focus:ring-0">
                    {{ $slot }}
                </select>
            </div>
            <div class="flex flex-col w-10/12 mx-auto mt-8">
                <label for="" class="font-semibold text-lg">Post body</label>
                <textarea name="postBody" id="" cols="50" rows="10" class="resize-none text-sm mt-2 bg-gray-50 border-2 border-gray-200 focus:border-green-400 focus:ring-0 transition duration-250 ease-in-out" required></textarea>
            </div>
            <div class="mt-6 w-10/12 mx-auto text-center">
                <button type="submit" class="w-full bg-green-400 text-white font-semibold text-xl uppercase p-2 transition duration-250 ease-in-out hover:bg-green-600">Create post</button>
            </div>
        </form>
    </div>
</div>