<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
 
use Illuminate\Support\Facades\File as FileF;
use Illuminate\Support\Facades\Storage;
use App\Models\admin\File;
use DB;

   class FolderController extends Controller
   {
    public function __construct()
    {
        $this->middleware('admin');
    }
public function showFile($folderId) {
    // Assuming you have the folder ID, retrieve the file details from the database
    $file = File::where('folder_id', $folderId)->first();

    // Pass the file details to the view
    return view('file', ['file' => $file]);
}

public function show1($id)
{
    $folder = Folder::findOrFail($id);
    $subfolders = $folder->children;
    $files = $folder->files;

    // Assuming you want to pass the file details of the first file to the view
    $file = $files->first(); 

    return view('admin.folders.show', compact('folder', 'subfolders', 'files', 'file'));
}

public function show($id)
{
    $folder = Folder::findOrFail($id);
    $subfolders = $folder->children;
    $files = $folder->files;
    $folderId = $folder->id;
    $fileObjects = [];
    if ($files) {
        // Retrieve filenames and construct file paths if files exist
        $filenames = $files->pluck('filename')->toArray();
        
        foreach ($filenames as $filename) {
            $filePath = 'uploads/' . $folderId . '/' . $filename;
            $fileObjects[] = public_path($filePath);
        }
    }

    $imageCounts = DB::table('files')
                    ->select(DB::raw('SUBSTRING_INDEX(filename, ".", -1) as file_type'), 
                             DB::raw('COUNT(*) as total_files'), 
                             DB::raw('SUM(LENGTH(path)) as total_file_size'))
                    ->groupBy('file_type')
                    ->get();

    return view('admin.folders.show', compact('imageCounts','folder', 'subfolders', 'files', 'folderId', 'fileObjects'));
}



     public function showOrgi($id)
    {
        $folder = Folder::findOrFail($id);
        $subfolders = $folder->children;
        $files = $folder->files;

$folderId = $folder->id;
$filename = 'example.jpg';
// Construct the file path
$filePath = 'uploads/' . $folderId . '/' . $filename;
// Fetch the file
$file = public_path($filePath);
// Do something with the file, such as returning a response or downloading it
//return response()->file($file);

        return view('admin.folders.show', compact('folder', 'subfolders', 'files','folderId'));
    }

     public function upload(Request $request, $id)
    {
        $request->validate([
           'file' => 'required|file|max:99999999999999999|mimes:image:jpg,png,gif,pdf,xls,xlsx,mp3,mp4',
            // 'file' => 'required|file|max:999999',
        ]);

        $folder = Folder::findOrFail($id);
        $file = $request->file('file');
        $filename = $file->getClientOriginalName();

        // $folderPath = 'public/uploads/' . $folder->id;
        // Storage::makeDirectory($folderPath);
        // $path = $file->storeAs($folderPath, $filename);

        // Get the file name and extension
        $filename = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        // Determine the desired file path
        $filePath = 'public/uploads/' . $folder->id . '/' . $filename;
        // Move the file to the desired location
        $file->move(public_path('uploads/' . $folder->id), $filename);
        // Store the file path for further use if needed
        $path = $filePath;

        
        //$path = $file->store('public/uploads/' . $folder->id);
        // Store the file in the specified folder
       // $path = $file->storeAs('public/' . $folder->id, $filename);

        $uploadedFile = new File();
        $uploadedFile->folder_id = $folder->id;
        $uploadedFile->filename = $filename;
        $uploadedFile->path = $path;
        $uploadedFile->save();

        return redirect()->route('admin.folders.show', $folder->id)
            ->with('success', 'File uploaded successfully!');
    }


private function getFiles($folder)
{
    $subfolders = $folder->children;
    $files = $folder->files;
    $folderId = $folder->id;
    $fileObjects = [];

    if ($files) {
        // Retrieve filenames and construct file paths if files exist
        $filenames = $files->pluck('filename')->toArray();

        foreach ($filenames as $filename) {
            $filePath = 'uploads/' . $folderId . '/' . $filename;
            $fileObjects[] = public_path($filePath);
        }
    }

    return $fileObjects;
}



public function sidebar($id)
{
    $folder = Folder::findOrFail($id);
    $subfolders = $folder->children;
    $files = $folder->files;
    $folderId = $folder->id;
    $fileObjects = [];
    if ($files) {
        // Retrieve filenames and construct file paths if files exist
        $filenames = $files->pluck('filename')->toArray();
        foreach ($filenames as $filename) {
            $filePath = 'uploads/' . $folderId . '/' . $filename;
            $fileObjects[] = public_path($filePath);
        }
    }
 
    return view('admin.folders.file_sidebar', compact('folder', 'subfolders', 'files', 'folderId', 'fileObjects'));
}

       public function index()
       {
           $folders = Folder::all();
       // folders
            $folderChart = DB::table('folders')
            ->select('name', DB::raw('count(*) as total'))
            ->orderBy('total', 'desc')
            ->groupBy('name')
            ->limit(10)
            ->get();
            //files
            $filesChart = Folder::select('folders.name', 'files.folder_id')
            ->join('files', 'folders.id', '=', 'files.folder_id')
            ->selectRaw('COUNT(*) as t')
            ->groupBy('folders.name', 'files.folder_id')
            ->limit(10)
            ->get();

            // file size
            $imageCounts = DB::table('files')
                    ->select(DB::raw('SUBSTRING_INDEX(filename, ".", -1) as file_type'), 
                             DB::raw('COUNT(*) as total_files'), 
                             DB::raw('SUM(LENGTH(path)) as total_file_size'))
                    ->groupBy('file_type')
                    ->get();
     
           return view('admin.folders.index', compact('folders','filesChart','folderChart','imageCounts'));
       }


       public function create()
       {
           // Fetch all the available parent folders for dropdown selection
           $parentFolders = Folder::pluck('name', 'id');

           return view('admin.folders.create', compact('parentFolders'));
       }

       public function store(Request $request)
       {
           $request->validate([
               'name' => 'required|max:255',
               'parent_id' => 'nullable|exists:folders,id'
           ]);

           Folder::create($request->all());

           return redirect()->route('admin.folders.index')->with('success', 'Folder created successfully.');
       }
       // Sub folder
       public function destroy1($id)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        // Deleting data from "folders" table
        $folder = Folder::findOrFail($id);
        $folder->delete();

        // Deleting data from "blogs" table
        $all_data1 = DB::table('files')->where('folder_id', $id)->get();
            foreach($all_data1 as $row) {
            $filePath = public_path('uploads/' . $row->folder_id . '/' . $row->filename);
             $filePath = public_path('uploads/' . $row->folder_id);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }
        
        DB::table('files')->where('folder_id',$id)->delete();

        // Success Message and redirect
        return Redirect()->back()->with('success', 'Folder is deleted successfully!');
    }
       
      public function destroy($id)
    {
         if(!env('USER_VERIFIED'))
        {
            return redirect()->back()->with('error', 'This feature is disable for demo!');
        }
        // Deleting data from "files" table
        $file = File::findOrFail($id);
        $file->delete();
        // Deleting data from "files" table
        $all_data = DB::table('files')->get();
        foreach($all_data as $row) {
            $filePath = public_path('uploads/' . $row->folder_id . '/' . $row->filename);
            if (file_exists($filePath)) {
                unlink($filePath);
            }
        }
        DB::table('files')->where('folder_id',$id)->delete();
        // Success Message and redirect
        return Redirect()->back()->with('success', 'File is deleted successfully!');
    }

      // ============================//

    public function shareFolder($folderId)
    {
        $folder = Folder::findOrFail($folderId);
        $folder->is_shared = true;
        $folder->save();

        return response()->json(['success' => 'Folder shared successfully!']);
    }

    public function renameFolder(Request $request, $folderId)
    {
        $folder = Folder::findOrFail($folderId);
        $folder->name = $request->input('new_folder_name');
        $folder->save();

        return response()->json(['success' => 'Folder renamed successfully!']);
    }

    public function createSubFolder(Request $request)
    {
        $parentFolderId = $request->input('parent_folder_id');
        $newFolderName = $request->input('new_folder_name');

        $newFolder = new Folder();
        $newFolder->name = $newFolderName;
        $newFolder->parent_folder_id = $parentFolderId;
        $newFolder->save();

        return response()->json(['success' => 'Subfolder created successfully!']);
    }

    // Sub 
    public function retrieveAndCountFiles()
    {
        // Retrieve and count the files with the 'filename' type
        $files = File::where('filename', 'like', '%.jpg') // Replace '.jpg' with your desired filename type
                    ->count();


        // Calculate the storage usage of image and media, document, and other types
        $imageMediaUsage = File::where('filename', 'like', '%.jpg')
                             ->orWhere('filename', 'like', '%.png')
                             ->orWhere('filename', 'like', '%.gif')
                             ->sum('path'); // Replace 'size' with the actual column name for storage size
        
        $documentUsage = File::where('filename', 'like', '%.doc')
                            ->orWhere('filename', 'like', '%.pdf')
                            ->orWhere('filename', 'like', '%.txt')
                            ->sum('path'); // Replace 'size' with the actual column name for storage size
        
        $otherUsage = File::where('filename', 'not like', '%.jpg')
                         ->where('filename', 'not like', '%.png')
                         ->where('filename', 'not like', '%.gif')
                         ->where('filename', 'not like', '%.doc')
                         ->where('filename', 'not like', '%.pdf')
                         ->where('filename', 'not like', '%.txt')
                         ->sum('path'); // Replace 'size' with the actual column name for storage size
      // Retrieve and count the files with the 'filename' type
        $imageMediaFiles = File::where('filename', 'like', '%.jpg')
                              ->orWhere('filename', 'like', '%.png')
                              ->orWhere('filename', 'like', '%.gif')
                              ->get();

     

        // Calculate the total storage usage of image and media files
        $imageMediaUsage = $this->calculateStorageUsage($imageMediaFiles);

        return view('admin.folders.show', compact('files', 'imageMediaUsage', 'documentUsage', 'otherUsage'));
    }

   }

