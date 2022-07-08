<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Filters\Filterable;
use Orchid\Screen\AsSource;

class Testimonial extends Model
{
    use Filterable;
    use HasFactory;
    use AsSource;

    protected $fillable = [
        'active',
        'sort',
        'image',
        'title',
        'description',
        'button_link',
        'button_text'
    ];

    protected $allowedFilters = ['id', 'title', 'active'];
    protected $allowedSorts = ['id', 'active', 'sort'];
}
