<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

  protected $table = 'payment';

  public function adress(){
    return $this->belongsTo('App\Adress', 'adress_id');
  }
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'payment_id', 'amount', 'payment_date', 'last_update';
  ];
}
