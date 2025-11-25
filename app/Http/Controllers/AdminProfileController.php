<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordUpdateRequest;
use App\Http\Requests\ProfileRequest;
use App\Services\PasswordUpdateService;
use App\Services\ProfileService;
use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    protected $profileService,$passwordUpdateService;
    public function __construct(ProfileService $profileService,PasswordUpdateService $passwordUpdateService){
        $this->profileService=$profileService;
        $this->passwordUpdateService=$passwordUpdateService;
    }
    public function index(){
        return view('backend.admin.profile.index');
    }

    public function store(ProfileRequest $request){
        // Pass data and files to service
        $this->profileService->saveProfile($request->validated(),$request->file('photo'));
        return redirect()->back()->with('success','Profile updated successfully');
    }
    public function setting(){
        return view('backend.admin.profile.setting');
    }
    public function passwordSetting(PasswordUpdateRequest $request){
        // Pass data and files to service
        $update=$this->passwordUpdateService->updatePassword($request->validated());
        if(!$update){
            return back()->withErrors(['current_password' => 'Current Password is Incorrect']);
        }
        else{
            return redirect()->back()->with('success','Password updated successfully');
        }
    }
}
