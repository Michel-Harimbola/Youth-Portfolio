<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use function PHPSTORM_META\type;

class ContactController extends Controller
{
    public function loadAllContact() {
        $all_contact = Contact::all();
        return Inertia::render('Index/Dashboard/Contact/Contact', ['all_contact' => $all_contact]);
    }

    public function ContactForm() {
        return inertia('Index/Dashboard/Contact/AddContact');
    }

    public function AddContact(Request $request) {
        $validated = $request->validate([
            'contact_type' => 'required|string',
            'contact_details' => 'required|string|max:255',
        ]);

        Contact::create($validated);

        return Redirect::route('Contact.index')->with('message', 'Contact created succesfully');
    }

    public function destroyContact(Contact $Contact){
        $Contact->delete();
        return Redirect::route('Contact.index')->with('message', 'Contact deleted succesfully');
    }

    public function EditContact(Contact $Contact){
        return Inertia::render('Index/Dashboard/Contact/EditContact', [
            'contact' => $Contact
        ]);
    }

    public function updateContact(Request $request, Contact $Contact){
        $validated = $request->validate([
            'contact_type' => 'required|string',
            'contact_details' => 'required|string',
        ]);

        $Contact->update($validated);

        return Redirect::route('Contact.index')->with('message', 'Contact update succesfully');
    }
}
