<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function send()
    {
        Artisan::call(SendEmailVerificationCommand::class);

        return response()->json([
            'data' => 'Todo ok'
        ]);
    }
}
