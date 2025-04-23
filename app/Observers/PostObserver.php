<?php

namespace App\Observers;

use App\Models\Berita;
use Illuminate\Support\Facades\Artisan;

class PostObserver
{
    public function saved(Berita $post)
    {
        Artisan::call('sitemap:generate');
    }

    public function deleted(Berita $post)
    {
        Artisan::call('sitemap:generate');
    }
}
