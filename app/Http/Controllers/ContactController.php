<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function __invoke(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'nom'        => ['required', 'string', 'max:255'],
            'email'      => ['required', 'email:rfc,dns', 'max:255'],
            'entreprise' => ['nullable', 'string', 'max:255'],
            'sujet'      => ['required', 'string', 'max:255'],
            'message'    => ['required', 'string', 'min:20'],
        ]);

        Mail::to(config('mail.contact_email'))->send(new ContactMail($validated));

        return response()->json(['message' => 'Message envoyé avec succès.']);
    }
}
