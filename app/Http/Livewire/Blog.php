<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\SaveImageToFolder;

class Blog extends Component
{
    use SaveToFolder;

    public function saveBlog(){
        $this->validate();
        Blog::create(array(
        'photo'     => $this->saveItemToFolder('staff_photos',$this->photo),
        ));
        session()->flash('success','Message sent  successfully');
    }
    public function render()
    {
        return view('livewire.blog');
    }
}
