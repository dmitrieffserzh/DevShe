<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesField extends Model
{
    use HasFactory;

    protected $table = 'services_field';

    protected $fillable = [
        'service_id',
        'name',
    ];

    protected $hidden = [

    ];





    public function services() {
        return $this->belongsTo(Service::class, 'service_id');
    }

    public function field() {
        return $this->hasMany(Field::class, 'field_id');
    }
}
