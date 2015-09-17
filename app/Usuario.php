<?php namespace couser;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use DB;

class Usuario extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;


	protected $table = 'usuarios';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['nombre','apellido', 'email', 'password','roles_id'];


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];


	public function setPasswordAttribute($pass)
	{	
		if (! empty($pass)) 
		{
			$this->attributes['password'] = \Hash::make($pass);
		}
	}

	public function scopeName($query,$name)
	{
		if (trim($name) != "") 
		{
			$query->where(DB::raw("CONCAT(nombre,'',apellido)"),"LIKE","%$name%");
		}
		
	}

	public function isAdmin()
	{
		return $this->roles_id == '1';
	}
}
