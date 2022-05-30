<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;
use Livewire\Component;
use App\Traits\SaveImageToFolder;
use App\Models\TargetGroup;

class TargetGroups extends Component
{
    use SaveImageToFolder;

    public $heading;
    public $number;
    public $body;
    public $photo;

    protected $rules =[
        'heading'    =>'required',
        'number'     =>'required |400',
        'body'       =>'required',
        'photo'      =>'required',
    ];

    public function saveTargetGroup(){
        $this->validate();
        TargetGroup::create(array(
        'heading'     =>$this->heading,
        'number'      =>$this->number,
        'body'        =>$this->body,
        'photo'     => $this->saveItemToFolder('target_group_photos',$this->photo),
        ));
        session()->flash('success','Message sent  successfully');
    }

    public function render()
    {
        return view('livewire.target-groups');
    }
}
