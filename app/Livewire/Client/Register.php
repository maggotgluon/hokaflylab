<?php

namespace App\Livewire\Client;

use App\Models\client;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    /** @var string */
    public $name = '';

    /** @var string */
    public $phone = '';

    /** @var string */
    public $email = '';

    protected $rules = [
        'name' => ['required','regex:/^[a-zA-Z]+$/'],
        'phone' => ['required','numeric','min:10','regex:/^(?:\+?[1-9]\d{0,2})?\(?([0-9]{10,14})\)?$/','unique:clients,phone'],
        'email' => ['required', 'email','unique:clients,email']
    ];

    public function mount(){
        if(env('APP_DEBUG',true)){
            $this->name='user';
            $this->phone='0809166690';
            $this->email='maggotgluon@gmail.com';
        }
    }

    public function render()
    {
        return view('livewire.client.register');
    }
    public function register(){
        $this->name = trim($this->name);
        $client = $this->validate();
        $client['password'] = Hash::make($client['phone']);
        $newClient = client::create($client);
        $newUser = User::create($client);

        if($newUser){
            return redirect(route('client.login'));
        }
    }
}
