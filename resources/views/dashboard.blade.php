<x-app-layout>
    <div class="h-full max-w-7xl mx-auto bg-white">
        <div class="px-4 sm:px-6 lg:px-8 py-4">
            <h1 class="text-3xl font-semibold text-gray-800">{{ Auth::user()->name}}</h1>
        </div>
        <div class="w-full">
            <div class="h-16 flex">
                <div class="flex px-4 sm:px-6 lg:px-8 py-4">
                    <i class="fas fa-newspaper self-center"></i>
                    <h3 class="self-center ml-2">Posts: {{ count(Auth::user()->posts) }}</h3>
                </div>
                <div class="flex px-4 sm:px-6 lg:px-8 py-4">
                    <i class="fas fa-comment self-center"></i>
                    <h3 class="self-center ml-2">Posts liked: {{ count(\App\Models\Like::where('user_id', Auth::user()->id)->get()) }}</h3>
                </div>
                <div class="flex px-4 sm:px-6 lg:px-8 py-4">
                    <i class="fas fa-comment self-center"></i>
                    <h3 class="self-center ml-2">Comments: {{ count(\App\Models\Comment::where('user_id', Auth::user()->id)->get()) }}</h3>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>