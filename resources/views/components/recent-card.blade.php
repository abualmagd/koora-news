<a href="/post/{{ $article['uri'] }}" class="flex flex-col w-full">
    <figure class=" h-52 w-full img-holder">
        <img   src="{{ $article['image'] }}"
        class=" object-cover h-full w-full"
        onerror="this.onerror=null;this.source='{{ asset('images/logo.png') }}'"
        alt="{{ $article['source']['title'] }}">
    </figure>
    <p class=" line-clamp-3">
        {{ $article['title'] }}
    </p>
    <p class=" text-base-content/50 text-sm mt-1"> {{ $article['time'] }} </p>     

</a>