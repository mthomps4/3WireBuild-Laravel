<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['name'];

    public function blogpost()
    {
      return $this->belongsToMany(Blogpost::class);
    }
}
