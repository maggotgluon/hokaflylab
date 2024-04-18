<?php

namespace App\Livewire\Client;

use App\Models\client;
use Livewire\Component;

class Finished extends Component
{
    public client $client;
    public function mount(client $client){
        if(!$client){
            return redirect(route('home'));
        }
        $this->client = $client;
    }
    public function render()
    {
        return view('livewire.client.finished');
    }
    public function screenshot(){
        $this->client->remember_token=$this->client->remember_token??now()->unix();
        $this->client->save();
        $filename = 'HOKA FLYLAB '.$this->client->name.' '.$this->client->remember_token.".png";
        return response()->download(public_path('/img/finishedshot.png'),$filename);
        
    }
}
