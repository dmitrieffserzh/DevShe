<?php

namespace App\Models;

use Orchid\Attachment\Attachable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Rate extends Model {
    use HasFactory;
    use Attachable;
    use AsSource;

    protected $fillable = [
        'name',
        'description',
        'plan_one_name',
        'plan_one_price',
        'plan_two_name',
        'plan_two_price',
        'plan_three_name',
        'plan_three_price',
        'information',
    ];

    public $timestamps = false;
}
