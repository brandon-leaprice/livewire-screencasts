<div>
   @foreach($contacts as $contact)
       @livewire('say-hi', ['contact' => $contact], key($contact->id))

       <button wire:click="removeContact('{{$contact->name}}')">Remove Contact</button>
    @endforeach

       <hr>

    {{ now() }}

    <button wire:click="emitFoo">Refresh Children</button>
</div>
