<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{

  protected $table = 'staff';

  public function customer(){
    return $this->hasMany('App\Customer', 'customer_id');
  }
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'staff_id', 'first_name', 'last_name', 'picture', 'email', 'active', 'username', 'password', 'last_update';
  ];
}
