<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Page extends Model {
    use Filterable;
    use HasFactory;
    use AsSource;

    protected $table = 'pages';

    protected $fillable = [
        'active',
        'slug',
        'title',
        'content',
    ];

    protected $allowedFilters = [ 'id', 'title', 'active' ];
    protected $allowedSorts = [ 'id', 'active' ];

    public function getRouteKeyName() {
        return 'slug';
    }
}
