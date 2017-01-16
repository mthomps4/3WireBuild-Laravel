<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Blogpost;
class categoryController extends Controller
{
    //
    public function getByCategory(Category $category)
      {
        $CategorySearch = Category::find($category->id);
        $posts = $CategorySearch->blogpost;
        $categoryName = $category->name;
        //For SideBar Content
        $tags = Tag::All();
        $categories = Category::All();
        $postsByDate = Blogpost::orderBy('created_at')->get();

        $posts_by_date = Blogpost::all()->groupBy(function($date) {
          return $date->created_at->format('F-Y');
        });

        return view('blog.index', compact('posts', 'categoryName', 'tags', 'categories', 'postsByDate', 'posts_by_date'));
      }
}
