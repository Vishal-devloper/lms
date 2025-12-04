<?php

namespace App\Services;

use App\Repositories\subCategoryRepository;

class SubCategoryService{
    protected $subCategoryRepository;
     public function __construct(subCategoryRepository $subCategoryRepository){
        $this->subCategoryRepository=$subCategoryRepository;
     }
     public function saveSubCategory(array $data){
        return $this->subCategoryRepository->saveSubCategory($data);
     }

     public function updateSubCategory(array $data,$id){
        return $this->subCategoryRepository->updateSubCategory($data,$id);
     }
}

