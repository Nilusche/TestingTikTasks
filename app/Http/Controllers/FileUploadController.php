<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Testcase;
use Storage;
class FileUploadController extends Controller
{

    public function fileUpload($testid,Request $request){
        
        if($request->hasfile('files'))
         {
            foreach($request->file('files') as $file)
            {
                $fileName = $testid. '_' .time() .$file->getClientOriginalName(). '.' . $file->extension();

                $clientname = $file->getClientOriginalName();
                $type = $file->extension();
                $size = $file->getSize();
        
                $file->move(public_path('file'), $fileName);
                File::create([
                    'testcase_id' => $testid,
                    'slug' => $clientname,
                    'name' => $fileName,
                    'type' => $type,
                    'size' => $size
                ]);
            }
         }
        
        return redirect()->back();
    }

    public function open($fileName){
        return response()->file('file/'. $fileName);
    }

    
    public function destroy(File $file)
    {
        $path = 'file/'. $file->name;
        $file->delete();
        unlink(public_path($path));

        return redirect()->back();
    }
}
