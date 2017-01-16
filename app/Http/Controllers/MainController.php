<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Validator;
use Mail;


class MainController extends Controller
{

    public function index(){
      return view('welcome');
    }
    // 404 Page
    public function reroute(Request $request){
      $page = $request->page;
      return view('errors.404', compact('page'));
    }

    public function contact()
    {
      return view('contact');
    }

    public function projects()
    {
      return view('projects');
    }


    public function sendEmail(Request $request)
    {
      $data = $request->only('name', 'email', 'mailTo', 'message');

      $name = $request->name;
      $email = $request->email;
      $message = $request->message;

      $data['messageLines'] = explode("\n", $request->get('message'));

      //Validation rules
       $rules = array (
           'name' => 'required|alpha',
           'email' => 'required|email',
           'message' => 'required'
       );

       //Validate data
       $validator = Validator::make ($data, $rules);

       if($validator -> passes()){
        Mail::send('email', $data, function ($message) use ($data) {
          $message->subject('3Wire Contact Form: '.$data['name'])
                  ->to($data["mailTo"])
                  ->replyTo($data["email"]);
        });
        return back()->withSuccess("Thank you for your message. It has been sent.");
      }
      else{
        return back()->with('data', ['name'=>$name, 'email'=>$email, 'message'=>$message])->withErrors($validator, 'name', 'email', 'message');
      }
    }



  }//End Main
