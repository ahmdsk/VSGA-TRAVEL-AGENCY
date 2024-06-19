<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'location_id',
        'description',
        'image',
    ];

    public function location() {
        return $this->belongsTo(Location::class);
    }

    public function bookings() {
        return $this->hasMany(Booking::class);
    }
}
