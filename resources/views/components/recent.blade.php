<section class="hero md:px-14 mb-10 flex flex-col gap-8">
    <div class="latest-title w-full border-b-2  border-gray-300 h-8 flex justify-items-start" >
        <span class=" bg-gray-300 p-2">  {{__('message.latestNews')}}</span>
    </div>
    <div class="flex w-full md:flex-row justify-center flex-wrap flex-col gap-2">
        @foreach ($articles as $article)
        <div class="md:w-60 px-5 md:px-0">
            <x-recent-card  :article="$article"/>
        </div>
          
        @endforeach
    </div>
</section>