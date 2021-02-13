<x-layout>
    <x-main-container>
        <x-navigation/>
        <x-side-navigation.container>
            <x-side-navigation-item route="breaking-news" name="Breaking News" iconName="globe"></x-side-navigation-item>
            <x-side-navigation-item route="local" name="Local" iconName="location"></x-side-navigation-item>
            <x-side-navigation-item route="positive" name="Positive" iconName="positive"></x-side-navigation-item>
            <x-side-navigation-item route="science" name="Science" iconName="science"></x-side-navigation-item>
            <x-side-navigation-item route="health" name="Health" iconName="health"></x-side-navigation-item>
            <x-side-navigation-item route="sport" name="Sport" iconName="sport"></x-side-navigation-item>
            <x-side-navigation-item route="finance" name="Finance" iconName="finance"></x-side-navigation-item>
            <x-side-navigation-item route="lifestyle" name="Lifestyle" iconName="lifestyle"></x-side-navigation-item>
            <x-side-navigation-item route="politics" name="Politics" iconName="politics"></x-side-navigation-item>
            <x-side-navigation-item route="crime" name="Crime" iconName="crime"></x-side-navigation-item>
            <x-side-navigation-item route="celebrity" name="Celebrity" iconName="celebrity"></x-side-navigation-item>
        </x-side-navigation.container>
        <x-content-container>
            <x-posts.posts-content>
                @foreach ($posts as $post)
                <x-posts.posts-item id="{{$post->id}}" userName="{{ $post->user->name }}">
                    <x-posts.posts-title id="{{ $post->id }}">{{ $post->title }}</x-posts.posts-title>
                    <x-posts.posts-item-tags-container>
                        @foreach ($post->tags as $tag)
                        <x-posts-item-tag name="{{ $tag->name }}">
                            {{ $tag->name }}
                        </x-posts-item-tag>
                        @endforeach
                    </x-posts.posts-item-tags-container>
                    <x-posts.posts-picture></x-posts.posts-picture>
                    <x-posts.posts-comments-container>
                        @foreach ($post->comments as $comment)
                            <x-posts.posts-comment-item userName="{{ $comment->user->name }}">{{ $comment->body }}</x-posts.posts-comment-item>
                        @endforeach
                    </x-posts.posts-comments-container>
                </x-posts.posts-item>     
                @endforeach
            </x-posts.posts-content>
        </x-content-container>
    </x-main-container>
</x-layout>