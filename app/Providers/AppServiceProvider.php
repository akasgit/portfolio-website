<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ContactMessage;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       // Share unread contact messages count globally in all admin views
        View::composer('layouts.admin', function ($view) {
            $unreadCount = ContactMessage::where('is_read', false)->count();
            $view->with('unreadMessageCount', $unreadCount);
        });
    }
}
