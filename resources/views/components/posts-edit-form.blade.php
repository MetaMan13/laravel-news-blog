<div class="h-5/6 w-4/12 mt-28 mx-auto">
    <div class="h-auto w-10/12 text-start mx-auto mt-8">
        <h2 class="text-semibold text-gray-600 text-4xl font-bold">Edit post</h2>
    </div>
    <div class="h-5/6 mt-10">
        <form action="/post/store" class="w-full h-full" method="POST">
            @csrf
            @method('PUT')
            <div class="flex flex-col w-10/12 mx-auto group">
                <label for="" class="font-semibold text-lg text-gray-600">Post title</label>
                <input value="{{ $postTitle }}" type="text" name="postTitle" class="text-sm outline-none mt-2 bg-gray-50 border-2 border-gray-200 focus:border-green-400 focus:ring-0 transition duration-250 ease-in-out" required>
            </div>
            <div class="w-10/12 mx-auto mt-8">
                <label for="selectMenu" class="w-full font-semibold text-lg">Tags</label>
                <select required name="tags[]" id="selectMenu" multiple class="appearance-none w-full flex text-md mt-2 bg-gray-50 border-2 border-gray-200 focus:border-green-400 focus:ring-0">
                    {{ $slot }}
                </select>
            </div>
            <div class="flex flex-col w-10/12 mx-auto mt-8">
                <label for="" class="font-semibold text-lg">Post body</label>
                <textarea name="postBody" id="" cols="50" rows="10" class="resize-none text-sm mt-2 bg-gray-50 border-2 border-gray-200 focus:border-green-400 focus:ring-0 transition duration-250 ease-in-out" required>{{ $postBody }}</textarea>
            </div>
            <div class="mt-6 w-10/12 mx-auto text-center">
                <button type="submit" class="w-full bg-green-400 text-white font-semibold text-xl uppercase p-2 transition duration-250 ease-in-out hover:bg-green-600">Create post</button>
            </div>
        </form>
    </div>
</div>