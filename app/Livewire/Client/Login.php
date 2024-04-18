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
        // dd(auth());
        // if(auth()){
        //     return redirect()->intended(route('client.profile'));
        // }
    }

    public function render()
    {
        return view('livewire.client.login');
    }

    public function authenticate(){
        $validateClient = $this->validate();
        $validateClient['password']=Hash::make($validateClient['phone']);
        // dd($client);
        $client = client::where('name',$validateClient['name'])->where('phone',$validateClient['phone'])->first();
        // $fuser = User::first();
        // dd($client->getAuthIdentifierName(),
        // $client->getAuthIdentifier(),
        // $client->getAuthPassword());
        Auth::login($client);
        // Auth::guard('clients')->attempt(['name'=>$validateClient['name'],'password'=>$validateClient['password']]);
        // dd($client,Auth::check(),Auth::guard('clients')->login($client));
        if(Auth::check()){
            // dd(auth()->user()->name);
            // Auth::guard('clients')->login($client);
            // dd(auth());
            return redirect()->intended(route('client.profile',$client));
            // dd(Auth::user());
        }
        // dd('log');
        // dd('login',$client,$login);
    }
}
