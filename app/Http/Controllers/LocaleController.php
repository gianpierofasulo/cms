<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\File;

class LocaleController extends Controller
{
	public function switchLang($locale)
	{
		setcookie('language', $locale, time() + (86400 * 365), "/");
		return back();
		//$language = File::all();
		//return view('admin.vendor.translation.languages.translations.index', compact('language'));
	}

    public function languageDelete(Request $request)
    {
        File::deleteDirectory('resources/lang/'.$request->langVal);
        return response()->json('success');
        
    }
}