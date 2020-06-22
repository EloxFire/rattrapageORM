<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

  protected $table = 'category';

  public function film(){
    return $this->hasMany('App\Film', 'film_id');
  }
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'category_id', 'name', 'last_update';
  ];
}
