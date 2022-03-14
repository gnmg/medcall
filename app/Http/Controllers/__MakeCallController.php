<?php

// GameController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Call;
use Auth;
use Illuminate\Support\Facades\DB;



class MakeCallController extends Controller
{
    /**
     * make telnyx call.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $current_calls = DB::table('calls')
                ->whereRaw('time BETWEEN DATE_SUB(NOW(), INTERVAL 1 minute) AND NOW()')
                ->get();
                
                
        if($current_calls && null !== $current_calls ){
            
            foreach($current_calls as $row){
                DB::table('call_queue')->insert(
                      array(
                          'title' => $row->title,
                          'time' => $row->time,
                          'phone_numbers' => $row->phone_numbers,
                          'message_voice' => $row->message_voice,
                          'message' => $row->message,
                          'sos' => $row->sos,
                          'sos_email' => $row->sos_email,
                          'user_id' => $row->user_id,
                          )
                    );
            }
            
            
            $call_queue = DB::table('call_queue')->get();
         
            if($call_queue){
                 
                  \Telnyx\Telnyx::setApiKey(getenv( 'TELNYX_API_KEY'));
    
                    foreach($call_queue as $row){
                      
                        $to = $row->phone_numbers;
                      
                        $call = \Telnyx\Call::create([
                                'connection_id' => '1576959036576761626',
                                'to' => $to,
                                'from' => '+16193491212'
                            ]);
                            
                        if($call && isset($call->call_control_id) && null !== $call->call_control_id) {
                            DB::table('call_queue')
                                ->where('phone_numbers',$row->phone_numbers)
                                ->update(['call_ctrl_id' => $call->call_control_id]);
                        }   
                  }
             }
            
        }

    }
}