<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Counter;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class CounterController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $counter = Counter::orderBy('counter_title')->orderBy('counter_number')->get();
        return view('admin.counter.index', compact('counter'));
    }

    public function create()
    {
        return view('admin.counter.create');
    }

    public function store(Request $request)
    {
        $counter_item = new Counter();
        $data = $request->only($counter_item->getFillable());

        $request->validate([
            'counter_title' => 'required',
            'counter_number' => 'numeric|min:0|max:327672985',
            'counter_favicon' => 'required'
        ]);

        $counter_item->fill($data)->save();
        return redirect()->route('admin.counter.index')->with('success', 'Counter Item is added successfully!');
    }

    public function edit($id)
    {
        $counter_item = Counter::findOrFail($id);
        return view('admin.counter.edit', compact('counter_item'));
    }

    public function update(Request $request, $id)
    {
        $counter_item = Counter::findOrFail($id);
        $data = $request->only($counter_item->getFillable());

        $request->validate([
            'counter_title' => 'required',
            'counter_number' => 'numeric|min:0|max:327672985',
            'counter_favicon' => 'required'
        ]);

        $counter_item->fill($data)->save();
        return redirect()->route('admin.counter.index')->with('success', 'Counter Item is updated successfully!');
    }

    public function destroy($id)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        $counter_item = Counter::findOrFail($id);
        $counter_item->delete();
        return Redirect()->back()->with('success', 'Counter Item is deleted successfully!');
    }
}
