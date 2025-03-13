<div class=" flex  flex-col md:w-[700px] w-full mx-auto mt-10">
   <d class="flex  bg-base-content/10 px-4 h-14  rounded-sm items-center w-full justify-items-center text-xl font-bold ">
    <a href="{{ $post['url'] }}" > 
        {{ $post['source']['title'] }}
    </a>
   </d>
   <h1 class=" text-xl mb-4 font-bold m-2">
    {{ $post['title'] }}
   </h1>
   <p class=' text-base-content/50 '>
{{  $post['date']}} {{ " " }}{{ $post['time'] }}
    </p>
    <div class="divider"></div>
   <figure class=" h-96 w-full bg-gray-400">
    <img   src="{{ $post['image'] }}"
    class=" object-cover h-full w-full"
    onerror="this.onerror=null;this.source='{{ asset('images/logo.png') }}'"
    alt="{{ $post['source']['title'] }}">
</figure>
<p class=" text-lg font-semibold m-2">
    {{ $post['body'] }}
</p>
<a href="{{ $post['url'] }}"
target='_blank'
class=" btn  btn-square w-52 mx-auto my-6"
>
{{ __('message.publisher') }}
</a>
</div>