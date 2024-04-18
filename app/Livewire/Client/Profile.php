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
    public function updatedData($data){
        if($data = 'test'){
            return redirect(route('client.finished',$this->client));
        }
        // dd($data);
    }
    public function test() {
        dd('test');
    }
    public function setFooProperty($value) {
        dd($value);
    }
}
