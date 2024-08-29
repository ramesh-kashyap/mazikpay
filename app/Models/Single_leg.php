<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Single_leg extends Model
{
    protected $fillable = [
        'user_id_fk', 'user_id','jdate','sponsor',
    ];

      public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    } 
}
