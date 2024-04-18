<div class="grid gap-2 p-4 px-8 bg-[#0785CA] h-svh">
    <div>
        <h1>HOLA<br>FLY LAB</h1>
        <h2>REGISTRATION</h2>
    </div>
    <div>
        <form class="grid gap-4 py-4" wire:submit.prevent="register">
        <x-input label="NAME" wire:model.lazy="name"/>
        <x-input label="PHONE NO." wire:model.lazy="phone"/>
        <x-input label="EMAIL" wire:model.lazy="email"/>
        <div class=" grid grid-cols-2 gap-4">
            <x-button label="CONFIRM" type="submit" wire:click="register"/>
            <x-button label="CANCEL" :href="route('home')"/>
        </div>
        </form>
        
        
    </div>
    <div>
        <img class="m-auto" src="{{asset('img/flylablogotype.png')}}"/>
    </div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
</div>
