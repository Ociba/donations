<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Donation;

class DonationForm extends Component
{
    public $amount;
    public $donation_type;
    public $first_name;
    public $last_name;
    public $email;
    public $address;
    public $contact;
    public $city;
    public $state;
    public $postal_code;
    public $country;

    protected $rules = [
        'amount'        => 'required',
        'donation_type' => 'required',
        'email'         => 'required|email',
        'first_name'    => 'required',
        'last_name'     => 'required',
        'address'       => 'required',
        'contact'       => 'required',
        'city'          => 'required',
        'state'         => '',
        'postal_code'   => '',
        'country'       => 'required',
    ];

    public function submit()
    {
        $this->validate();
        Donation::create(array(
            'amount'        => $this->amount,
            'email'         => $this->email,
            'donation_type' => $this->donation_type,
            'first_name'    => $this->first_name,
            'last_name'     => $this->last_name,
            'address'       => $this->address,
            'contact'       => $this->contact,
            'city'          => $this->city,
            'state'         => $this->state,
            'postal_code'   => $this->postal_code,
            'country'       => $this->country,
            
        ));
        //Donation::create($validateData);
        session()->flash('success','Donation details submitted successfully');
        return redirect()->to('/payment-details');
    }
   
    public function render()
    {
        return view('livewire.donation-form');
    }
}
