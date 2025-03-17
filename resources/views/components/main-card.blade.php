<a href="/post/{{ $article['uri'] }}" class='w-full'>
   <div class="card  cursor-pointer bg-base-100 image-full w-full h-full shadow-sm">
    <figure class="mg-holder">
      <img
        src="{{ $article['image'] }}"
        alt="{{ $article['source']['title'] }}" />
    </figure>
    <div class="mt-auto card-body pb-2 pr-2">
      
      <p class=" font-bold line-clamp-3">{{$article['title']}}</p>
        
         <p>{{$article['date']}}</p>     
   
         <p>

         </p>
    </div>
  </div> 
</a>
