<?php

namespace App\Repositories;

use App\Models\Category;
use App\Traits\FileUploadTrait;

class CategoryRepository{
    
    use FileUploadTrait;
    public function saveCategory($data,$photo){
            $category = new Category();

        // Upload Photo

        if($photo){
            $data['photo']=$this->uploadFile($photo,'category',$category->photo);
        }


        $category->create($data);
        return $category;
    }
    public function updateCategory($data,$photo,$id){
         $category=Category::find($id);

         // Upload Photo

        if($photo){
            $data['photo']=$this->uploadFile($photo,'category',$category->photo);
        }


        $category->update($data);
        return $category;
    }
}