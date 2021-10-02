<?php

namespace App\Http\Livewire\Manager;

use App\Models\Manager;
use App\Models\Sales;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Payments extends Component
{
    use WithPagination;

    public $cid;
    public function mount()
    {
        //Get manager id
        $this->cid = Manager::where('id', Auth::id())->select('cid')->sum('cid');
    }

    public function render()
    {
        return view('livewire.manager.payments', [
            'sales' => Sales::where('cid', $this->cid)->orderBy('created_at', 'DESC')->paginate(5),
        ])->layout('layouts.app');
    }
}
