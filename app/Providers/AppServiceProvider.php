<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Auth;
use DB;
use App\hinhthuc;
use App\parent_type;
use App\blog;
use App\post;
use App\loaitin;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        view()->composer('client.block.header',function($view){
            if(Auth::check()){
                $view->with('user',Auth::user());
            }
        });
        view()->composer('client.block.header',function($view){
            $hinhthuc=hinhthuc::all();
            $view->with('hinhthuc',$hinhthuc);
        });
        view()->composer('client.block.header',function($view){
            $parent=parent_type::all();
            $view->with('parent',$parent);
        });
        view()->composer('client.block.sidebar_post',function($view  ){
            $loaitin_random=loaitin::orderByRaw("RAND()")->take(6)->get();
            $view->with('loaitin_random',$loaitin_random);
        });
        view()->composer('client.block.sidebar_post',function($view){
            $post_random=post::orderByRaw("RAND()")->take(5)->get();
            $view->with('post_random',$post_random);
        });
        view()->composer('client.block.account',function($view){
            if(Auth::check()){
                $view->with('user',Auth::user());
            }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
