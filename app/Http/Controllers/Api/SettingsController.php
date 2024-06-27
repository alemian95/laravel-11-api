<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
{
    public function index()
    {

        $settings = [
            'app_name' => env("APP_NAME"),
            'app_debug' => env("APP_DEBUG"),
            'localization' => [
                'default' => app()->getLocale(),
                'fallback' => app()->getFallbackLocale(),
                'current' => Session::get('locale') ?? app()->getLocale()
            ]
        ];

        return $settings;
    }

    public function translations()
    {
        $translations = [];

        $translations['auth'] = __('auth');
        $translations['pagination'] = __('pagination');
        $translations['passwords'] = __('passwords');
        $translations['validation'] = __('validation');
        $translations['form'] = __('form');

        return $translations;
    }

}
