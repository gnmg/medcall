<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Affiliate;
use Mail;


class AffiliateController extends Controller {

    // Create Contact Form
    public function createForm(Request $request) {
      return view('affiliate');
    }

    // Store Contact Form data
    public function Affiliate(Request $request) {

        // Form validation
        $this->validate($request, [
            'company_name' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:affiliates',
            'telephone' => ['required', 'regex:/^(0([1-9]{1}-?[1-9]\d{3}|[1-9]{2}-?\d{3}|[1-9]{2}\d{1}-?\d{2}|[1-9]{2}\d{2}-?\d{1})-?\d{4}|0[789]0-?\d{4}-?\d{4}|050-?\d{4}-?\d{4})$/'],
            'post_code' => 'required',
            'address' => 'required',
            'bank_name' => 'required',
            'branch_name' => 'required',
            'bank_account' => 'required',
            'account_type' => 'required',
         ]);

        //  Store data in database
        affiliate::create($request->all());

        //
        //  Send mail to admin
        Mail::send('mail', array(
            'company_name' => $request->get('company_name'),
            // 'name' => $request->get('name'),
            'email' => $request->get('email'),
            // 'telephone' => $request->get('telephone'),
            // 'post_code' => $request->get('post_code'),
            // 'address' => $request->get('address'),
            // 'bank_name' => $request->get('bank_name'),
            // 'branch_name' => $request->get('branch_name'),
            // 'bank_account' => $request->get('bank_account'),
            // 'account_type' => $request->get('account_type'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('ralph@j-start.jp', 'Admin')->subject($request->get('company_name'));
        });

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }

}