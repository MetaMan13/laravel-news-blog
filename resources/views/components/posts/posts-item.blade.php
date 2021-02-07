<div class="h-auto grid-flow-row pb-24 w-4/12 mt-12">
    <div class="">
        {{-- ROUTE AND POST TITLE --}}
        <a href="/" class="text-2xl font-semibold text-gray-800 hover:text-green-400 transition duration-250 ease-in-out">{{ $name }}</a>
    </div>
    <div class=" mb-4 mt-4">
        {{ $slot }}
    </div>
    <div class="h-80 bg-local bg-cover bg-no-repeat" style="background-image: url('/images/big-image.jpg')"></div>
    <div class="mt-4">
        {{-- POST BODY --}}
        <p class="overflow-clip overflow-hidden h-24 text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum iure deserunt ea ipsa quasi est animi facere, consequatur saepe facilis magni porro, voluptatibus iste earum. Beatae id eveniet ad quisquam quod enim laudantium tempora culpa dolor cupiditate quas assumenda ipsum cum voluptates, pariatur possimus maiores unde nulla? Voluptate vitae asperiores quae in quasi. Odit nisi minus facere laborum incidunt vitae cumque reprehenderit earum! Nesciunt ex exercitationem unde sunt sit autem eveniet? Ratione, quia? Distinctio explicabo nam exercitationem earum, repudiandae delectus quaerat minima sapiente quod animi odio eum corrupti possimus at ipsam repellendus nesciunt obcaecati qui recusandae blanditiis ex commodi esse.</p>
    </div>
</div>