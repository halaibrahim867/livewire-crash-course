<?php

namespace App\Livewire;

use App\Models\Entry;
use Livewire\Component;

class BirdForm extends Component
{
    public int $birdCount;
    public string $notes;


    public function submit()
    {

        $this->validate([
            'birdCount' => 'required|integer',
            'notes' => 'required|string'
        ]);
        Entry::create([
            'bird_count' => $this->birdCount,
            'notes' => $this->notes,
        ]);

        $this->reset();
    }

    public function delete($id)
    {
        Entry::find($id)->delete();
    }
    public function render()
    {
        return view('livewire.bird-form',[
                'entries' => Entry::all(),
            ]);
    }
}
