<?php

namespace App\Http\Controllers;


use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function edit()
    {
        $user = Auth::user(); // Get the authenticated user
        return view('profile.edit', compact('user'));
    }

    public function editProfile($id){
        
        $user = User::find($id) ;
       

        return view('profile.edit-profile',compact('user'));

    }


    public function delete($id){
        if($id == 1){
            return view('dashboard');
        }
        $isDeleted = User::destroy($id) ;

        if ($isDeleted) {
            return view('dashboard');
        }
       
        

    }


    public function editUserProfile(Request $request, $id){
        
        $user = User::find($id) ;

        $filepath = $request->file('profile_photo')->store('public');
        $filepathArr= explode('/',$filepath);
        $path =$filepathArr[1];

        $user->profile_photo_path=$path;
        
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->gender=$request->gender;
        $user->dob=$request->dob;
        $user->profession = $request->profession;
        $user->height = $request->height;
        $user->color = $request->color;
        $user->education = $request->education;
        $user->income = $request->income;
        $user->parents_details = $request->parents_details;
        $user->siblings_details = $request->siblings_details;
        $user->other = $request->other;
        $user->miscellaneous = $request->miscellaneous;
        
        if ($user->save()) {
            return view('dashboard');
        }
    }

    public function addProfile(Request $request){
        
        $user = new User;

        $filepath = $request->file('profile_photo')->store('public');
        $filepathArr= explode('/',$filepath);
        $path =$filepathArr[1];
        $user->profile_photo_path=$path;

        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->gender=$request->gender;
        $user->dob=$request->dob;
        $user->profession = $request->profession;
        $user->height = $request->height;
        $user->color = $request->color;
        $user->education = $request->education;
        $user->income = $request->income;
        $user->parents_details = $request->parents_details;
        $user->siblings_details = $request->siblings_details;
        $user->other = $request->other;
        $user->miscellaneous = $request->miscellaneous;
        $user->save();

        if ($user) {
            return view('dashboard');
        }

    }

    public function update(Request $request)
    {
        $user = Auth::user();

        //dd($request->all());
        
        // Validate the incoming request
        
        $request->validate([
            'gender' => 'nullable|in:1,2',
            'dob' => 'nullable|date',
            'profession' => 'nullable|string',
            'height' => 'nullable|numeric',
            'color' => 'nullable|string',
            'education' => 'nullable|string',
            'income' => 'nullable|numeric',
            'parents_details' => 'nullable|string',
            'siblings_details' => 'nullable|string',
            'other' => 'nullable|string',
            'miscellaneous' => 'nullable|string',
        ]);

        // Convert DOB to correct format if provided
        $dob = $request->dob ? Carbon::createFromFormat('Y-m-d', $request->dob) : null;

        // Update the user’s profile
        $user->update([
            'gender' => $request->gender,
            'dob' => $dob,
            'profession' => $request->profession,
            'height' => $request->height,
            'color' => $request->color,
            'education' => $request->education,
            'income' => $request->income,
            'parents_details' => $request->parents_details,
            'siblings_details' => $request->siblings_details,
            'other' => $request->other,
            'miscellaneous' => $request->miscellaneous,
        ]);

        // Redirect to home with success message
        return redirect()->route('home')->with('status', 'Profile updated successfully.');
    }
}
