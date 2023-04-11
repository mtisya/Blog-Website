<?php

namespace App\Providers;

use App\Models\User;
use App\Services\Newsletter;
use App\Services\MailchimpNewsletter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Model;
use MailchimpMarketing\ApiClient;

use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    // calling mailchimp api service

    public function register()
    {
        app()->bind(Newsletter::class, function () {

            $client = new ApiClient();

            $client->setConfig([

                'apiKey' => config('services.mailchimp.key'),
                'server' => 'us20'
            ]);

            return new MailchimpNewsletter($client);

        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

    public function boot()
    {
        Model::unguard();
        Schema::defaultStringLength(191);
    }
}
