<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contacts()
    {
        $contacts = Contact::All();
        return response()->json([
            'contacts' => $contacts,
            'message' => 'Contacts',
            'code' => 200,
        ]);

       
    }

}
