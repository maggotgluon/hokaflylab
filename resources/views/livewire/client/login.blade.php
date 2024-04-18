<div class="grid gap-2 p-4 px-8 bg-[#0785CA] h-svh">
    <div>
        <h2>WELCOME TO</h2>
        <h1>HOLA<br>FLY LAB</h1>
    </div>
    <div>
        <form class="grid gap-4 py-4" wire:submit.prevent="authenticate">
            <x-input label="NAME" wire:model.lazy="name"/>
            <x-input label="PHONE NO." wire:model.lazy="phone"/>
            
        <x-button label="LOGIN" type="submit" wire:click="authenticate"/>
        <x-button label="REGISTER" :href="route('client.register')"/>
        </form>
        
        
    </div>
    <div>
        <img class="m-auto" src="{{asset('img/flylablogotype.png')}}"/>
    </div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
</div>
