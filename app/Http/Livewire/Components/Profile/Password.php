<?php

namespace App\Http\Livewire\Components\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Password extends Component
{
    public $password, $password_confirmation;
    public function render()
    {
        return view('livewire.components.profile.password');
    }
    public function cambiarPassword()
    {
        $this->validate([
            'password'              => 'required|min:8|max:15|confirmed',
            'password_confirmation' => 'required',


        ], [
            'password.required'              => 'La contraseña es requerida',
            'password_confirmation.required' => 'La contraseña es requerida',
            'password.confirmed'             => 'Las contraseñas no coinciden',
        ]);

        $user = Auth::user();
        $user->password  = Hash::make($this->password);
        $user->save();
        $this->reset('password', 'password_confirmation');
        $this->alert(
            'info',
            'Contraseña Actualizada Correctamente'
        );
    }
}
