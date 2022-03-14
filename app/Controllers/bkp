<?php

// GameController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Call;
use Auth;


class MakeCallController extends Controller
{
    /**
     * make telnyx call.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        \Telnyx\Telnyx::setApiKey(getenv( 'TELNYX_API_KEY'));

        // outgoing call
       $call = \Telnyx\Call::create([
            'connection_id' => '1576959036576761626',
            'to' => '+919725645533',
            'from' => '+16193491212'
        ]);
        
        $answer = $call->answer();

        print_r($answer); exit;
 
        // incoming call
$call = \Telnyx\Call::retrieve('v2:9ZODmGs046yp9cSWO89zMzbLAt7lXw6pwq_LoLcxWRwKG0T2SD1Rgw');
$call->gather_using_speak([
            "language" => "ja-JP",
            "voice" => "female",
            "payload" => "Google's free service instantly translates words, phrases, and web pages between English and over 100 other languages."
        ]);

        
        exit($call);
        
    }

    
}