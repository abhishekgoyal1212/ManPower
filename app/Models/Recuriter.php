<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Recuriter extends Authenticatable
{
    use HasFactory;
    protected $table = RECURITER;
    protected $guard = 'employer';
}
