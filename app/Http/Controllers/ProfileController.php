<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Tearcherinfo;

class ProfileController extends Controller
{
   public function display(){
      $userData = Tearcherinfo::all();
      return view('profile',compact('userData'));
   }
}