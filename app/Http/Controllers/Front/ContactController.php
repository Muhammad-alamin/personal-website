<?php

namespace App\Http\Controllers\Front;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ContactController extends Controller
{
    public function contact(){
        $title ['title'] = 'Muhammad Alamin | Contact';
        return view('front.contact', $title);
    }

    public function store(Request $request){
        $request->validate([
                'name' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'description' => 'required',
            ]
        );

        $contact = new Contact();

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->description = $request->description;
        $contact->embed_code = $request->embed_code;
        $contact->save();
        Alert::toast('Thanks for your feedback', 'success');
        return redirect()->route('front.home');
    }
}
