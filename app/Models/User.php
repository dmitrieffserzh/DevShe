<?php

namespace App\Models;

use Orchid\Platform\Models\User as Authenticatable;

class User extends Authenticatable {
    protected $fillable = [
        'type',
        'email',
        'password',
        'permissions',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'permissions',
    ];

    protected $casts = [
        'permissions'       => 'array',
        'email_verified_at' => 'datetime',
    ];

    protected $allowedFilters = [
        'id',
        'email',
        'permissions',
    ];

    protected $allowedSorts = [
        'id',
        'email',
        'updated_at',
        'created_at',
    ];


    // RELATIONS
    public function profile() {
        return $this->hasOne( Profile::class );
    }
}
