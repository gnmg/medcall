<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Mail;


class Call extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'time', 'phone_numbers', 'message_voice', 'message', 'sos', 'sos_email', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function callReminders(){

        $currentTime = date("H:i");
        
        
        

        $q =  DB::table('calls')
                ->whereRaw('time = '.$currentTime)
                ->toSql();
                
                
                
        Log::info($q);
        
        
         


        $current_calls = DB::table('calls')
                ->whereRaw("time = '".$currentTime."'")
                ->get();
        
         

                 
        if($current_calls && null !== $current_calls && count($current_calls) > 0 ){
            
            Log::info("in if");
            
            //This is used to take off the first 0 and and the +81 country code
            foreach($current_calls as $row){
                
                //$rawNumber = ltrim($row->phone_numbers,'0');
                //$phoneNo = '+81'.$rawNumber;

                
                DB::table('call_queue')->insert(
                      array(
                          'title' => $row->title,
                          'time' => $row->time,
                          'attempt' => 1,
                          'phone_numbers' => $phoneNo,
                          //'phone_numbers' => '+918866607616',
                          'message_voice' => $row->message_voice,
                          'message' => $row->message,
                          'sos' => $row->sos,
                          'sos_email' => $row->sos_email,
                          'user_id' => $row->user_id,
                          )
                    );
            }
            
        }
        
         $call_queue_max_attampt = DB::table('call_queue')
            ->whereRaw('time = "'.$currentTime.'" AND `attempt` > 3')
            ->get();
            
          
                
        if($call_queue_max_attampt && count($call_queue_max_attampt) > 0 ){
            
              Log::info("in que max attamp");
          
            foreach($call_queue_max_attampt as $row){
                
                 Log::info($row->sos_email);
                
                if( $row->sos == 'yes' && '' !== $row->sos_email){
                    
                    Log::info("in sos");
                    $toMail = $row->sos_email;
                    $data = array( "body" => "「くすりコール」のお電話に相手の方が反応しませんでした。
                    お薬を飲み忘れている可能性もありますので、ご本人様とのご確認をお勧めいたします。");
                    
                    Mail::send('max_attampt', $data, function($message) use ($toMail) {
                    $message->to($toMail)
                    ->subject('「くすりコール」のリマインダー');
                    $message->from(env('MAIL_FROM_ADDRESS'),'くすりコール');
                    });
                    
                } 
                // Remove entry from call queue table.
                DB::table('call_queue')->where('id',$row->id)->delete();
            }
             
        }            
      
      
            
        $call_queue = DB::table('call_queue')
                ->whereRaw("time = '".$currentTime."'")
                ->get();
                
         
            if($call_queue &&  count($call_queue) > 0 ){
                 
                  \Telnyx\Telnyx::setApiKey(getenv( 'TELNYX_API_KEY'));
    
                    foreach($call_queue as $row){
                      
                        $to = '+'.$row->phone_numbers;
                        
                        $attempt = (int)$row->attempt+1;
                        
                        $next_attmpt_time = date('H:i',strtotime('+5 minutes',strtotime($row->time)));
                      
                        $call = \Telnyx\Call::create([
                                'connection_id' => '1576959036576761626',
                                'to' => $to,
                                'from' => '+815045603515'
                            ]);
                            
                        if($call && isset($call->call_control_id) && null !== $call->call_control_id) {
                            DB::table('call_queue')
                                ->where('phone_numbers',$row->phone_numbers)
                                ->update(['call_ctrl_id' => $call->call_control_id,'attempt' => $attempt,'time' => $next_attmpt_time  ]);
                        }   
                  }
             }
            
       
        
        Log::info('---- CRON EXECUTED ----- ');
    }
   
}

