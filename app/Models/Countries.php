<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Countries extends Model
{
    use HasFactory;
    protected $table = 'countries';

    public function City()
    {
        return $this->belongsTo(City::class,'id');
    }
    public function States()
    {
        return $this->belongsTo(States::class,'id');
    }
}
