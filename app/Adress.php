<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{

  protected $table = 'adress';

  public function actor(){
    return $this->belongsTo('App\Actor', 'actor_id');
  }

  public function payment(){
    return $this->hasMany('App\Payment', 'payment_id');
  }
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'adress_id', 'adress_id', 'adress', 'adress2', 'district', 'postal_code', 'phone', 'location', 'last_update';
  ];
}
