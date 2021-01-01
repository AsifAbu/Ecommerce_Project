<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class MerchantUserInfo extends Model
{
	protected $table = 'merchant_user_info';
	public $timestamps = false;
	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'mid', 'name', 'shope_name','acc_holder_name', 'phone', 'email', 'location','country', 'shop_type', 'password',
	];
}