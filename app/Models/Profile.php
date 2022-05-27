<?php

namespace App\Models;

use App\Models\Models\Field;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;


    protected $table = 'users_profiles';

    protected $fillable = [
        'user_id',
        'services_id',
        'name'
    ];

    protected $hidden = [

    ];



    public function fields() {
        return $this->hasMany(Field::class);
    }
}
