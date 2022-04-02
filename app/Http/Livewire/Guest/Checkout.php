<?php

namespace App\Http\Livewire\Guest;

use App\Models\AdminWallet;
use Livewire\Component;

class Checkout extends Component
{
    public $wallet_address , $qrcode_link , $invoice_number;
    public function mount()
    {

      $wallet = AdminWallet::inRandomOrder()->first();
      $this->wallet_address = $wallet->wallet_address ; 
      $this->qrcode_link = $wallet->qrcode_link;
      $this->invoice_number = random_int(100000, 999999);



  
    }
    public function render()
    {
        return view('livewire.guest.checkout');
    }
}
