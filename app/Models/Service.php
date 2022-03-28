<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['name','description'];

    public function hallServices()
    {
        return $this->belongsToMany(
            Service::class,
            'hall_services',
            'service_id',
            'hall_id',
            'id',
            'id'
        );
    }
}
