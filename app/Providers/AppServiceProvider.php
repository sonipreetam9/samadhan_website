<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
    $sharedData = [
        'web_title'      => 'समाधान ग्रामीण वैलफेयर एण्ड इम्प्लॉईमेंट सर्विसिज लिमिटेड',
        'page_title'      => '',
        'web_name'        => 'समाधान ग्रामीण वैलफेयर एण्ड इम्प्लॉईमेंट सर्विसिज लिमिटेड',
        'web_full_name'   => 'समाधान ग्रामीण वैलफेयर एण्ड इम्प्लॉईमेंट सर्विसिज लिमिटेड पंजीकृत कॉरपोरेट कार्य मंत्रालय, भारत सरकार',
        'web_phone'       => '7973924876',
        'web_phone2'       => '8708944714',
        'web_email'       => 'chiefdirectorsamadhan500@gmail.com',
        'web_address'         => 'Sco 38, Sector 11 Panchkula, Haryana (India)',
        'small_logo'         => 'assets/img/logo.png',
    ];

    view()->share($sharedData);
}

}
