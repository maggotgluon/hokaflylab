<div class="grid gap-2 p-4 px-8 bg-[#0785CA] h-svh">
    <div>
        <a href="{{route('home')}}">
        <img src="{{asset('img/hokaflylabtype.png')}}"/>
        </a>
        <h2 class="text-xl font-bold">REGISTRATION</h2>
    </div>
    <div>
        <form class="grid gap-4 py-4" wire:submit.prevent="register">
        <label for="name">NAME</label>
        <x-input class="text-primary" auto-focus wire:model.lazy="name"/>
        <label for="phone">PHONE NO.</label>
        <x-input class="text-primary" wire:model.lazy="phone"/>
        <label for="email">EMAIL</label>
        <x-input class="text-primary" wire:model.lazy="email"/>
        <div class=" grid grid-cols-2 gap-4">
            <x-button outline white label="CONFIRM" type="submit" wire:click="register"/>
            <x-button outline white label="CANCEL" :href="route('home')"/>
        </div>
        </form>
        
        
    </div>
    <div>
        <img class="m-auto" src="{{asset('img/flylablogotype.png')}}"/>
    </div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
</div>
