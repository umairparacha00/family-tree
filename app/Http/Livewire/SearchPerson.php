<?php

namespace App\Http\Livewire;

use App\Models\Person;
use Livewire\Component;

class SearchPerson extends Component
{
    public string $term = '';

    public function render()
    {
        if ($this->term === '') {
            $people = Person::query()
                ->with('father')
                ->paginate(10);
        } else {
            $people = Person::search($this->term)->paginate(10);
            $people->load('father');
        }
        return view('livewire.search-person', [
            'people' => $people
        ]);
    }
}
