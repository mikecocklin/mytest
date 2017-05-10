<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
	// protect from mass assignment vulnerabilities
    protected $fillable = [
		'make',
		'model',
		'produced_on'
	];
}
