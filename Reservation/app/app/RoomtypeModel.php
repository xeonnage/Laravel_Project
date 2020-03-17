<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomtypeModel extends Model
{
    protected $table="Roomtype";
    protected $fillable = [
        'TypeName',
        'NemberPeople',
        'Dormitory_ID',

    ];
}
