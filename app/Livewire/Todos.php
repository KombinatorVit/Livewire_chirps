<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Todos')]
class Todos extends Component
{


    public $todos = [
'Learn Livewire',
    ];

    public $newTodo = '';

    public function updated($property, $value): void
    {

        $this->$property = strtoupper($value);
    }

//    public function mount()
//    {
//        $this->todos = [
//            'Learn Livewire',
//            'Build something awesome'
//        ];
//        $this->newTodo = 'Type here';
//    }

    function addTodo(): void
    {
        $this->todos[] = $this->newTodo;
//        $this->newTodo = '';
        $this->reset('newTodo');

    }

    public function render()
    {
        return view('livewire.todos');
    }
}
