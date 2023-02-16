<?php
// 3-35
namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
// 4-29
use Validator;
use App\Http\Validators\HelloValidator;

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
    // public function boot()
    // {
    //     View::composer(
    //         'hello.index',
    //         'App\Http\Composers\HelloComposer'
    //     );
    // }

    // 4-29
    public function boot()
    {
        $validator = $this->app['validator'];
        $validator->resolver(function (
            $translator,
            $data,
            $rules,
            $messages
        ) {
            return new HelloValidator(
                $translator,
                $data,
                $rules,
                $messages
            );
        });
    }
}
