<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\SetupGuide;


class SetupGuideController extends Controller
{
   public function render()
    {
        $data = SetupGuide::orderBy('status', 'asc')->get();
        $incomplete = $data->where('status', 0)->count();

        if ($incomplete) {
            return view('admin.setupguide', compact('data'));
        }
    }
}
