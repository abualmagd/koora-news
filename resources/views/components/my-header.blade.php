


<div class="navbar w-full bg-base-100 ml-0 shadow-sm">
    <div class="flex-none">
        <a href="{{ route('home') }}" class="btn btn-square btn-ghost">
            <img src={{$logo}} alt={{$logoAlt}}>       
        </a>
      </div>
      <div class="flex-1">
        <a href="/" class="btn btn-ghost text-xl">{{$title}}</a>
      </div>
      <div class="flex-none">
        @if (app()->getLocale()=='en')

        <a href="{{ route('setLocale',['locale'=>'ar']) }}" class=" h-10 w-16 flex  justify-center items-center">
          <span class=" text-center mx-2"> ar</span>
          <img src="{{ asset('images/lang.svg') }}" class="h-8 w-8" alt="language logo">
        </a>
        @else
             <a href="{{ route('setLocale',['locale'=>'en']) }}" class=" h-10 w-16 flex  justify-center items-center">
              <span class=" text-center mx-2">en</span>
              <img src="{{ asset('images/lang.svg') }}" class="h-8 w-8" alt="language logo">
       
        </a>
        @endif
     
      </div>
  </div>