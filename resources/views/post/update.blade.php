<x-layout>
    <x-main-container>
        <x-navigation></x-navigation>
        <x-posts-edit-form postTitle="{{ $post->title }}" postBody="{{ $post->body }}" postId="{{ $post->id }}">
            @foreach ($post->tags as $tag)
            <x-form-option-item id="{{ $tag->id }}">{{ $tag->name }}</x-form-option-item>
            @endforeach
        </x-posts-edit-form>
    </x-main-container>
</x-layout>