<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingsController extends Controller
{
    public function index()
    {

        $settings = [
            'app_name' => env("APP_NAME"),
            'app_debug' => env("APP_DEBUG"),
            'localization' => [
                'default' => env("APP_LOCALE"),
                'fallback' => env("APP_FALLBACK_LOCALE"),
                'current' => Session::get('locale') ?? env("APP_LOCALE")
            ]
        ];

        return response()->json($settings);
    }

}
