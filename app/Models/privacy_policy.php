<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class privacy_policy extends Model
{
	use HasFactory;
	protected $table = 'privacy_policy';

	// public function getImagesAttribute($value)
	// {
	// 	return asset('storage/app/admin/homepage/images/' . $value);
	// }
	
	public function getImageAttribute($value)
	{
		return asset('storage/app/admin/homepage/images/' . $value);
	}
}
