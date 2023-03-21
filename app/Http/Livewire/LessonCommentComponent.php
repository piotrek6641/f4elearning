<?php

namespace App\Http\Livewire;

use App\Models\LessonComment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LessonCommentComponent extends Component
{
    public $commentId = 18;
    public function getCommentProperty()

    {
        return LessonComment::find($this->commentId);
    }
    public $lesson;
    public $content;
    public $newComment;
    public $comments;
    protected $rules = [
      'newComment' => 'required|min:6|max:255'
    ];

    public function render()
    {
        return view('livewire.lesson-comment-component');
    }

    public function mount()
    {
        $this->comments = LessonComment::where('lesson_id',$this->lesson->id)->latest()->get();
    }
    public function deleteComment($comment_id)
    {
        $comment = LessonComment::find($comment_id);
        $this->comments = $this->comments->except($comment_id);
        $comment->delete();
    }
    public function createComment()
    {
        $this->validate();
        $createdComment = LessonComment::create([
           'content'=>$this->newComment,
            'user_id'=>Auth::id(),
            'lesson_id'=>$this->lesson->id
        ]);
        $this->comments->prepend($createdComment);
        $this->newComment = '';
    }
}
