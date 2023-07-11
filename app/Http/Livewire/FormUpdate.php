<?php

namespace App\Http\Livewire;

use App\Models\Tb_list;
use Livewire\Component;

class FormUpdate extends Component
{
    public function render()
    {
        $lists = Tb_list::select("*")->get();
        return view('livewire.form-update', compact('lists'));
    }
}
