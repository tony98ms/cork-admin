<?php

namespace App\Http\Livewire\Components\Profile;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Setting extends Component
{
    public $user, $phone;
    public function render()
    {
        $this->user = Auth::user();
        $this->phone   = $this->user->phone;
        return view('livewire.components.profile.setting');
    }
    public function updateData()
    {
        $user       = Auth::user();
        $user->phone = $this->phone;
        $user->save();
        $this->alert(
            'info',
            'Datos Actualizado Correctamente'
        );
    }
}
