<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
  protected $fillable = ['title', 'body', 'imageURL', 'author'];

    public function comments()
      {
        return $this->hasMany(Comment::class);
      }

  public function addComment(Comment $comment) //Would hard code User $user
      {
        return $this->comments()->save($comment);
      }

  public function tags()
      {
        return $this->belongsToMany(Tag::class, 'blogpost_tag')->withTimestamps();
      }

      public function tagCount()
      {

      }

  public function categories()
      {
        return $this->belongsToMany(Category::class, 'blogpost_category')->withTimestamps();
      }

      public function categoryCount()
      {

      }

}
