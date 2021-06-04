<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'name', 'email', 'password','role_id','mobile','born'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public static function store($request)
    {
        $data = User::create([
            'name' => $request['txt_name'],
            'email' => $request['txt_email'],
            'password' => Hash::make($request['txt_password'])
        ]);
        $data->save();
        return $data->get();
    }

    public static function storeCustomer($request)
    {
        $customer = User::create([
            'name' => $request['name'],
            'mobile' => $request['mobile'],
            'born' => $request['born'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'role_id' => config('auth.role.customer')
        ]);
        $customer->save();
        return $customer;
    }
    public static function updatew($request, $user)
    {
        $user->name =$request['txt_name'];
        $user->email =$request['txt_email'];
        $user->password = Hash::make($request['txt_password']);

        $user->save();
        return $user->get();
    }

    public static function index()
    {
        $data = User::query()->get();
        return  $data;
    }
}
