<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;
use App\Events\PodcastProcessed;
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

    
    $data = Email::create($request->all());

    //event(new PodcastProcessed($data));

    //dd(PodcastProcessed::dispatch($data));
 
    PodcastProcessed::dispatch($data);
    return redirect()->back()->with('success', 'Insert Successfully....');
    
}
}
