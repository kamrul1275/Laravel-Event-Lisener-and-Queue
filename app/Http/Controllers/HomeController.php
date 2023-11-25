<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;
use App\Events\PodcastProcessed;

use App\Jobs\sendMail;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    function Index()
    {
        return view('home');
    }

    function EmailStore(Request $request)
    {
    
    // $data = new Email();
    // $data->email = $request->email;
    // $data->save();

    
     Email::create($request->all());

   
    dispatch(new sendMail((object)$request->all()));

    //dd(PodcastProcessed::dispatch($data));
 
  


    return redirect()->back()->with('success', 'Insert Successfully....');
    
}
}
