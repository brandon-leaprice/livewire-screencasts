<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class SayHi extends Component
{
    public $contact;

    protected $listeners = ['emitFoo'];

    public function emitFoo()
    {
        $this->emitUp('emitFoo');
    }

    public function mount(Contact $contact)
    {
        $this->$contact = $contact->$contact;
    }

    public function render()
    {
        return view('livewire.say-hi');
    }
}
