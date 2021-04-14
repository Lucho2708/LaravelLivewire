<?php

namespace App\Http\Livewire;

use Illuminate\Http\Concerns\InteractsWithInput;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class PostComponent extends Component
{
    use WithPagination;
    public $title, $body;
    public $view = 'create';

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        return view('livewire.post-component', [
            'posts'=>Post::orderBy('id', 'desc')->paginate(8)
        ]);
    }

    public function store()
    {
        $this->validate(['title'=> 'required', 'body'=>'required']);

        Post::create([
            'title'=>$this->title,
            'body'=>$this->body
        ]);
    }

    public function destroy($id)
    {
        Post::destroy($id);
    }
}
