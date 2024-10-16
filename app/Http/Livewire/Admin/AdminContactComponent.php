<?php

namespace App\Http\Livewire\Admin;

use App\Models\Contact;
use Livewire\Component;

class AdminContactComponent extends Component
{
    public function deleteContact($contactId)
    {
        $contact = Contact::find($contactId);
        $contact->delete();

        session()->flash('message', 'Contact deleted successfully.');
    }

    public function render()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->paginate(12);
        return view('livewire.admin.admin-contact-component',['contacts'=> $contacts])->layout('layouts.base');
    }
}
