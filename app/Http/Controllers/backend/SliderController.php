<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use App\Services\SliderService;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    protected $sliderService;
    public function __construct(SliderService $sliderService){
        $this->sliderService=$sliderService;
    }
    public function index()
    {
        $all_sliders=Slider::latest()->get();
        return view('backend.admin.slider.index',compact('all_sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request)
    {
        $this->sliderService->saveSlider($request->validated(),$request->file('photo'));
        return redirect()->back()->with('success','Slider created successfully');
    }

   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider=Slider::find($id);
        return view('backend.admin.slider.edit',compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SliderRequest $request, string $id)
    {
        $this->sliderService->updateSlider($request->validated(),$request->file('photo'),$id);
        return redirect()->back()->with('success','Slider updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider=Slider::findOrFail($id);
        if($slider->photo){
            $imagePath=public_path(parse_url($slider->photo,PHP_URL_PATH));
            if(file_exists($imagePath)){
                unlink($imagePath);
            }
        }
        $slider->delete();
        return redirect()->back()->with('success','slider deleted successfully');
    }
}
