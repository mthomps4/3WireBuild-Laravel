<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Category;
use App\Blogpost;

class tagController extends Controller
{
    //
    public function getByTag(Tag $tag)
      {
        $tagSearch = Tag::find($tag->id);
        $posts = $tagSearch->blogpost;
        $tagName = $tag->name;

        //For SideBar Content
        $tags = Tag::All();
        $categories = Category::All();
        $postsByDate = Blogpost::orderBy('created_at')->get();

        $posts_by_date = Blogpost::all()->groupBy(function($date) {
          return $date->created_at->format('F-Y');
        });

        return view('blog.index', compact('posts', 'tagName', 'tags', 'categories', 'postsByDate', 'posts_by_date'));
      }
}
