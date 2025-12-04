<?php

namespace App\Repositories;

use App\Models\SubCategory;


class SubCategoryRepository{
    
    public function saveSubCategory($data){
            $subCategory = new SubCategory();

        $subCategory->create($data);
        return $subCategory;
    }
    public function updateSubCategory($data,$id){
         $subCategory=SubCategory::find($id);

        $subCategory->update($data);
        return $subCategory;
    }
}