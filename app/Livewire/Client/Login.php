<?php

namespace App\Livewire\Client;

use App\Models\client;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{
    /** @var string */
    public $name = '';

    /** @var string */
    public $phone = '';


    protected $rules = [
        'name' => ['required','regex:/^[a-zA-Z]+$/'],
        'phone' => ['required','numeric','min:10','regex:/^(?:\+?[1-9]\d{0,2})?\(?([0-9]{10,14})\)?$/'],
    ];

    public function mount(){
        Auth::logout();
        if(env('APP_DEBUG',true)){
            $this->name='user';
            $this->phone='0809166690';
        }
        
    }

    public function render()
    {
        return view('livewire.client.login');
    }

    public function authenticate(){
        $this->name = trim($this->name);
        $validateClient = $this->validate();
        $validateClient['password']=Hash::make($validateClient['phone']);
        $client = client::where('name',$validateClient['name'])->where('phone',$validateClient['phone'])->first();
        Auth::login($client);
        if(Auth::check()){
            return redirect()->intended(route('client.profile',$client));
        }
    }
}
