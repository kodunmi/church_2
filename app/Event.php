<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'location', 'description', 'starting_date', 'starting_time', 'ending_date', 'ending_time', 'feature','image'];


    public function attendees()
    {
        return $this->hasMany(Attendee::class);
    }

}
