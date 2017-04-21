<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use  Illuminate\Support\Facades\App;

use App\Twitter;

class AppServiceProvider extends ServiceProvider {

    protected $defer = false;

	
	public function boot()
	{
		//
	}

	
	public function register()
	{
           App::bind('twitter', function(){
                return new Twitter();
                
            });
		
	}

	
}
