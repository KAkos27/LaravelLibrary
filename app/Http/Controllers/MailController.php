<?php

namespace App\Http\Controllers;

use App\Mail\DemoMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Levél címe',
            'body' => 'Levél törzse'
        ];

        Mail::to('akoskosztolanyi225@gmail.com')
            ->send(new DemoMail($mailData));

        dd("Email küldése sikeres.");
    }
}
