<?php
// 3-35
namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HelloServiceProvider extends ServiceProvider
{
    // public function boot()
    // {
    //     View::composer(
    //         'hello.index',
    //         function ($view) {
    //             $view->with('view_message', 'composer message!');
    //         }
    //     );
    // }

    // 3-40 P105
    public function boot()
    {
        View::composer(
            'hello.index',
            'App\Http\Composers\HelloComposer'
        );
    }
}
