<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Login_tazam;

class Login extends Component
{

    public $username;
    public $password;
    public $click = FALSE;

    protected $rules = [
        'username' => 'required',
        'password' => 'required',
    ];

    public function render()
    {
        return view('livewire.render_login')->layout('livewire.login');
    }
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function actionprocess(Request $request)
    { 
        $validatedData = $this->validate();
        // dd($validatedData['username']);

        //  \Login_tazam::run('tes', 'asda');
        // dd($dd);

        if ($validatedData['username'] == '123') {
            session()->flash('message', 'Post successfully updated.');
            return redirect()->to('/home');
            // Contact::create($validatedData);
        } else {
 
            return session()->flash('message', '<div class="alert alert-danger">Username dan password salah</div>');
        }
    }
}
