<?php

namespace Modules\Aplikasi\Http\Livewire;

use Livewire\Component;

use Modules\Aplikasi\Models\Tmmodul;
use Livewire\WithPagination;


class Aplikasi extends Component
{
    use WithPagination;


    public $id_app;
    public $kode;
    public $nama;
    public $permision;
    public $users_id;
    public $created_at;
    public $updated_at;
    // rule of the  
    public $update = FALSE;


    public $perPage = 10;
    public $search = '';
    public $orderBy = 'id';
    public $orderAsc = true;

    public function render()
    {

        // dd(Tmaplikasi::get());

        return view('aplikasi::livewire.aplikasi', [
            'aplikasi' => Tmmodul::search($this->search)
                ->orderBy($this->orderBy, $this->orderAsc ? 'asc' : 'desc')
                ->simplePaginate($this->perPage),
        ])->layout('layouts.template');
    }
}
