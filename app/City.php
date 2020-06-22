<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

  public function actor(){
    return $this->hasMany('App\Actor', 'actor_id');
  }

  public function inventory(){
    return $this->hasMany('App\Inventory', 'inventory_id');
  }

  public function store(){
    return $this->hasOne('App\Store', 'store_id');
  }
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'city_id', 'city', 'last_update';
  ];
}
