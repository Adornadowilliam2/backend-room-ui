<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    /**
     * 
     */

     protected $table = 'bookings';
     protected $fillable = [
        'user_id', 
        'room_id', 
        'subject_id', 
        'section_id',
        'start_time', 
        'end_time', 
        'day_of_week',
         'status', 
         'book_from',
         'book_until'
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }

    public function rooms(){
        return $this->belongsTo(Room::class);
    }

    public function roomtypes(){
        return $this->belongsTo(Room_type::class);
    }

    public function subjects(){
        return $this->belongsTo(Subject::class);
    }

    public function sections(){
        return $this->belongsTo(Section::class);
    }
}
