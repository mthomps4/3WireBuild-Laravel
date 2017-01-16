<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name'];

    public function blogpost()
    {
      return $this->belongsToMany(Blogpost::class, 'blogpost_tag');
    }
}
