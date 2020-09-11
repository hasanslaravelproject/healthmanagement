<?php

use Illuminate\Database\Seeder;
use anlutro\LaravelSettings\Facade as Setting;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::set('company_name', 'HasansIT');
        Setting::set('company_email', 'hasanslaravelproject.com');
        Setting::set('company_phone', '+4542328703');
        Setting::set('company_address', 'DK');
        Setting::set('company_city', 'Copenhagen');
        Setting::set('company_currency_symbol', 'DKK');
        Setting::set('record_per_page', 15);
        Setting::set('default_role', 2);
        Setting::set('max_login_attempts',10);
        Setting::set('lockout_delay', 2);
        Setting::save();
    }
}
