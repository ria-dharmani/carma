<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Confirm extends Model
{
    protected $table = 'confirms';
    public $primaryKey = 'id';
    public $timestamps = false;
    // protected $fillable = [
    //     'time','user_id',
    // ];
}
