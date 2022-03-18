<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class TelnyxWebHook extends Controller
{
    //
    
     /**
     * make telnyx call.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         //Log::info($request->post());
         
         Log::info($request->post('data'));
         
         $telResponse = $request->post('data');
         
         //Log::info($telResponse['event_type']);
         
         if($telResponse && isset($telResponse['event_type']) && isset($telResponse['payload']['call_control_id'])){
             
             $call_ctrl_id = $telResponse['payload']['call_control_id'];
             
             $getQuereRecord =  DB::table('call_queue')->where('call_ctrl_id', $call_ctrl_id)->first();
             
             if($getQuereRecord && null !== $getQuereRecord ){
                 
                 
                 if($telResponse['event_type'] == 'call.answered'){
                     
                     \Telnyx\Telnyx::setApiKey(getenv( 'TELNYX_API_KEY'));
 
                    $call = \Telnyx\Call::retrieve($getQuereRecord->call_ctrl_id);
                    
                    $call->gather_using_speak([
                            "language" => "en-EN",
                            "voice" => Str::lower($getQuereRecord->message_voice),
                            "payload" => $getQuereRecord->message
                            ]);
                            
                    DB::table('call_queue')->where('call_ctrl_id', $call_ctrl_id)->delete();        
                        
                 }
                 
                 if($telResponse['event_type'] == 'call.answered'){
                     
                     //DB::table('call_queue')->where('call_ctrl_id', $call_ctrl_id)->delete();

                 }

             }
         }

    }
}
