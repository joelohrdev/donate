<?php

namespace App\Http\Livewire;

use App\Models\Donation;
use Livewire\Component;

class DonationForm extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $player;
    public $amount;

    protected $rules = [
        'first_name' => 'required',
        'last_name' => 'required',
        'email' => 'required',
        'player' => 'required',
        'amount' => 'required',
    ];

    public function createDonation()
    {
        $this->validate();

        $donation = Donation::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'player' => $this->player,
            'amount' => $this->amount * 100,
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.donation-form');
    }
}
