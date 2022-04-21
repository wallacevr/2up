<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Produto extends Model
{
    //
    use SoftDeletes;
    protected $fillable = [
        'descricao', 'valor','created_at','updated_at'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
