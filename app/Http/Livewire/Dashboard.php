<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    // public variabel
 
    public function render()
    {
        return view('livewire.dashboard', [
            'title' => 'Halaman dasboard',
        ])->layout('layouts.template');
    }
}
