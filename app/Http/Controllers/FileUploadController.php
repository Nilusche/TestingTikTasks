<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use App\Models\Testcase;
use Storage;
class FileUploadController extends Controller
{

    public function fileUpload($testid,Request $req){
        
        if($req->hasfile('files')) {
            foreach($req->file('files') as $file){
                $fileName = time().'_'.$file->getClientOriginalName();
                $filePath = $file->storeAs('uploads', $fileName, 'public_uploads');
    
                $fileModel = new File;
                $fileModel->testcases_id = $testid;
                $fileModel->name = time().'_'.$file->getClientOriginalName();
                $fileModel->file_path = '/storage/' . $filePath;
                $fileModel->save();    
                
            }
           
            
        }
        return redirect('/index');
    }
}
