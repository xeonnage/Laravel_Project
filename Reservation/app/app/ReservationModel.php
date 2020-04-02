<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReservationModel extends Model
{
    protected $table="Reservations";
    protected $fillable = [
        'user_ID',
        'UserDetails_ID',
        'Description',
        'RoomCode_ID',
        'term',
        'BookingDate',
        'DueDate',
        'Status',
        'Detail',

    ];
}
