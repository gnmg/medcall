<?php

// GameController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Call;
use Auth;


class CallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$calls = Call::with('user:id');
        //$calls = auth()->user()->calls();
        //$calls = Call::all();
        //$calls = Call::where('user_id', '=', Auth::user()->id)->get();
        $calls = Auth::user()->calls;
        return view('dashboard',compact('calls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('call.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'time' => 'required',
            'timezone' => 'required',
            // 'phone_numbers' => ['required', 'regex:/^(0([0-9][0-9]{4}[0-9]{2}[0-9]{3}|[0-9]{3}[0-9]{2}|[0-9]{4}[0-9])[0-9]{4}$|050{4}{4})$/'],
           'phone_numbers' => ['required', 'regex:/^(0([0-9][0-9]{4}[0-9]{2}[0-9]{3}|[0-9]{3}[0-9]{2}|[0-9]{4}[0-9])[0-9]{4}$|050-?\d{4}-?\d{4})$/'],
           //  'phone_numbers' => 'required',
            'message_voice' => 'required',
            'message' => 'required',
            'sos' => 'required',
            'sos_email' => 'email|nullable',
        ]);
        
        
        
        
        $rawNumber = ltrim($request->post('phone_numbers'),'0');
        $phoneNo = '+81'.$rawNumber;

        
        $call = $request->all();
        //$call['phone_numbers']=$phoneNo;
        

        $call['user_id'] = $request->user()->id;
        Call::create($call);
   
        return redirect('/dashboard')->with('success', 'リマインダーが保存されました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $call = call::findOrFail($id);

        return view('call.edit', compact('call'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:50',
            'time' => 'required',
            'timezone' => 'required',
            'phone_numbers' => ['required', 'regex:/^0([0-9][0-9]{4}[0-9]{2}[0-9]{3}|[0-9]{3}[0-9]{2}|[0-9]{4}[0-9])[0-9]{4}$/'],
             //'phone_numbers' => 'required',
            'message_voice' => 'required',
            'message' => 'required',
            'sos' => 'required',
            'sos_email' => 'email|nullable',
        ]);
        call::whereId($id)->update($validatedData);

        return redirect('/dashboard')->with('success', 'リマインダーが保存されました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $call = Call::findOrFail($id);
        $call->delete();

        return redirect('/dashboard')->with('success', 'リマインダーは削除されました。');
    }
}