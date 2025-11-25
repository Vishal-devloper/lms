<?php

namespace App\Traits;

trait FileUploadTrait
 {
    public function uploadFile($file,$folder,$existingFile = null){
        if($file){
            // Define the target directory
            $targetFolder=public_path("upload/{$folder}");

            // Ensure the folder exists
            if(!file_exists($targetFolder)){
                mkdir($targetFolder,0755,true);
            }

            // Delete existing file
            if($existingFile && file_exists(public_path(parse_url($existingFile,PHP_URL_PATH)))){
                unlink(public_path(parse_url($existingFile,PHP_URL_PATH)));
            }

            // generate a new file name

            $fileName=uniqid().'.'.$file->getClientOriginalExtension();

            // Move the uploaded file to target folder
            $file->move($targetFolder,$fileName);

            // return full public url

            return url("upload/{$folder}/{$fileName}");
        }
        return $existingFile;
    }
}