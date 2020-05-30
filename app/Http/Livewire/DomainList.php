<?php

namespace App\Http\Livewire;

use App\Domain;
use Livewire\Component;
use Livewire\WithPagination;

class DomainList extends Component
{
    use WithPagination;

    public $search = '';
    public $perPage = 25;
    public $sortfield;
    public $sortAsc = true;

    public function sortBy($field)
    {
        if ($this->sortBy === $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.domain-list', [
            'domains' => Domain::search($this->search)
                ->paginate($this->perPage),
        ]);
    }
}
