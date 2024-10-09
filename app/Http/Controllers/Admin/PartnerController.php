<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class PartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $partner = Partner::all();
        return view('admin.partner.index', compact('partner'));
    }

    public function create()
    {
        return view('admin.partner.create');
    }

    public function store(Request $request)
    {
        $partner = new Partner();
        $data = $request->only($partner->getFillable());

        $request->validate([
            'partner_name' => 'required|unique:partners',
            'status' => '',
            'partner_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'partner_url' => 'required'
        ]);

        $statement = DB::select("SHOW TABLE STATUS LIKE 'partners'");
        $ai_id = $statement[0]->Auto_increment;
        $ext = $request->file('partner_photo')->extension();
        $final_name = 'partner-'.$ai_id.'.'.$ext;
        $request->file('partner_photo')->move(public_path('uploads/'), $final_name);
        $data['partner_photo'] = $final_name;

        $partner->fill($data)->save();
        return redirect()->route('admin.partner.index')->with('success', 'Partner is added successfully!');
    }

    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('admin.partner.edit', compact('partner'));
    }

    public function update(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);
        $data = $request->only($partner->getFillable());

        if($request->hasFile('partner_photo')) {
            $request->validate([
                'partner_name'   =>  [
                    'required'
                ],
                'status'   =>  [
                    ''
                ],
                'partner_photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'partner_url' =>  [
                    'required'
                ]
            ]); 
            if ($partner->partner_photo != null) {
                $photoPath = public_path('uploads/' . $partner->partner_photo);
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            }
            $ext = $request->file('partner_photo')->extension();
            $final_name = 'partner-' . $id . '.' . $ext;
            $request->file('partner_photo')->move(public_path('uploads/'), $final_name);
            $data['partner_photo'] = $final_name;

          
        } else {
            $request->validate([
                'partner_name'   =>  [
                    'required'
                ],
                'status'   =>  [
                    ''
                ],
                'partner_url' =>  [
                    'required'
                ]
            ]);
            $data['partner_photo'] = $partner->partner_photo;
        }

        $partner->fill($data)->save();
        return redirect()->route('admin.partner.index')->with('success', 'Partner is updated successfully!');
    }

    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
         if ($partner->partner_photo != null) {
            $photoPath = public_path('uploads/' . $partner->partner_photo);
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }
        $partner->delete();
        return Redirect()->back()->with('success', 'Partner is deleted successfully!');
    }
}
