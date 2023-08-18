<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class RegistrationForm extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'registrationforms';
    protected $guard = 'Registrationform';
    protected $primarykey = 'User_ID';
    protected $fillable = ['First_Name','Last_Name','email','email_confirmation','password','password_confirmation','Gender','birthday_day','birthday_month','birthday_month','birthday_year','UserName'];
    // public $timestamps = false;


    protected $hidden = [
        'password','password_confirmation'
       ];

    }
