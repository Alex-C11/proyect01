<?php

namespace App\Http\Livewire;

use App\Models\Period;
use Livewire\Component;

class Periods extends Component{

    public $isOpen=false;
    public $period_id,$description,$status;

    public function render(){
        $periods=Period::all();
        return view('livewire\period',compact('periods'));
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
        $this->description="";
        $this->status="";

    }
    public function store(){
        $this->validate([

            'description'=>'required',
            'status'=>'required',


        ]);

        Period::updateOrCreate(['id'=>$this->period_id],
            [
                'description'=>$this->description,
                'status'=> $this->status,

            ]
        );
        session()->flash('message',
            $this->period_id?'Registro actualizado satisfactoriamente':'Registro creado satisfactoriamente.');
        $this->closeModal();
        $this->resetInputsFields();
    }

    public function edit(Period $period){
        $this->stand_id=$period->id;
        $this->description=$period->description;
        $this->status=$period->status;
        $this->openModal();
    }

    public function delete(Period $period){
        $period->delete();
        session()->flash('message', 'Registro borrado satisfactoriamente.');
    }

}
