<?php

namespace App\Livewire;

use App\Models\Files;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\Attributes\Title;

class Dashboard extends Component
{
    #[Title("Dashboard")]
    #[Url]
    public $search = '';
    public function render()
    {

        $user = auth()->user();
        $files = Files::select('*')->where('user_id', $user->id)->where('title', 'ilike', '%' . $this->search . '%')->orderBy('id', 'desc')->cursorPaginate(20);
        return view('livewire.dashboard', ['files' => $files]);
    }
}
