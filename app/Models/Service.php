<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model {
    use HasFactory;

    protected $table = 'services';

    protected $fillable = [
        'name',
    ];

    protected $hidden = [

    ];

    public function servicesField() {
        return $this->hasMany( ServicesField::class, 'service_id' );
    }
}
