<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;

    protected $rules = [
        'name' => 'required|string|min:3',
        'email' => 'required|email',
        'message' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        // Tutaj możesz dodać logikę wysyłania e-maila lub zapisu danych
        // Na przykład, możesz wysłać e-mail:
        // Mail::to('admin@example.com')->send(new ContactFormMail($this->name, $this->email, $this->message));

        $this->reset();

        session()->flash('success', 'Your message has been sent successfully!');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
