<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Traits\SaveImageToFolder;
use App\Models\Project;

class Projects extends Component
{
    
    use SaveImageToFolder;

    public $title;
    public $content;
    public $image;

    protected $rules =[
        'title'    =>'required',
        'content'  =>'required |400',
        'image'    =>'required',
    ];

    public function saveProjects(){
        $this->validate();
        Project::create(array(
        'title'     =>$this->title,
        'content'      =>$this->content,
        'image'     => $this->saveItemToFolder('project_photos',$this->image),
        ));
        session()->flash('success','Projects Added successfully');
        return redirect()->to('/projects/other-projects');
    }
    public function render()
    {
        return view('livewire.projects');
    }
}
