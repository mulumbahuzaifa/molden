<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $comment;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:255',
        'comment' => 'required|string',
    ];

    public function sendMessage(){
        $this->validate();

        $contact = new Contact();
        $contact->name = $this->name;
        $contact->email = $this->email;
        $contact->phone = $this->phone;
        $contact->comment = $this->comment;
        $contact->save();

        // Reset form fields
        $this->reset(['name', 'email', 'phone', 'comment']);

        session()->flash('message','Thanks for contacting us, Your message has been received successfully');
    }

    public function render()
    {
        return view('livewire.contact-component')->layout('layouts.base');
    }
}
