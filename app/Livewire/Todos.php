<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{


    public $todos = [

    ];

    public $newTodo = '';

    public function mount()
    {
        $this->todos = [
            'Learn Livewire',
            'Build something awesome'
        ];
        $this->newTodo = '';
    }

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
