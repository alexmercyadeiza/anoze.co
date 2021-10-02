<?php

namespace App\Http\Livewire\Manager;

use App\Models\Tellers;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Upload extends Component
{
    use WithFileUploads, WithPagination;

    public $teller;
    public $date;

    public function save()
    {
        $this->validate([
            'teller' => 'image|max:1024|mimes:jpg,jpeg,png', // 1MB Max
        ]);

        $this->teller->storeAs('public/tellers', 'teller-' . time() . '.' . $this->teller->getClientOriginalExtension());

        Tellers::create([
            'fid' => 1,
            'cid' => 1,
            'created_at' => $this->date,
            'file' => 'teller-' . time() . '.' . $this->teller->getClientOriginalExtension(),
        ]);
    }

    public function render()
    {
        return view('livewire.manager.upload', [
            'uploads' => Tellers::where('fid', Auth::id())->orderBy('created_at', 'DESC')->paginate(5),
        ])->layout('layouts.app');
    }
}
