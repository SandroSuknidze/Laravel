<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendSmsNotificaition()
    {   
        
        // "e35736fa", "cWicRBSYslC3kPMR" sandro
        $basic  = new \Vonage\Client\Credentials\Basic("ff8e3f7b", "U1MnKCCahUMsPTif");
        $client = new \Vonage\Client($basic);
 
        $response = $client->sms()->send(
            new \Vonage\SMS\Message\SMS("995598242422", 'davitobas gilocavt', 'mravals daeswarit')
        );
        
        $message = $response->current();
        
        if ($message->getStatus() == 0) {
            echo "The message was sent successfully\n";
        } else {
            echo "The message failed with status: " . $message->getStatus() . "\n";
        }
 
    }
}