<?php

namespace App\Http\Controllers;

use App\Mail\OfferMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendOfferMail()
    {
        $email = 'neleosmarcabanga@homtail.com';
   
        $offer = [
            'title' => 'Deals of the Day',
            'url' => 'https://www.remotestack.io'
        ];
  
        Mail::to($email)->send(new OfferMail($offer));
        
   
        dd("Mail sent!");
    }
}
