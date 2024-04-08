<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Http\Request;
use Livewire\Attributes\Rule;
use Livewire\Component;

class CreatePost extends Component
{
    #[Rule('required | max:20 | min:5')]
    public $title = '';

    #[Rule('required | max:2000 | min:5')]
    public $body = '';

    public function save(Request $request)
    {

        $userId = auth()->check() ? auth()->user()->id : 1;

        $this->validate();

        Post::query()->create([
            'title' => $this->title,
            'body' => $this->body,
            'user_id' => $userId

        ]);


        $this->redirect('/posts', navigate: true);
    }

    public function render()
    {
        return view('livewire.create-post');
    }
}
