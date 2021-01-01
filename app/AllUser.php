<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class AllUser extends Model
{
	protected $table = 'all_user';
	public $timestamps = false;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'name', 'phone','email', 'type', 'password',
	];
}