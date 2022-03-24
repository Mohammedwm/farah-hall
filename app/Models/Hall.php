<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    use HasFactory;

    protected $fillable =
        ['user_id','owner_name','hall_name','address','created_date','size','min_count','max_count'];

    public function user()
    {
        return $this->belongsTo(User::class);

    }
}
