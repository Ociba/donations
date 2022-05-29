<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;

class HomeMessageForm extends Component
{
    public $names;
    public $emails;
    public $contact;
    public $message;
    public $subject; 

    protected $rules = [
        'names'        => 'required',
        'emails'       => 'required|email',
        'contact'      => 'required',
        'message'      => 'required',
        'subject'      => 'required',
    ];

    public function sendMessage(){
        $this->validate();
        Message::create(array(
            'names'        => $this->names,
            'emails'       => $this->emails,
            'contact'      => $this->contact,
            'subject'      => $this->subject,
            'message'      => $this->message,
        ));
        session()->flash('success','Message sent  successfully');
    }

    public function render()
    {
        return view('livewire.home-message-form');
    }
}
