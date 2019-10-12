<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class request extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'source','des', 'date', 'time','user_id',
    ];

}
