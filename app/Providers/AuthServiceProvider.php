<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Models\LessonComment;
use App\Models\PostComment;
use App\Policies\LessonCommentPolicy;
use App\Policies\PostCommentPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        LessonComment::class => LessonCommentPolicy::class,
        PostComment::class => PostCommentPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
