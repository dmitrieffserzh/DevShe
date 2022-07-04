<?php

namespace App\Models;

use Orchid\Filters\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Filterable;
    use HasFactory;

    protected $table = 'posts';

    protected $fillable = [
        'active',
        'title',
        'content'
    ];

    protected $allowedFilters = [ 'id', 'title'];
    protected $allowedSorts = [ 'id', 'active' ];
}
