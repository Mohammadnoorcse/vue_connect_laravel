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

    public function saveContact(Request $request){
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->designation = $request->designation;
        $contact->contact_no = $request->contact_no;
        $contact->save();
        return response()->json([
            'message'=>'Contact Created Successfully',
            'code'=>200
        ]);

    }

}
