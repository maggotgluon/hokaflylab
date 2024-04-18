<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as Authenticatable;

class client extends Model implements Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
    ];


    public function getAuthIdentifierName(){
        return $this->name;
    }

    public function getAuthIdentifier(){
        return $this->id;
    }
    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberTokenName()
    {
        return false;
    }
    public function getRememberToken()
    {
        return false;
    }

    public function setRememberToken($value)
    {
        // return null;
        $this->remember_token = $value;
        $this->save();
    }

    public function getEmailForPasswordReset()
    {
        // You can implement email functionality here if needed
        // Currently, password reset via email is not supported for clients without email
        return null;
    }
}
