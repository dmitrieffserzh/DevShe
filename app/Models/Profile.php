<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Attachment\Attachable;
use Orchid\Screen\AsSource;

class Profile extends Model {
    use HasFactory;
    use Filterable;
    use Attachable;
    use AsSource;

    protected $table = 'profiles';

    protected $fillable = [
        'user_id',
        'active',
        'private',
        'express',
        'name',
        'phone',
        'whatsapp',
        'telegram',
        'age',
        'height',
        'weight',
        'breast_size',
        'breast_type',
        'appearance',
        'section',
        'meeting_place',
        'city',
        'haircolor',
        'haircut',
        'description',
        'balance',
    ];

    protected $hidden = [];

    public $timestamps = false;

    protected $allowedFilters = [ 'id', 'name', 'phone' ];
    protected $allowedSorts = [ 'id' ];


    // RELATIONS
    public function user() {
        return $this->belongsTo( User::class );
    }

    public function fields() {
        return $this->hasMany( Field::class );
    }

    public function stations() {
        return $this->belongsToMany( Station::class, 'profile_station' );
    }

    public function places() {
        return $this->belongsToMany( Place::class, 'profile_place' );
    }

    public function prices() {
        return $this->hasOne( Price::class );
    }
}
