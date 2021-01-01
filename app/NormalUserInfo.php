<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class NormalUserInfo extends Model
{
	protected $table = 'normal_user_info';
	public $timestamps = false;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'uid', 'name', 'phone','email', 'gender', 'dob', 'city','profile_pic', 'password'
	];
}