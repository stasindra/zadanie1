<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateProfileRequest;

class ProfileController extends Controller
{
    public function update(UpdateProfileRequest $request){

        auth()->user()->update($request->only('name','email'));
        
        return redirect()->route('profile')->with('message','Profile saved successfully');
    }
}
