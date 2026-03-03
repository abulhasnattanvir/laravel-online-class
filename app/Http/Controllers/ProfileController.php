<?php

namespace App\Http\Controllers;
use App\Http\Models\Tearcherinfo;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function display(){
      $userData = Tearcherinfo::all();
      return view('profile',compact('userData'));
   }
}