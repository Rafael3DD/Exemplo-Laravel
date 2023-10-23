<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'email',
        'address',

        //se voce remover algum registro dessa parte ele será ignorado no momento da inserção

    ];
}
