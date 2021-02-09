<x-layout>
    <x-main-container>
        <x-navigation></x-navigation>
        <x-post-create-form>
            @foreach ($tags as $tag)
                <x-form-option-item id="{{ $tag->id }}">{{ $tag->name }}</x-form-option-item>
            @endforeach
        </x-post-create-form>
    </x-main-container>
</x-layout>