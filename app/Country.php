<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

  protected $table = 'country';

  public function city(){
    return $this->hasMany('App\City')
  }
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'country_id', 'country', 'last_update';
  ];
}
