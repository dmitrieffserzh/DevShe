<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Price extends Model {
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'day_one_hour_in',
        'day_two_hours_in',
        'day_one_hour_out',
        'day_two_hours_out',
        'night_one_hour_in',
        'night_two_hours_in',
        'night_one_hour_out',
        'night_two_hours_out',
        'night_all_in',
        'night_all_out'
    ];

    // RELATIONS
    public function profile() {
        return $this->belongsTo( Profile::class);
    }
}
