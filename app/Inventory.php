<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{

  protected $table = 'inventory';

  public function city(){
    return $this->hasOne('App\City', 'city_id');
  }
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

  protected $fillable = [
    'inventory_id', 'last_update';
  ];
}
