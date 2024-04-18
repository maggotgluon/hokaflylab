<div class="grid gap-2 p-4 px-8 h-svh">
    <div>
        <h2 class="text-xl font-bold">WELCOME TO</h2>
        <a href="{{route('home')}}">
        <img src="{{asset('img/hokaflylabtype.png')}}"/>
        </a>
    </div>
    <div>
        <form class="grid gap-4 py-4" wire:submit.prevent="authenticate">
            <label for="name">NAME</label>
            <x-input wire:model.lazy="name"/>
            <label for="phone">PHONE NO.</label>
            <x-input wire:model.lazy="phone"/>
            
        <x-button outline white label="LOGIN" type="submit" wire:click="authenticate"/>
        <x-button outline white label="REGISTER" :href="route('client.register')"/>
        </form>
        
        
    </div>
    <div>
        <img class="m-auto" src="{{asset('img/flylablogotype.png')}}"/>
    </div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
</div>
