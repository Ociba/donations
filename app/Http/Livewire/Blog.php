<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\SaveImageToFolder;
use App\Models\Blog as Blogs;

class Blog extends Component
{
    use SaveImageToFolder;

    public $title;
    public $body;
    public $photo;

    protected $rules =[
        'title'  =>'required',
        'body'   =>'required |300',
        'photo'  =>'required',
    ];

    public function saveBlog(){
        $this->validate();
        Blog::create(array(
        'title'     =>$this->title,
        'body'      =>$this->body,
        'photo'     => $this->saveItemToFolder('bog_photos',$this->photo),
        ));
        session()->flash('success','Message sent  successfully');
    }
    public function render()
    {
        return view('livewire.blog');
    }
}
