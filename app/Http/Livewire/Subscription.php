<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Subscription as Subscribers;

class Subscription extends Component
{
    public $subscriber_email;
    
    protected $rules = [
        'subscriber_email'    => 'required',
    ];

    public function subscribe(){
       $this->validate();
       Subscribers::create(array(
        'subscriber_email'   => $this->subscriber_email,
        
    ));
    session()->flash('success','Donation details submitted successfully');
    }

    public function render()
    {
        return view('livewire.subscription');
    }
}
