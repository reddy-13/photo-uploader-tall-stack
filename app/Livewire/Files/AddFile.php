<?php

namespace App\Livewire\Files;

use App\Models\Files;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Livewire\Component;

class AddFile extends Component
{
    use WithFileUploads;

    public $title, $image;
    public function render()
    {
        return view('livewire.files.add-file');
    }

    public function store()
    {
        $this->validate([
            "title" => "required|min:2|max:191",
            "image" => "required|image|mimes:png,jpg,svg,gif"
        ]);

        $user = Auth::guard("web")->user();
        $filename = $this->image->store("images_" . $user->id);
        Files::create(["title" => $this->title, "image" => $filename, "user_id" => $user->id]);
        session()->flash("success", "Image uploaded succesffully..!!");
        $this->redirectRoute("dashboard", navigate: true);
    }
}
