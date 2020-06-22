<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

  protected $table = 'customer';

  public function staff(){
    return $this->belongsToMany('App\Staff');
  }
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'customer_id', 'first_name', 'last_name', 'picture', 'email', 'active', 'username', 'password', 'last_update';
  ];
}
