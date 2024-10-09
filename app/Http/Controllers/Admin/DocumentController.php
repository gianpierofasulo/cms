<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class DocumentController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
        $document = Document::all();
        return view('admin.document.index', compact('document'));
    }

    public function create()
    {
        return view('admin.document.create');
    }

    public function store(Request $request)
    {
        $document = new Document();
        $data = $request->only($document->getFillable());

        $request->validate([
            'document_name' => 'required|unique:documents',
            'status' => '',
            'document_photo' => 'required|mimes:pdf,doc,docx,jpeg,png,jpg,gif,svg,pdf,PDF,ZIP,zip,RAR,rar,webp,tiff,tif,psd|max:20485923',
            'document_url' => ''
        ]);


        $statement = DB::select("SHOW TABLE STATUS LIKE 'documents'");
        $ai_id = $statement[0]->Auto_increment;
        $ext = $request->file('document_photo')->extension();
        $final_name = 'document-'.$ai_id.'.'.$ext;
        $request->file('document_photo')->move(public_path('uploads/'), $final_name);
        $data['document_photo'] = $final_name;

        $document->fill($data)->save();
        return redirect()->route('admin.document.index')->with('success', 'Document is added successfully!');
    }

    public function edit($id)
    {
        $document = Document::findOrFail($id);
        return view('admin.document.edit', compact('document'));
    }

    public function update(Request $request, $id)
    {
        $document = Document::findOrFail($id);
        $data = $request->only($document->getFillable());

        if($request->hasFile('document_photo')) {
            $request->validate([
                'document_name'   =>  [
                    'required'
                ],
                'status'   =>  [
                    ''
                ],
                'document_photo' => 'image|mimes:pdf,doc,docx,jpeg,png,jpg,gif,svg,pdf,PDF,ZIP,zip,RAR,rar,webp,tiff,tif,psd|max:20485923',
                'document_url' =>  [
                    'required'
                ]
            ]);
            if ($document->document_photo != null) {
                $photoPath = public_path('uploads/' . $document->document_photo);
                if (file_exists($photoPath)) {
                    unlink($photoPath);
                }
            }
            $ext = $request->file('document_photo')->extension();
            $final_name = 'document-'.$id.'.'.$ext;
            $request->file('document_photo')->move(public_path('uploads/'), $final_name);
            $data['document_photo'] = $final_name;
        } else {
            $request->validate([
                'document_name'   =>  [
                    'required'
                ],
                'status'   =>  [
                    ''
                ],
                'document_url' =>  [
                    ''
                ]
            ]);
            $data['document_photo'] = $document->document_photo;
        }

        $document->fill($data)->save();
        return redirect()->route('admin.document.index')->with('success', 'Document is updated successfully!');
    }

    public function destroy($id)
    {
        $document = Document::findOrFail($id);
        if ($document->document_photo != null) {
            $photoPath = public_path('uploads/' . $document->document_photo);
            if (file_exists($photoPath)) {
                unlink($photoPath);
            }
        }
        $document->delete();
        return Redirect()->back()->with('success', 'Document is deleted successfully!');
    }
}
