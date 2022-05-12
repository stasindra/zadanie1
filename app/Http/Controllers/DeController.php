<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UpdateProfileRequest;

class DeController extends Controller
{
    public function delet(){

        auth()->user()->delete();

        return redirect()->route('welcome')->with('success','Profile saved successfully');
    }
}
