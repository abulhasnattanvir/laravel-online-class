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
      // $employees = Employee::orderBy('id','desc')->take(2)->get();
      $employees = Employee::orderBy('id','asc')->get();

      return view('profile',compact('employees'));
   }


   public function create(){
      return view('createProfile');
   }


   public function store(Request $request ){

      $request->validate([
         'uname' => 'required',
         'uemail' => 'required|email|unique:employees,email',
         'uphone' => 'required|max:11',
         'uaddress' => 'required',
         'ucountry' => 'required'
      ]);

      Employee::create([
         'name' => $request->uname,
         'email' => $request->uemail,
         'phone' => $request->uphone,
         'address' => $request->uaddress,
         'country' => $request->ucountry,
      ]);

      return view('createProfile');
   }


   public function edit(Employee $employe){
      $data = $employe;
      return view('editProfile',compact('data'));
   }

   public function update(Request $request, Employee $employe){
      $validated = $request->validate([
         'uname' => 'required',
         'uemail' => 'required',
         'uphone' => 'required|max:11',
         'uaddress' => 'required',
         'ucountry' => 'required'
      ]);
      // $employe->update($validated);
      // dd($employe->update($validated));
      $employe->update([
         'name'    => $validated['uname'],
         'email'   => $validated['uemail'],
         'phone'   => $validated['uphone'],
         'address' => $validated['uaddress'],
         'country' => $validated['ucountry'],
      ]);

      return redirect()->route('profile.view')->with('success','teslrjksdf sldjf');

   }

}