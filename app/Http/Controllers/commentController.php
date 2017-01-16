<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogpost;
use App\Comment;

class commentController extends Controller
{
    //
    public function store(Request $request, Blogpost $blogpost)      //Card Id has been passed so you can pass in full card.
      {
        $this->validate($request, [
          'body'=> 'required', //'email' => 'email|unique:users'
          'user_name' => 'required'
        ]);

        $comment = new Comment($request->all());
        $blogpost->addComment($comment);
        return back(); //returns back to cards/1
      }
}
