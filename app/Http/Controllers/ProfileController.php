<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Models\Tearcherinfo;
use App\Models\Employee;

class ProfileController extends Controller
{
   public function display(){
      // $employees = Employee::limit(2)->get();
      // $employees = Employee::latest()->take(2)->get();
      $employees = Employee::orderBy('id','desc')->take(2)->get();

      return view('profile',compact('employees'));
   }
}