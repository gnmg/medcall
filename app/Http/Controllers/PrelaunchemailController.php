<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Prelaunchemail;
use Mail;

class PrelaunchemailController extends Controller
{
    // Create Prelaunch Email Form
    public function createmailForm(Request $request) {
        return view('/top');
      }
  
      // Store Contact Form data
      public function PrelaunchemailForm(Request $request) {
  
          // Form validation
          $this->validate($request, [
              'email' => 'required|email',
           ]);
  
          //  Store data in database
          Prelaunchemail::create($request->all());
  
          //  Send mail to admin
          Mail::send('mail', array(
              'name' => $request->get('name'),
              'email' => $request->get('email'),
              'phone' => $request->get('phone'),
              'subject' => $request->get('subject'),
              'user_query' => $request->get('message'),
          ), function($message) use ($request){
              $message->from($request->email);
              $message->to('265da78573-700f16@inbox.mailtrap.io', 'Admin')->subject($request->get('subject'));
          });
  
          //return redirect()->route('dashboard');
          //return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
          
      }
}
