<?php

namespace App;
use App\Models\Pedido;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','cpf','dtnascimento','created_at','updated_at','deleted_at'
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
        'dtnascimento' => 'datetime:d/m/Y',
    ];
    
        
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'dtnascimento',
    ];

    public function pedido(){
        return $this->hasMany('Pedido');
    }
}
