<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Articledatatable;
use App\Article;
use App\Slider;
use Mail;


class WebController extends Controller
{
     
    public function index() 
    {   
        $articles  =  Article::orderBy('created_at', 'desc')->paginate(8);  
        $slids     =  Slider::all();  
        return view('index' , compact('articles', 'slids')); 
    }

 

    public function show($id) 
    { 
        $article   = Article::where('id' , $id)->first();
        return view('item' , compact('article'));
    }


    public function postContact(Request $request) 
    {
        $this->validate($request, [
            'name'     => 'required',
            'email'    => 'required|email',
            'phone'    => 'required',
            'services' => 'required', 
            'message'  => 'required']);

        $data = array(
            'name'        => $request->name,
            'email'       => $request->email,
            'phone'       => $request->phone,
            'services'    => $request->services,
            'bodyMessage' => $request->message
            );

        Mail::send('emails.contact_temp', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('aboualama@gmail.com');
            $message->subject($data['services']);
        });

        // Session::flash('success', 'Your Email was Sent!');

        return back() ;
    }
}
