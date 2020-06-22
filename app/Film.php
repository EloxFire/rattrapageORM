<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{

  protected $table = 'film';

  public function actor(){
    return $this->hasMany('App\Actor', 'actor_id')->withPivot('film_actor');
  }

  public function category(){
    return $this->belongsToMany('App\Category', 'category_id');
  }

  public function laguage(){
    return $this->hasMany('App\Language', 'language_id');
  }

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'film_id', 'title', 'description', 'release_year', 'original_language_id', 'rental_duration', 'rental_rate',
      'lenght', 'replacement_cost', 'rating', 'special_features', 'last_update';
  ];
}
