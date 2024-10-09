<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\LanguageTranslationController;

use Illuminate\Routing\Controller;



class LanguageController extends Controller
{


// ----------this is functional=======
     public function switchLang($lang)
    {
        if (array_key_exists($lang, Config::get('languages'))) {
            Session::put('setLocale', $lang, time() + (86400 * 365), "/");
        }
        return Redirect::back();
    }
}
