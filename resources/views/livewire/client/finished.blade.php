<div class="grid gap-2 p-4 px-8 h-svh overflow-auto soft-scrollbar max-w-md w-full m-auto">
    <div>
        <div class="flex justify-between items-center">
            <a href="{{route('home')}}">
        <img src="{{asset('img/hokalogotype.png')}}"/>
            </a>
        <x-button.circle lg white icon="download" wire:click="screenshot"/>
        </div>
        <h2 class="text-xl font-bold">GET STAMP TO GET</h2>
        <h2 class="text-xl font-bold">THE BIG MOVE FROM OUR FLYLAB</h2>
    </div>
    <div>
        <div class="flex gap-4 items-center justify-center text-lg font-bold">
            <div class="p-6 rounded-full aspect-square bg-white text-primary w-max h-auto grid place-content-center text-4xl font-bold">
                15%
            </div>
            DISCOUNT
        </div>
        <div class="p-4 m-auto text-center">
            <img class="m-auto" src="{{asset('img/barcode.png')}}"/>
        </div>
        <div class="flex gap-4 items-center justify-center text-lg font-bold">
            <img src="{{asset('img/flylablogo.png')}}"/>
            FLYLAB PIN
        </div>

        
    </div>
    <div>
        <img class="m-auto" src="{{asset('img/flylablogotype.png')}}"/>
    </div>

    
</div>
