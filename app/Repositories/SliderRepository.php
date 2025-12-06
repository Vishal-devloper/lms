<?php

namespace App\Repositories;

use App\Models\Slider;
use App\Traits\FileUploadTrait;

class SliderRepository{
    
    use FileUploadTrait;
    public function saveSlider($data,$photo){
            $slider = new Slider();

        // Upload Photo

        if($photo){
            $data['photo']=$this->uploadFile($photo,'slider',$slider->photo);
        }


        $slider->create($data);
        return $slider;
    }
    public function updateSlider($data,$photo,$id){
         $slider=Slider::find($id);

         // Upload Photo

        if($photo){
            $data['photo']=$this->uploadFile($photo,'slider',$slider->photo);
        }


        $slider->update($data);
        return $slider;
    }
}