<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomtypeModel extends Model
{
    protected $table="Roomtype";
    protected $fillable = [
        'TypeName',
        'Roomrate',
        'Dormitory_ID',

    ];
}
