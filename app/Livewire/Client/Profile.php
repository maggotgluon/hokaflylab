<?php

namespace App\Livewire\Client;

use App\Models\client;
use Livewire\Component;

class Profile extends Component
{
    public client $client;
    public $data;

    protected $listeners = ['setFooProperty'];


    public function mount(client $client){
        $this->client = $client;
        // dd($client);
    }
    public function render()
    {
        return view('livewire.client.profile');
    }
    public function updatingData($data){
        if($data === env('QRMATCH','test')){
            $this->client->scandate=now();
            $this->client->save();
            return redirect(route('client.finished',$this->client));
        }
    }
}
