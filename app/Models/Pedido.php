<?php

namespace App\Models;
use App\Models\Produto;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Pedido extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'user_id','produto_id', 'qtd','created_at','updated_at','deleted_at'
    ];
    protected  $primaryKey = 'id';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function produto(){
        return $this->belongsTo('App\Models\Produto','produto_id','id');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }


}
