<?php

namespace App\Models\Models;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;


    protected $table = 'fields';

    protected $fillable = [
        'profile_id',
        'field_id',
        'description'
    ];

    protected $hidden = [

    ];





    public function profile() {
        return $this->hasOne(Profile::class);
    }

    public function servicesField() {
        return $this->belongsTo(ServicesField::class, 'field_id');
    }
}
