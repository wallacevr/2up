<?php

namespace App\Models;
use App\Models\Produto;
use App\Models\Pedido;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Produto extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'descricao', 'valor','created_at','updated_at','deleted_at'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function pedido(){
        return $this->hasMany('App\Models\Pedido','produto_id','id');
    }
}
