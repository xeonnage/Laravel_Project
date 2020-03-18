<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomTypeModel extends Model
{
    protected $table="RoomType";
    protected $fillable = [
        'TypeName',
        'NemberPeople',
        'Dormitory_ID',

    ];
}
