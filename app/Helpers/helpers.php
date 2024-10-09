<?php

use Illuminate\Support\Facades\Facade;
use msztorc\LaravelEnv\Env;
use App\Http\Controllers\PaymentController;
use App\Models\Admin\PaymentSetting;
use Msztorc\LaravelEnv\EnvServiceProvider;

if (! function_exists('startsWithCode')) {
    function startsWithCode($content)
    {
        // Define the characters that usually indicate the start of a code block
        $codeIndicators = ['<', '>', '[', '{', ':', '.'];

        // Check if the content starts with any of the code indicators
        foreach ($codeIndicators as $indicator) {
            if (strpos(ltrim($content), $indicator) === 0) {
                return true;
            }
        }

        return false;
    }
}
if (!function_exists('formatFileSize')) {
    /**
     * Format the file size in human-readable format
     * @param int $size
     * @return string
     */
    function formatFileSize($size)
    {
        $units = ['B', 'KB', 'MB', 'GB'];

        $i = 0;
        while ($size >= 1024 && $i < 3) {
            $size /= 1024;
            $i++;
        }

        return round($size, 2) . ' ' . $units[$i];
    }
}
// ====================================//
// =============File size==============//
// ====================================//
 function formatBytes($bytes, $precision = 2) {
            $units = ['B', 'KB', 'MB', 'GB', 'TB'];

            $bytes = max($bytes, 0);
            $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
            $pow = min($pow, count($units) - 1);

            $bytes /= (1 << (10 * $pow));

            return round($bytes, $precision) . ' ' . $units[$pow];
        }
// =====================================================
// ===================Env Function====================
// =====================================================
if (! function_exists('envReplace')) {
    function envReplace($name, $value)
    {
        $path = base_path('.env');
        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                $name.'='.env($name),
                $name.'='.$value,
                file_get_contents($path)
            ));
        }

        if (file_exists(App::getCachedConfigPath())) {
            Artisan::call('config:cache');
        }
    }
}

if (! function_exists('setEnv')) {
    function setEnv($key, $value)
    {
        if ($key && $value) {
            $env = new Env();
            $env->setValue($key, $value);
        }

        if (file_exists(App::getCachedConfigPath())) {
            Artisan::call('config:cache');
        }
    }
}

if (! function_exists('checkSetEnv')) {

    function checkSetEnv($key, $value)
    {
        if ((env($key) != $value)) {
            setEnv($key, $value);
        }
    }
}

if (! function_exists('error')) {
    function error($name, $class = 'is-invalid')
    {
        $errors = session()->get('errors', app(ViewErrorBag::class));

        return $errors->has($name) ? $class : '';
    }
}

// ========================================================
// ===================Response Function====================
// ========================================================

/**
 * Response success data collection
 *
 * @param  object  $data
 * @param  string  $responseName
 * @return \Illuminate\Http\Response
 */
if (! function_exists('responseData')) {
    function responseData(?object $data, string $responseName = 'data')
    {
        return response()->json([
            'success' => true,
            $responseName => $data,
        ], 200);
    }
}

/**
 * Response success data collection
 *
 * @param  string  $msg
 * @return \Illuminate\Http\Response
 */
if (! function_exists('responseSuccess')) {
    function responseSuccess(string $msg = 'Success')
    {
        return response()->json([
            'success' => true,
            'message' => $msg,
        ], 200);
    }
}

/**
 * Response error data collection
 *
 * @param  string  $msg
 * @param  int  $code
 * @return \Illuminate\Http\Response
 */
if (! function_exists('responseError')) {
    function responseError(string $msg = 'Something went wrong, please try again', int $code = 404)
    {
        return response()->json([
            'success' => false,
            'message' => $msg,
        ], $code);
    }
}

if (! function_exists('flashSuccess')) {
    function flashSuccess(string $msg)
    {
        session()->flash('success', $msg);
    }
}

if (! function_exists('flashError')) {
    function flashError(string $message = null)
    {
        if (! $message) {
            $message = __('something_went_wrong');
        }

        return session()->flash('error', $message);
    }
}
if (! function_exists('flashWarning')) {
    function flashWarning(string $message = null, bool $custom = false)
    {
        if (! $message) {
            $message = __('something_went_wrong');
        }

        if ($custom) {
            return session()->flash('warning', $message);
        } else {
            return session()->flash('warning', $message);
        }
    }
}
if (! function_exists('allowLaguageChanage')) {
    function allowLaguageChanage()
    {
        return Setting::first()->language_changing ? true : false;
    }
}