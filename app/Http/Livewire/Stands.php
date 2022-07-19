<?php

namespace App\Http\Livewire;

use App\Models\Stand;
use Livewire\Component;

class Stands extends Component{
    public $isOpen=false;
    public $stand_id,$name,$row,$column;

    public function render(){
        $stands=Stand::all();
        return view('livewire\stand',compact('stands'));
    }

    public function create(){
        $this->openModal();
    }
    public function openModal(){
        $this->isOpen=true;
    }
    public function closeModal(){
        $this->isOpen=false;
    }
    private function resetInputsFields(){
        $this->name="";
        $this->row="";
        $this->column="";
    }
    public function store(){
        $this->validate([

            'name'=>'required',
            'row'=>'required',
            'column'=>'required',

        ]);
        Stand::updateOrCreate(['id'=>$this->stand_id],
            [
                'name'=>$this->fullname,
                'row'=> $this->dni,
                'column'=>$this->phone,
            ]
        );
        session()->flash('message',
            $this->stand_id?'Registro actualizado satisfactoriamente':'Registro creado satisfactoriamente.');
        $this->closeModal();
        $this->resetInputsFields();
    }

    public function edit(Stand $stand){
        $this->stand_id=$stand->id;
        $this->name=$stand->name;
        $this->row=$stand->row;
        $this->column=$stand->column;
        $this->openModal();
    }

    public function delete(Stand $stand){
        $stand->delete();
        session()->flash('message', 'Registro borrado satisfactoriamente.');
    }

}
