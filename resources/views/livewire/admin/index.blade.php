<div class="grid gap-2 p-4 px-8 h-svh overflow-auto soft-scrollbar max-w-md w-full m-auto">
    
    <div class="flex justify-between items-center">
        <a href="{{route('home')}}">
    <img src="{{asset('img/hokalogotype.png')}}"/>
        </a>
    </div>
    <div class="grid place-content-center">
    <x-button label="Download Data" lg white icon="download" wire:click="download"/>
    </div>
    <div>
        <img class="m-auto" src="{{asset('img/flylablogotype.png')}}"/>
    </div>
</div>
