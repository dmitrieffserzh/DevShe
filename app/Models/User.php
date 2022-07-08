<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Orchid\Platform\Models\User as Authenticatable;
use Orchid\Attachment\Attachable;
use Orchid\Screen\AsSource;

class User extends Authenticatable {
    use HasFactory;
    use Attachable;
    use AsSource;

    protected $table = 'users';

    protected $fillable = [
        'user_type',
        'name',
        'age',
        'city',
        'description',
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
