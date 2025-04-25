<?php

namespace App\Livewire;

use App\Models\Entry;
use Livewire\Component;

class BirdForm extends Component
{
    #[Validate('required|integer')]
    public int $birdCount;
    #[Validate('required|string')]
    public string $notes;


    public function submit()
    {
        $this->validate();

        Entry::create([
            'bird_count' => $this->birdCount,
            'notes' => $this->notes,
        ]);

        $this->reset();

    }
    public function render()
    {
        return view('livewire.bird-form',[
                'entries' => Entry::all(),
            ]);
    }
}
