<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'body', 'tags',
    ];

    protected $with=['user'];

    //Declaração n para 1
    public function user(){
        return $this->belongsTo(User::class);
    }
}
