<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class PasswordUpdateRepository{
    
    
    public function updatePassword($data){
         $user_id=Auth::user()->id;
        $user=User::where('id',$user_id)->first();

        // check if current password is correct

        if(!Hash::check($data['current_password'],$user->password)){
            return false;
        }

        // Save new password
        $user->password=Hash::make($data['new_password']);
        $user->save();
        return $user;
    }
}