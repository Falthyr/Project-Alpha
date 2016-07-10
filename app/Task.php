<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = "Tasks";
	protected $fillable = ['name'];
	
	public function users()
	{
		$this->belongsTo(User::class);
	}
}
