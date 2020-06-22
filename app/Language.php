<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{

  protected $table = 'language';

  public function film(){
    return $this->belongsToMany('App\Film', 'film_id');
  }
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'language_id', 'name', 'last_update';
  ];
}
