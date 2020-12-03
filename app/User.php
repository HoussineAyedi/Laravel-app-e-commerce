<?php

namespace App;



use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // we are going here to do a method to see whether the admin column has 
    // the value nullable or other value if so we will count that user as an admin in our website
public function isAdmin()
    {
        return $this->admin;
        // we will return the admin column value that will help us later 
        // define if this user is an admin or no 
        // and then we will proceede with creating a middleware 
        // via the command pa make:middleware Admin
        // check that new middleware file created and then we are going to change things 
        // In the kernel.php under the app folder 
        // and finally we need to go to the web.php and to check things and
        // that's all 
    }

    public function address()
    {

        return $this->hasMany(Address::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    


}
