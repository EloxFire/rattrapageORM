<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
  protected $table = 'rental';

  public function payment(){
    return $this->belongsTo("App\Payment", 'payment_id');
  }
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'rental_id', 'rental_date', 'return_date', 'last_update';
  ];
}
