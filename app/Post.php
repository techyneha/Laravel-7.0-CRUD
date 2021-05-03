<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

class Post extends Model
{
	use SoftDeletes;
	
	protected $table = 'posts';

	public function user() {
		return $this->belongsTo('App\User');
	}

}
