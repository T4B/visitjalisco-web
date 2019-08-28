<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactSend;

class ContactController extends Controller
{
    public function send(ContactSend $form)
    {
        try {
            return response()->json(['success' => !!$form->send()]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ], 422);
        }
    }
}
