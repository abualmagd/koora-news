<div class="hero">
<div class=' hero-content  '>
    <div class="flex flex-col md:flex-row md:h-[500px]  ">
        <div class="md:w-1/2 p-1">
         <x-main-card  :article="$articles[0]"/>
        </div>
      
        <div class="flex-1 flex flex-col p-1 md:pr-0">
          <div class="md:flex w-full hidden mb-1 h-1/2">
          <x-main-card  :article="$articles[1]"/>
          </div>
      
          <div class="flex-1 flex  flex-row gap-2">
            <div class="w-1/2">
            <x-main-card  :article="$articles[2]"/>
            </div>
            <div class="w-1/2">
             <x-main-card  :article="$articles[3]"/>
            </div>
          </div>
          </div>
        </div>
      </div>
</div>
</div>