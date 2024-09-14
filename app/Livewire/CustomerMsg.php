<?php

namespace App\Livewire;

use App\Models\CustomersMessages;
use App\Models\VP_CustomersMessage;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Illuminate\Http\Request;

class CustomerMsg extends Component
{
    public $visitor_name, $visitor_email, $visitor_msg;
    public $successMessage = "";

    public function render()
    {
        return view('livewire.customer-msg');
    }
    
    public function submitForm()
    {
        $this->reset(['successMessage']);
        
        $this->validate([
            'visitor_name' => 'required|string|max:255',
            'visitor_email' => 'required|email|max:255',
            'visitor_msg' => 'required|string',
        ]);

        VP_CustomersMessage::create([
            'name' => $this->visitor_name,
            'email' => $this->visitor_email,
            'message' => $this->visitor_msg,
        ]);

        $this->reset(['visitor_name', 'visitor_email', 'visitor_msg']);
        $this->successMessage = __('Message sent successfully!');
    }
}
