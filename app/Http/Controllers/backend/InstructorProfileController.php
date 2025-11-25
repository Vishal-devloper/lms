<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileRequest;
use App\Services\ProfileService;
use Illuminate\Http\Request;

class InstructorProfileController extends Controller
{
    protected $profileService;
    public function __construct(ProfileService $profileService){
        $this->profileService=$profileService;
    }




    public function index(){
        return view('backend.instructor.profile.index');
    }
    public function store(ProfileRequest $request){
        // Pass data and files to service
        $this->profileService->saveProfile($request->validated(),$request->file('photo'));
        return redirect()->back()->with('success','Profile updated successfully');
    }
    public function setting(){
        return view('backend.instructor.profile.setting');
    }
}
