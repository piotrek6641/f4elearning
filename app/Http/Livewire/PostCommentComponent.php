<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\PostComment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class PostCommentComponent extends Component
{
    use AuthorizesRequests;
    public $post;
    public $comments;
    public $newComment;
    protected $rules = [
        'newComment' => 'required|min:6|max:255'
    ];
    public function render()
    {
        return view('livewire.post-comment-component');
    }
    public function mount()
    {
        $this->comments = PostComment::where('post_id',$this->post->id)->latest()->get();
    }
    public function createComment()
    {
        $this->validate();
        $createdComment = PostComment::create([
           'content'=>$this->newComment,
            'user_id'=>Auth::id(),
            'post_id'=>$this->post->id
        ]);
        $this->comments->prepend($createdComment);
        $this->newComment = '';
    }
    public function deleteComment($post_id)
    {
        $comment =PostComment::find($post_id);
        $this->authorize('delete',$comment);
        $this->comments = $this->comments->except($post_id);
        $comment->delete();
    }
}
