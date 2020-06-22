<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{

  protected $table = 'actor';

  public function films(){
    return $this->belongsToMany('App\Film', 'film_actor', 'actor_id', 'film_id')->withPivot('film_actor');
  }

  public function adress(){
    return $this->hasOne('App\Adress', 'adress_id');
  }

  public

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'actor_id', 'first_name', 'last_name', 'last_update'
  ];

}
