<?php
namespace App;
use Eloquent;

class Apartment extends Eloquent
{
	protected $fillable =
	[
		'code',
		'owner',
		'phone',
		'email',
		'status'
	];
	protected $primaryKey = 'id';
	protected $table = 'apartments';
}
