<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{


    public $todos = [
        'Learn Livewire',
        'Build something awesome'
    ];

    public $newTodo = '';

    function addTodo()
    {
        $this->todos[] = $this->newTodo;
        $this->newTodo = '';

    }

    public function render()
    {
        return view('livewire.todos');
    }
}
