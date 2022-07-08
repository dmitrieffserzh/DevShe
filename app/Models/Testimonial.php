<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Testimonial extends Model {
    use Filterable;
    use HasFactory;
    use AsSource;

    protected $fillable = [
        'active',
        'profile_id',
        'user_id',
        'content',
    ];

    protected $allowedFilters = [ 'id', 'title', 'active' ];
    protected $allowedSorts = [ 'id', 'active', 'sort' ];

    // RELATIONS
    public function profile() {
        return $this->belongsTo( Profile::class );
    }

    public function userProfile() {
        return $this->belongsTo( User::class, 'user_id', 'id' );
    }
}
