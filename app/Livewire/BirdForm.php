<?php

namespace App\Livewire;

use App\Models\Entry;
use Livewire\Component;

class BirdForm extends Component
{
    public int $bird_count; //should be same in db
    public string $notes;


    public function submit()
    {
        Entry::create($this->pull());

    }
    public function render()
    {
        return view('livewire.bird-form',[
                'entries' => Entry::all(),
            ]);
    }
}
