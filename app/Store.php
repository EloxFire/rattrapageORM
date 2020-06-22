<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{

  protected $table = 'store';

  public function city(){
    return $this->belongsToMany('App\City', 'city_id');
  }
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'store_id', 'last_update';
  ];
}
