<x-layout>
    <x-main-container>
        <x-navigation/>
        <x-side-navigation.container>
            <x-side-navigation-item route="breaking-news" name="Breaking News" iconName="globe" match="{{ $match }}"></x-side-navigation-item>
            <x-side-navigation-item route="local" name="Local" iconName="location" match="{{ $match }}"></x-side-navigation-item>
            <x-side-navigation-item route="positive" name="Positive" iconName="positive" match="{{ $match }}"></x-side-navigation-item>
            <x-side-navigation-item route="science" name="Science" iconName="science" match="{{ $match }}"></x-side-navigation-item>
            <x-side-navigation-item route="health" name="Health" iconName="health" match="{{ $match }}"></x-side-navigation-item>
            <x-side-navigation-item route="sport" name="Sport" iconName="sport" match="{{ $match }}"></x-side-navigation-item>
            <x-side-navigation-item route="finance" name="Finance" iconName="finance" match="{{ $match }}"></x-side-navigation-item>
            <x-side-navigation-item route="lifestyle" name="Lifestyle" iconName="lifestyle" match="{{ $match }}"></x-side-navigation-item>
            <x-side-navigation-item route="politics" name="Politics" iconName="politics" match="{{ $match }}"></x-side-navigation-item>
            <x-side-navigation-item route="crime" name="Crime" iconName="crime" match="{{ $match }}"></x-side-navigation-item>
            <x-side-navigation-item route="celebrity" name="Celebrity" iconName="celebrity" match="{{ $match }}"></x-side-navigation-item>
        </x-side-navigation.container>
        <x-content-container>
            <x-posts.posts-content>
                <x-posts.post-edit-form>
                    @foreach ($post->tags as $tag)
                        <a href="#" class="mr-2">{{ $tag->name }}</a>
                    @endforeach
                </x-posts.post-edit-form>
            </x-posts.posts-content>
        </x-content-container>
    </x-main-container>
</x-layout>