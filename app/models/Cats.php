<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Cats extends Eloquent {

  protected $fillable = array('name','date_of_birth','breed_id');

  public function breed(){
    return this->belongsTo('Breed');
  }
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'cats';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	//protected $hidden = array('password', 'remember_token');

}
