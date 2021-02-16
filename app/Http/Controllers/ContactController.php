<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller {
    public function submit(ContactRequest $request) {    // <- Request
        // $name = $request->input('name');
        // echo $name;

        $contact = new Contact();
        $contact->name = $request->input("name");
        $contact->email = $request->input("email");
        $contact->subject = $request->input("subject");
        $contact->message = $request->input("message");

        $contact->save();

        return redirect()-> route('home')->with('success', 'Сообщение было добавленo');

    }

    public function allData() {
        $contact = new Contact;
        // dd($contact->all());
        return view('messages', ['data' => $contact->where('subject', '<>', 'es karoxaca')->get()]);
    }
}

// find(1) => vekal 1-in id-ov elementy 
//$contact->orderBy('id', 'asc')->skip(1)->take(2)->get()
// inRandomOrder() --- random dzevov cuyca talis mer bazayic inchy vor uzum enq 
//orderBy('id', 'asc') --- vekalum enq mer tvyalnery yst id-ii ,, asc poqric mec ,, desc hakarak
//take(2) --- vekalum enq 2 hat elemnt
//  <> --- havasar chi