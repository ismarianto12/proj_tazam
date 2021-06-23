<?php

namespace Modules\Nasabah\Http\Livewire;

use Modules\Nasabah\Entities\Tmnasabah; 
use Livewire\Component;

class Nasabah extends Component
{

    public $create = FALSE;
    public $update  = FALSE;

    public function render()
    {
        $data = Tmnasabah::get();
        return view(
            'nasabah::livewire.nasabah',
            ['tmnasabah' => $data]

        )->layout('layouts.template');
    }
    public function create()
    {
        $this->create = TRUE;
    }

    public function update()
    {
        $this->update  = TRUE;
    }

    public function delete()
    {
    }

    public function home()
    {
        $this->create = FALSE;
    }
}
