<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $table = "events";
    public $timestamps = false;
    public $primaryKey = 'Event_ID';

        protected $fillable = [
        'Event_ID',
        'Event_Name',
        'Start_Date',
        'End_Date',
        'Latitude_deg',
        'Latitude_min',
        'Latitude_sec',
        'Longitude_deg',
        'Longitude_min',
        'Longitude_sec',
        'Description',
        'Image',
        'Additional_Info',
        'user_id',
    ];

    protected $guarded = [];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
